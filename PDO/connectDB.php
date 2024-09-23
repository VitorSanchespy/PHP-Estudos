<?php
class Connect extends PDO{
    private $host = 'localhost';
    private $dbname = 'estudos';
    private $username = 'root';
    private $password = '';
    public $conn;
    public function __construct(){
        try{
        $this->conn =  new PDO ("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            echo 'Connexão bem sucedida';
        }catch(PDOException $e){
            echo 'Erro ao connectar no Banco de Dados:'. $e->getMessage();
        }
    }
}

$conn = new Connect();


?>