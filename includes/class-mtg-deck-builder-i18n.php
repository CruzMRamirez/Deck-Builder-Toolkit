<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       cruz-ramirez.com
 * @since      1.0.0
 *
 * @package    Mtg_Deck_Builder
 * @subpackage Mtg_Deck_Builder/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mtg_Deck_Builder
 * @subpackage Mtg_Deck_Builder/includes
 * @author     Cruz M Ramirez <ramirezcruz935@gmail.com>
 */
class Mtg_Deck_Builder_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mtg-deck-builder',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
