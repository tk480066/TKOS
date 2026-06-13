<?php
/**
 * Base Controller
 * โหลด Model และ View
 */
class Controller {
    // โหลด model
    public function model($model){
        // Require file ของ model นั้นๆ
        require_once '../app/models/' . $model . '.php';

        // คืนค่า instance ของ model
        return new $model();
    }

    // โหลด view
    public function view($view, $data = []){
        // ตรวจสอบไฟล์ view
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        } else {
            // ไม่พบ View
            die('View does not exist');
        }
    }
}
