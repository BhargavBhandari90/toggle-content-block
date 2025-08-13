<?php
/**
 * Render block.
 *
 * @package ToggleContent
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$label_left  = ! empty( $attributes['labelLeft'] ) ? $attributes['labelLeft'] : esc_html__( 'Left', 'toggle-content-block' );
$label_right = ! empty( $attributes['labelRight'] ) ? $attributes['labelRight'] : esc_html__( 'Right', 'toggle-content-block' );

$context = array(
	'post_id'    => get_the_ID(),
	'labelLeft'  => $label_left,
	'labelRight' => $label_right,
	'activeSide' => 'left',
);

?>

<div
	<?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>
	data-wp-interactive="buntywp/toggle-content"
	<?php echo wp_kses_data( wp_interactivity_data_wp_context( $context ) ); ?>
>
	<div data-wp-bind--class="context.activeSide">
		<div class="toggle-buttons">
			<span class="toggle-label" data-wp-text="context.labelLeft"></span>
			<button class="toggle-switch" type="button" data-wp-bind--aria-label="Toggle" data-wp-on--click="actions.toggleContent"></button>
			<span class="toggle-label" data-wp-text="context.labelRight"></span>
		</div>
		<div class="block-editor-inner-blocks 333">
			<?php echo wp_kses_post( $content ); ?>
		</div>
	</div>
</div>
