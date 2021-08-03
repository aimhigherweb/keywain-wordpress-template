<?php
/**
 * Block Name: Last Updated Block
 * 
 */


 $date = get_field('date');

?>

<p class="last-updated">Last Updated: <time data-date="<?php echo $date; ?>"><?php echo date('j F, Y, g:i a', $date); ?></time></p>