<?php
/**
 * Performance-Optimized Header
 * Automatically handles compression, Facebook API, and performance settings
 * 
 * Usage: include_once("inc/header-performance.php");
 */

// Include performance conditional logic first
include_once(__DIR__ . "/performance-conditional.php");

// Set page type for compression (can be overridden before including this file)
if (!isset($GLOBALS['page_type'])) {
    $GLOBALS['page_type'] = 'general';
}

// Include Facebook tracking (conditionally loaded based on performance mode)
include_once(__DIR__ . "/facebook-critical.php");

// Include preventkeys (conditionally loaded)
include_once(__DIR__ . "/preventkeys-conditional.php");

// Include analytics (conditionally loaded)  
include_once(__DIR__ . "/analitica-web-conditional.php");

// CSS Resources (minified in production)
if (is_production_mode()) {
    // Production CSS - minified versions
    ?>
    <link rel="stylesheet" href="/dist/landing.bundle.css?v=<?= filemtime(__DIR__ . '/../dist/landing.bundle.css') ?>">
    <?php
} else {
    // Development CSS - individual files for debugging
    ?>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
    <?php
}

// JavaScript Resources (minified in production)
if (is_production_mode()) {
    // Production JS - minified and bundled
    ?>
    <script src="/dist/landing.bundle.js?v=<?= filemtime(__DIR__ . '/../dist/landing.bundle.js') ?>" defer></script>
    <?php
} else {
    // Development JS - individual files for debugging
    ?>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    <?php
}

// Performance debug info in test mode
if (is_test_mode()) {
    ?>
    <!-- PERFORMANCE DEBUG INFO -->
    <!-- Mode: <?= get_performance_mode() ?> -->
    <!-- HTML Compression: <?= is_production_mode() ? 'ON' : 'OFF' ?> -->
    <!-- Page Type: <?= isset($GLOBALS['page_type']) ? $GLOBALS['page_type'] : 'general' ?> -->
    <!-- END DEBUG INFO -->
    <?php
}
?> 