<?php
/**
 * Base Model Class (PDO Database Wrapper)
 * จัดการการเชื่อมต่อฐานข้อมูล รองรับ PostgreSQL (Supabase) และ MySQL
 */
class Model {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $port = DB_PORT;
    private $driver = DB_DRIVER;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
        // สร้าง DSN (Data Source Name)
        if ($this->driver === 'pgsql') {
            $dsn = 'pgsql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname;
        } else {
            $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname . ';charset=utf8mb4';
        }
        
        $options = array(
            PDO::ATTR_PERSISTENT => true, // เพิ่มประสิทธิภาพ
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // จัดการ Error ด้วย Exception
        );

        // สร้าง PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch(PDOException $e) {
            $this->error = $e->getMessage();
            // ในระดับ Production ควรเก็บ Log ไม่ใช่ echo ออกมา
            echo 'Database Connection Failed: ' . $this->error;
        }
    }

    // เตรียมคำสั่ง SQL (Prepared Statement)
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
    }

    // Bind ค่าตัวแปร
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Execute Statement
    public function execute(){
        return $this->stmt->execute();
    }

    // ดึงข้อมูลเป็น Array of Objects (หลายแถว)
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // ดึงข้อมูลแถวเดียว
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // นับจำนวนแถวที่มีการเปลี่ยนแปลง
    public function rowCount(){
        return $this->stmt->rowCount();
    }
}
