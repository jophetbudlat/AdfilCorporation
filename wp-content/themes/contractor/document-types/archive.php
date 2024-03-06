<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Garage_Archive_Document extends Jet_Document_Base {

	public function get_name() {
		return 'contractor_archive';
	}

	public static function get_title() {
		return __( 'Garage Archive', 'contractor' );
	}

	public function get_preview_as_query_args() {
		return array(
			'post_type'   => 'post',
			'numberposts' => get_option( 'posts_per_page', 10 ),
		);
	}

}