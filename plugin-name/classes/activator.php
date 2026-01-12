<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/classes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/classes
 * @author     Your Name <email@example.com>
 */

namespace Company\Plugin_Name;

if (!defined('ABSPATH')) exit;

class Activator {

    /**
     * Runs during plugin activation.
     *
     * @since    1.0.0
     */
    public static function activate() {
        global $wpdb;

        // Example: Create a custom database table
        $table_name = $wpdb->prefix . 'plugin_name_custom_table';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name tinytext NOT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        // Example: Register default options
        $default_options = [
            'plugin_option_1' => 'default_value_1',
            'plugin_option_2' => 'default_value_2',
            'plugin_option_3' => 'default_value_3',
        ];

        foreach ($default_options as $key => $value) {
            if (get_option($key) === false) {
                add_option($key, $value);
            }
        }

        // Example: Schedule a single event (if needed)
        if (!wp_next_scheduled('plugin_name_daily_event')) {
            wp_schedule_event(time(), 'daily', 'plugin_name_daily_event');
        }
    }
}
