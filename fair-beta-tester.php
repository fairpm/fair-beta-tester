<?php
/**
 * Plugin Name: FAIR Connect Beta Tester
 * Description: Enable beta testing for FAIR Connect plugin.
 * Version: 0.5.0
 * Author: FAIR Contributors
 * Author URI: https://fair.pm
 * Security: security@fair.pm
 * License: MIT
 * Requires at least: 5.4
 * Requires PHP: 7.4
 * Network: true
 * GitHub Plugin URI: https://github.com/fairpm/fair-beta-tester
 * Primary Branch: main
 * Release Asset: true
 * Plugin ID:
 */

namespace FAIR\Beta_Tester;

require_once __DIR__ . '/vendor/afragen/git-updater-lite/Lite.php';
require_once __DIR__ . '/inc/namespace.php';

bootstrap();
