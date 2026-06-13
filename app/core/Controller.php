<?php
/**
 * Base Controller
 * โหลด Model และ View
 */
class Controller {
    // โหลด model
    public function model($model){
        // Require file ของ model นั้นๆ
        require_once __DIR__ . '/../models/' . $model . '.php';

        // คืนค่า instance ของ model
        return new $model();
    }

    // โหลด view
    public function view($view, $data = []){
        // ตรวจสอบไฟล์ view
        if(file_exists(__DIR__ . '/../views/' . $view . '.php')){
            require_once __DIR__ . '/../views/' . $view . '.php';
        } else {
            // ไม่พบ View
            die('View does not exist');
        }
    }
}
