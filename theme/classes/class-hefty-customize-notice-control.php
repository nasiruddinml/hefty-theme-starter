<?php
/**
 * Customize API: Hefty_Starter_Theme_Customize_Notice_Control class
 *
 * @package Hefty_Starter_Theme_for_WordPress
 * @since 1.0.0
 */

/**
 * Customize Notice Control class.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Hefty_Starter_Theme_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $type = 'hefty-starter-theme-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'hefty-starter-theme' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/twenty-twenty-one/#dark-mode-support', 'hefty-starter-theme' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'hefty-starter-theme' ); ?>
			</a></p>
		</div>
		<?php
	}
}
