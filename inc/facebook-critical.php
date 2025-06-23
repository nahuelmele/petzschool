<?php
/**
 * Facebook Critical - Carga face.js completo
 * face.js contiene: 4 pixeles + cookies + API conversiones
 */

if (is_production_mode()) {
    // Cargar face.js que tiene todo el sistema completo
    echo '<script src="/js/face.js" async></script>' . "\n";
} else {
    echo '<!-- Facebook: DISABLED (Test Mode) -->' . "\n";
}
?> 