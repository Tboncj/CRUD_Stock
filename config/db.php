<?php
include "core.php";
class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    public $con;

    public function __construct(){
        $this->host     = HOST;
        $this->db       = DB_NAME;
        $this->user     = USERNAME;
        $this->password = PASSWORD;
        $this->charset  = 'utf8mb4';
        if (!$this->con) {
            $this->con = self::connect();
        }
    }

    public function connect(){
        $connection = "";
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}


?>