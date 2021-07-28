<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              cruz-ramirez.com
 * @since             1.0.0
 * @package           Mtg_Deck_Builder
 *
 * @wordpress-plugin
 * Plugin Name:       MTG Deck Builder
 * Plugin URI:        cruz-ramirez.com
 * Description:       This plugin provides deck building functionality for Magic, The Gathering the card game.
 * Version:           0.0.1
 * Author:            Cruz M Ramirez
 * Author URI:        cruz-ramirez.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mtg-deck-builder
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MTG_DECK_BUILDER_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mtg-deck-builder-activator.php
 */
function activate_mtg_deck_builder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mtg-deck-builder-activator.php';
	Mtg_Deck_Builder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mtg-deck-builder-deactivator.php
 */
function deactivate_mtg_deck_builder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mtg-deck-builder-deactivator.php';
	Mtg_Deck_Builder_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mtg_deck_builder' );
register_deactivation_hook( __FILE__, 'deactivate_mtg_deck_builder' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mtg-deck-builder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mtg_deck_builder() {

	$plugin = new Mtg_Deck_Builder();
	$plugin->run();

}
run_mtg_deck_builder();
