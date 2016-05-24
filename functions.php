<?php

class Slabs_Framework {

	protected static $single_instance = null;

	static function init() {

		if ( self::$single_instance === null ) {
			self::$single_instance = new self();
		}

		return self::$single_instance;

	}

	public function hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'load_styles' ) );
	}

	public function load_styles() {

		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
		wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' );

		wp_enqueue_style( 'slabs', get_template_directory_uri() . '/includes/slabs/css/slabs.min.css' );
		wp_enqueue_script( 'slabs', get_template_directory_uri() . '/includes/slabs/js/slabs.min.js', array('jquery'), '1.0.0', true );

	}

}

add_action( 'after_setup_theme', array( Slabs_Framework::init(), 'hooks' ) );