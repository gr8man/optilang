<?php
/**
 * Plugin Name: Optilang
 * Description: A high-performance WordPress plugin designed to optimize language handling and streamline multilingual content management.
 * Version:     1.0.0
 * Author:      Bogdan Lambarski
 * Text Domain: optilang
 * License:     GPL2
 */

// Blokada bezpośredniego dostępu
if (!defined('ABSPATH')) {
    exit;
}

// Definicja stałej ścieżki
define('OPTILANG_PATH', plugin_dir_path(__FILE__));