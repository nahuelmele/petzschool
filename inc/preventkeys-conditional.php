<?php
/**
 * Carga condicional de preventkeys.js
 * 
 * - En producción: Carga preventkeys.js (bloquea click derecho y teclas de debug)
 * - Con ?test: NO carga preventkeys.js (permite debug)
 * - En localhost: NO carga preventkeys.js (permite debug)
 */

// Usar función centralizada para detectar modo testing
$isTestMode = is_test_mode();

// Solo cargar preventkeys.js en producción (NO en modo test)
if (!$isTestMode) {
    echo '<script src="/js/preventkeys.js"></script>' . "\n";
    echo '<!-- Preventkeys.js cargado - Modo Producción -->' . "\n";
} else {
    echo '<!-- Preventkeys.js NO cargado - Modo Debug/Test activo -->' . "\n";
    echo '<!-- Click derecho y teclas de debug habilitadas para desarrollo -->' . "\n";
}
?> 