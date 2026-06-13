<?php
/**
 * Front Controller
 * จุดเริ่มต้นของระบบทั้งหมด
 */

// โหลด Configuration
require_once '../config/config.php';

// โหลด Core Libraries (ถ้าใช้ Composer สามารถใช้ autoloader ได้ แต่นี่เป็นการโหลดแบบ Manual พื้นฐาน)
require_once '../app/core/App.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Model.php';

// เริ่มต้น Session เพื่อใช้ในการ Login และ Toast Notifications
session_start();

// สร้าง Instance ของคลาส App
$init = new App();
