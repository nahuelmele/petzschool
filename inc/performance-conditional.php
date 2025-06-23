<?php
/**
 * Performance Conditional System
 * Solo las funciones que realmente se usan
 */

function is_test_mode() {
    return (
        strpos($_SERVER['HTTP_HOST'], 'localhost') !== false ||
        strpos($_SERVER['HTTP_HOST'], '.test') !== false ||
        strpos($_SERVER['HTTP_HOST'], '.local') !== false ||
        isset($_GET['test'])
    );
}

function is_production_mode() {
    return !is_test_mode();
}

function get_performance_mode() {
    return is_production_mode() ? 'production' : 'development';
}

// Variables globales para compatibilidad
$GLOBALS['testing'] = is_test_mode();
$GLOBALS['production'] = is_production_mode();

// Iniciar compresión HTML en producción
if (is_production_mode()) {
    ob_start('compress_html_advanced');
}
?>
