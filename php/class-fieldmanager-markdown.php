<?php
/**
 * Class file for Fieldmanager_Markdown
 *
 * @package Fieldmanager
 */

use Fieldmanager\Libraries\Parsedown;

/**
 * Content field which renders Markdown using the Parsedown library.
 */
class Fieldmanager_Markdown extends Fieldmanager_Content {

	/**
	 * Override field_class.
	 *
	 * @var string
	 */
	public $field_class = 'markdown';

	/**
	 * Render content as HTML from parsed Markdown.
	 *
	 * @param mixed $value Unused value.
	 * @return string Rendered content.
	 */
	public function render_content( $content ) {
		return wp_kses_post( ( new Parsedown\Parsedown() )->text( $content ) );
	}
}
