<?php

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;


// check if class already exists
if( !class_exists('aimhigher_acf_field_icon_select') ) :


class aimhigher_acf_field_icon_select extends acf_field {
	
	
	/*
	*  __construct
	*
	*  This function will setup the field type data
	*
	*  @type	function
	*  @date	5/03/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct( $settings ) {		
		$this->name = 'icon_select';
		$this->label = __('Icon Selecter', 'acf-icon-select');
		$this->category = 'choice';
		$this->defaults = array(
			'multiple'   => 0,
			'icon_path'	=>	'/src/img/icons',
		);	
		$this->l10n = array(
			'error'	=> __('Error! Please enter a higher value', 'acf-icon-select'),
		);
		$this->settings = $settings;
		// do not delete!
    	parent::__construct();
    	
	}
	
	function render_field_settings( $field ) {
		
		/*
		*  acf_render_field_setting
		*
		*  This function will create a setting for your field. Simply pass the $field parameter and an array of field settings.
		*  The array of settings does not require a `value` or `prefix`; These settings are found from the $field array.
		*
		*  More than one setting can be added by copy/paste the above code.
		*  Please note that you must also have a matching $defaults value for the field name (font_size)
		*/

		acf_render_field_setting( $field, array(
			'label'			=> __('Multiple','acf-icon-select'),
			'instructions'	=> __('Can the users select multiple icons?','acf-icon-select'),
			'type'			=> 'true_false',
			'name'			=> 'multiple',
			'ui' 			=> 1,
		));

		acf_render_field_setting( $field, array(
			'label'			=> __('Icon Path','acf-icon-select'),
			'instructions'	=> __('Enter the subfolder, within your theme, that the icons are saved','acf-icon-select'),
			'type'			=> 'text',
			'name'			=> 'icon_path',
		));
	}
	
	
	
	/*
	*  render_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field (array) the $field being rendered
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field( $field ) {
		/*
		*  Fetch the icons from the folder
		*/

		$path = '/src/img/icons';
		$atts  = '';
		$class = 'acf-icon-select';

		if($field['icon_path']) {
			$path = $field['icon_path'];
		}

		if($field['multiple']) {
			$atts = 'type="checkbox"';
		}
		else {
			$atts = 'type="radio"';
		}

		$folder = get_template_directory() . $path;
		$icons = list_files($folder);		
		
		/*
		*  Display icons as a list of options
		*/
		
		?>

		<ul>
			<?php foreach ($icons as $icon): 
				$icon_path = str_replace($folder, '', $icon);
				$icon_name = str_replace('.svg', '', $icon_path);
				$icon_name = preg_replace('/^\//', '', $icon_name);
				$field_id = esc_attr($field['id']);

				if(strval($icon_name) == strval($field['value'])) {
					$atts = $atts . ' checked="checked" data-checked="checked"';
					$class = $class . ' acf-icon-select-selected';
				}

				?>
				<li class="<?php echo $class; ?>">
					<input 
						class="field"
						data-field_type="icon_select"
						<?php echo $atts; ?>
						value="<?php echo $icon_name; ?>" 
						name="<?php echo $field['name']; ?>"
						id="<?php echo $field_id . '-' . $icon_name; ?>"
					/>
					<label for="<?php echo $field_id . '-' . $icon_name; ?>">
						<img 
							src="<?php echo get_template_directory_uri() . $path . $icon_path; ?>" 
							alt="<?php echo $icon_name; ?>"
						/>
						<span class="sr-only"><?php echo $icon_name; ?></span>
					</label>
				</li>
			<?php endforeach; ?>
		</ul>
			
		<?php
	}

	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add CSS + JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	
	function input_admin_enqueue_scripts() {
		
		// vars
		$url = get_template_directory_uri() . '/acf/';
		$version = $this->settings['version'];
		
		
		// register & include JS
		wp_register_script('aimhigher', "{$url}assets/js/input.js", array('acf-input'), $version);
		wp_enqueue_script('aimhigher');
		
		
		// register & include CSS
		// wp_register_style('aimhigher', "{$url}assets/css/input.css", array('acf-input'), $version);
		// wp_enqueue_style('aimhigher');
		
	}
	

	
	/*
	*  load_value()
	*
	*  This filter is applied to the $value after it is loaded from the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/
	
	
	function load_value( $value, $post_id, $field ) {
		
		return $value;
		
	}
	
	
	
	/*
	*  update_value()
	*
	*  This filter is applied to the $value before it is saved in the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/
	
	
	function update_value( $value, $post_id, $field ) {
		
		return $value;
		
	}
	
	
	
	/*
	*  validate_value()
	*
	*  This filter is used to perform validation on the value prior to saving.
	*  All values are validated regardless of the field's required setting. This allows you to validate and return
	*  messages to the user if the value is not correct
	*
	*  @type	filter
	*  @date	11/02/2014
	*  @since	5.0.0
	*
	*  @param	$valid (boolean) validation status based on the value and the field's required setting
	*  @param	$value (mixed) the $_POST value
	*  @param	$field (array) the field array holding all the field options
	*  @param	$input (string) the corresponding input name for $_POST value
	*  @return	$valid
	*/
	
	
	function validate_value( $valid, $value, $field, $input ){		
		return $valid;
	}
	
	
	
	/*
	*  load_field()
	*
	*  This filter is applied to the $field after it is loaded from the database
	*
	*  @type	filter
	*  @date	23/01/2013
	*  @since	3.6.0	
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	$field
	*/
	
	
	function load_field( $field ) {
		
		return $field;
		
	}	
	
	
	
	/*
	*  update_field()
	*
	*  This filter is applied to the $field before it is saved to the database
	*
	*  @type	filter
	*  @date	23/01/2013
	*  @since	3.6.0
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	$field
	*/
	
	
	function update_field( $field ) {

		var_dump($field);
		
		return $field;
		
	}		
	
}


// initialize
new aimhigher_acf_field_icon_select( $this->settings );


// class_exists check
endif;

?>