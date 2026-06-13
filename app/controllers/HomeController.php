<?php
/**
 * HomeController
 * จัดการหน้าแรกสุดของเว็บไซต์
 */
class HomeController extends Controller {
    public function __construct() {
        // โหลด Model ถ้ามี
    }

    public function index() {
        $data = [
            'title' => SITENAME,
            'description' => 'ระบบบริหารจัดการการเรียนการสอน งานธุรการ งานวิทยฐานะ และประเมินผลแบบครบวงจร สำหรับครูและนักเรียน',
        ];
        
        $this->view('layouts/header', $data);
        $this->view('home/index', $data);
        $this->view('layouts/footer', $data);
    }
}
