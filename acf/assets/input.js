(function($){
	
	
	/**
	*  initialize_field
	*
	*  This function will initialize the $field.
	*
	*  @date	30/11/17
	*  @since	5.6.5
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function initialize_field( $field ) {
		
		//$field.doStuff();

		document.querySelectorAll('.field.acf-icon-select').forEach((field) => {
			field.addEventListener('change', ({target}) => {
				const image = document.querySelector(`#${target.id} ~ .acf-icon-select-feature`);

				console.log({image, target, id: target.id, selector: `#${target.id} ~ .acf-icon-select-feature`});

				image.src = `${target.dataset?.path}${target.value}.svg`;
			})
		})
		
	}
	
	
	if( typeof acf.add_action !== 'undefined' ) {
	
		/*
		*  ready & append (ACF5)
		*
		*  These two events are called when a field element is ready for initizliation.
		*  - ready: on page load similar to $(document).ready()
		*  - append: on new DOM elements appended via repeater field or other AJAX calls
		*
		*  @param	n/a
		*  @return	n/a
		*/
		
		acf.add_action('ready_field/type=icon_select', initialize_field);
		acf.add_action('append_field/type=icon_select', initialize_field);
		
		
	} else {
		
		/*
		*  acf/setup_fields (ACF4)
		*
		*  These single event is called when a field element is ready for initizliation.
		*
		*  @param	event		an event object. This can be ignored
		*  @param	element		An element which contains the new HTML
		*  @return	n/a
		*/
		
		$(document).on('acf/setup_fields', function(e, postbox){
			
			// find all relevant fields
			$(postbox).find('.field[data-field_type="icon_select"]').each(function(){
				
				// initialize
				initialize_field( $(this) );

				console.log('field ready')
				
			});
		
		});
	
	}

})(jQuery);
