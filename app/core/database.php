<?php 
namespace App\core;
use App\config\config;
use PDO;
use PDOException;
// Catatan harus menggunakan use PDO / PDOException agar tidak terbaca sebagai namespace
class database{
    private $host = config::DB_HOST;
    private $user = config::DB_USER;
    private $pass = config::DB_PASSWORD;
    private $dbname = config::DB_NAME;
    protected $pdo;
    private $stat;
    public static $index; // Nothing
    public function __construct(){
        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function query($query){
        $this->stat = $this->pdo->prepare($query);
    }
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stat->bindValue($param, $value, $type);
    }
    public function execute(){
        $this->stat->execute();
    }
    public function fetchAll(){
        return $this->stat->fetchAll(PDO::FETCH_OBJ);
    }
    public function fetch(){
        return $this->stat->fetch(PDO::FETCH_OBJ);
    }
    public function rowCount(){
        return $this->stat->rowCount();
    }
}
?>