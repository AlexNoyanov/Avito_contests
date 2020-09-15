<?php
    
    // === Соединение с базой ===
    // В Этой части реализовано подклчение к базе
    //
    // Используем PostgreSQL базу 
    
    
class Database {

    // укажите свои учетные данные базы данных
    private $host = "localhost";
    private $db_name = "api_db";
    private $username = "root";
    private $password = "MyDatabasePassword";
    public $conn;

    // получаем соединение с БД
    public function getConnection(){

        $this->conn = null;
        
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        // И возвращаем, готово:
        return $this->conn;
    }
}
?>
