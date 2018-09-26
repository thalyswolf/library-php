<?php
  class Sql extends Config{
    private $host, $user, $password, $banco, $conn;
    protected $obj, $itens = array();
    protected $prefix;
    function __construct(){
      $this->host = self::DB_HOST;
      $this->user = self::DB_USER;
      $this->password = self::DB_PASSWORD;
      $this->banco = self::DB_NAME;
      $this->prefix = self::DB_PREFIX;
      $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
      );
      $this->conn  = new PDO("mysql:host={$this->host};dbname={$this->banco}",
                      $this->user, $this->password, $options);
    }
  	private function setParams($statement, $parameters = array()){
  		foreach ($parameters as $key => $value) {
  			$this->bindParam($statement, $key, $value);
  		}
  	}

  	private function bindParam($statement, $key, $value){
  		$statement->bindParam($key, $value);
  	}

  	public function query($rawQuery, $params = array()){
  		$stmt = $this->conn->prepare($rawQuery);
  		$this->setParams($stmt, $params);
  		$stmt->execute();
  	}

  	public function select($rawQuery, $params = array()):array{
  		$stmt = $this->conn->prepare($rawQuery);
  		$this->setParams($stmt, $params);
  		$stmt->execute();
  		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  	}

    public function update($rawQuery, $params = array()){
  		$stmt = $this->conn->prepare($rawQuery);
  		$this->setParams($stmt, $params);
  		$stmt->execute();
    }

  }
 ?>
