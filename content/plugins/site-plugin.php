<?php
/*
Plugin Name: Site plugin for example.com
Description: Site specific code changes for example.com
*/

Sitename::get_instance();

class Sitename {

	protected static $instance;

	protected function __construct() {

		// Place your site specific code and all snippets in here.

	}

	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

}
