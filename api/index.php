<?php
/**
 * Front Controller (Vercel API Entry Point)
 * จุดเริ่มต้นของระบบทั้งหมด
 */

// โหลด Configuration
require_once __DIR__ . '/../config/config.php';

// โหลด Core Libraries
require_once __DIR__ . '/../app/core/App.php';
require_once __DIR__ . '/../app/core/Controller.php';
require_once __DIR__ . '/../app/core/Model.php';

// เริ่มต้น Session เพื่อใช้ในการ Login และ Toast Notifications
session_start();

// สร้าง Instance ของคลาส App
$init = new App();
