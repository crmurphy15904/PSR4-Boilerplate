<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/classes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/classes
 * @author     Your Name <email@example.com>
 */

namespace Company\Plugin_Name;

if (!defined('ABSPATH')) exit;

class Deactivator {

    /**
     * Runs during plugin deactivation.
     *
     * @since    1.0.0
     */
    public static function deactivate() {
        // Clear scheduled events
        $timestamp = wp_next_scheduled('plugin_name_daily_event');
        if ($timestamp) {
            wp_unschedule_event($timestamp, 'plugin_name_daily_event');
        }

        // Remove any transient data specific to the plugin
        delete_transient('plugin_name_temp_data');

        // Example: Cleanup options if necessary (optional)
        // Uncomment the following lines if you want to delete plugin options upon deactivation
        
        $options = [
            'plugin_option_1',
            'plugin_option_2',
            'plugin_option_3',
        ];

        foreach ($options as $option) {
            delete_option($option);
        }

        // Optionally, perform cleanup tasks here without permanently altering user data
    }
}
