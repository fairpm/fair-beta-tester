<?php
/**
 * Plugin Name: FAIR Connect Beta Tester
 * Description: Enable beta testing for FAIR Connect plugin.
 * Version: 0.9.1
 * Author: FAIR Contributors
 * Author URI: https://fair.pm
 * Security: security@fair.pm
 * License: MIT
 * Requires at least: 5.4
 * Requires PHP: 7.4
 * Network: true
 * Update URI: https://fair.git-updater.com
 * Plugin ID:
 * Requires Plugins: fair-plugin
 */

namespace FAIR\Beta_Tester;

const FAIR_BETA_TESTER_PLUGIN_FILE = __FILE__;

require_once __DIR__ . '/vendor/afragen/git-updater-lite/Lite.php';
require_once __DIR__ . '/inc/namespace.php';

bootstrap();
