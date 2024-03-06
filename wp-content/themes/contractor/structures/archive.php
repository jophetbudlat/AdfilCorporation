<?php

if ( ! class_exists( 'Garage_Structure_Archive' ) ) {

	/**
	 * Define Garage_Structure_Archive class
	 */
	class Garage_Structure_Archive extends Jet_Theme_Core_Structure_Base {

		public function get_id() {
			return 'contractor_archive';
		}

		public function get_single_label() {
			return esc_html__( 'Garage Archive', 'contractor' );
		}

		public function get_plural_label() {
			return esc_html__( 'Garage Archives', 'contractor' );
		}

		public function get_sources() {
			return array();
		}

		public function get_document_type() {
			return array(
				'class' => 'Garage_Archive_Document',
				'file'  => get_theme_file_path( 'document-types/archive.php' ),
			);
		}

		/**
		 * Is current structure could be outputed as location
		 *
		 * @return boolean
		 */
		public function is_location() {
			return true;
		}

		/**
		 * Location name
		 *
		 * @return boolean
		 */
		public function location_name() {
			return 'contractor_archive';
		}

		/**
		 * Aproprite location name from Elementor Pro
		 *
		 * @return [type] [description]
		 */
		public function pro_location_mapping() {
			return 'archive';
		}

	}

}
