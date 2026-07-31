<?php
/**
 * Plugin Name: WP Core Web Vitals Optimizer
 * Description: A lightweight Core Web Vitals optimization hook for resource-hint management.
 * Version: 1.0.0
 * Author: Sang Huynh Xuan
 * License: GPL-2.0-or-later
 */

declare(strict_types=1);

if (! defined('ABSPATH')) { exit; }

require_once __DIR__ . '/includes/Support.php';
require_once __DIR__ . '/includes/Feature.php';

add_action('plugins_loaded', static function (): void {
    (new \SangPortfolio\WpCoreWebVitalsOptimizer\Feature())->register();
});
