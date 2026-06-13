<?php
/**
 * App Core Class (Router)
 * ทำหน้าที่แยก URL และเรียก Controller / Method ที่ถูกต้อง
 */
class App {
    protected $currentController = 'HomeController';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->getUrl();

        // ค้นหา Controller 
        if(isset($url[0])) {
            $controllerName = ucwords($url[0]) . 'Controller';
            if(file_exists('../app/controllers/' . $controllerName . '.php')){
                $this->currentController = $controllerName;
                unset($url[0]);
            }
        }

        // โหลด Controller
        require_once '../app/controllers/'. $this->currentController . '.php';

        // สร้าง Instance ของ Controller
        $this->currentController = new $this->currentController;

        // ค้นหา Method
        if(isset($url[1])){
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // จัดการ Parameters (ถ้ามี)
        $this->params = $url ? array_values($url) : [];

        // เรียกใช้งาน Method ของ Controller พร้อมส่ง Params ไปให้
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl() {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return [];
    }
}
