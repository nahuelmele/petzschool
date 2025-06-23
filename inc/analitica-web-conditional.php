<?php
/**
 * Carga condicional de analitica-web.js
 * 
 * - En producción: Carga analitica-web.js (con tracking)
 * - Con ?test: NO carga analitica-web.js (sin tracking)
 * - En localhost: NO carga analitica-web.js (sin tracking)
 */

// Usar función centralizada para detectar modo testing
$isTestMode = is_test_mode();

// Solo cargar analítica en producción (NO en modo test)
if (!$isTestMode) {
    echo '<script src="/js/analitica-web.js"></script>' . "\n";
    echo '<!-- analitica-web.js cargado - Modo Producción -->' . "\n";
} else {
    echo '<!-- analitica-web.js NO cargado - Modo Debug/Test activo -->' . "\n";
    echo '<!-- Tracking web deshabilitado para desarrollo -->' . "\n";
}
?> 