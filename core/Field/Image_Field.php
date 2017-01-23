<?php

namespace Carbon_Fields\Field;

/**
 * Image field class.
 *
 * Allows selecting and saving a media attachment file,
 * where the image ID is saved in the database.
 */
class Image_Field extends File_Field {
	public $field_type = 'image';

	/**
	 * Administration initialization actions
	 */
	public function admin_init() {
		$this->button_label = __( 'Select Image', \Carbon_Fields\TEXT_DOMAIN );
		$this->window_button_label = __( 'Select Image', \Carbon_Fields\TEXT_DOMAIN );
		$this->window_label = __( 'Images', \Carbon_Fields\TEXT_DOMAIN );

		$this->add_template( $this->get_type() . '-Description', array( $this, 'template_description' ) );
	}
}
