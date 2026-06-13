<?php
/**
 * Application Constants
 */

// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root (Dynamic or Hardcoded depending on environment)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
define('URLROOT', $protocol . '://' . $host);

// Site Name
define('SITENAME', 'ระบบครูปิง (KruPing System)');

// Database Configuration (Ready for Supabase PostgreSQL)
// สำหรับ Local MySQL ให้เปลี่ยน DB_DRIVER เป็น mysql และเปลี่ยน PORT เป็น 3306
define('DB_DRIVER', 'pgsql'); 
define('DB_HOST', 'db.qaolwveywmvdgmzxiuqm.supabase.co');
define('DB_USER', 'postgres');
define('DB_PASS', 'ping480066thanasak');
define('DB_NAME', 'postgres');
define('DB_PORT', '5432');
