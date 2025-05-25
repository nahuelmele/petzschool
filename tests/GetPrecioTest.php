<?php
require_once __DIR__ . '/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class GetPrecioTest extends TestCase
{
    /** @runInSeparateProcess */
    public function testGetPrecioColombia()
    {
        // Prepare environment to skip network calls
        $_COOKIE['data'] = serialize(['co', 'bogota', 'cundinamarca', 'sa']);
        $_SERVER['SERVER_NAME'] = 'localhost';
        $_SERVER['HTTP_HOST'] = 'localhost';
        $_SERVER['REQUEST_URI'] = '/';
        $_SERVER['HTTPS'] = 'off';
        $_SERVER['SERVER_PORT'] = '80';
        $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
        $_SERVER['HTTP_USER_AGENT'] = 'CLI';

        require __DIR__ . '/../inc/functions.php';

        $this->assertSame('44.000', getPrecio(10));
    }

    /** @runInSeparateProcess */
    public function testGetPrecioMexico()
    {
        $_COOKIE['data'] = serialize(['mx', 'cdmx', 'mx', 'na']);
        $_SERVER['SERVER_NAME'] = 'localhost';
        $_SERVER['HTTP_HOST'] = 'localhost';
        $_SERVER['REQUEST_URI'] = '/';
        $_SERVER['HTTPS'] = 'off';
        $_SERVER['SERVER_PORT'] = '80';
        $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
        $_SERVER['HTTP_USER_AGENT'] = 'CLI';

        require __DIR__ . '/../inc/functions.php';

        $this->assertSame('240', getPrecio(10));
    }
}
