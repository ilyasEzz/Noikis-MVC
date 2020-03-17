<?php 
/*
 * PDO Model Class
 * Connect to Database
 * Create prepared statement
 * Bind values
 * Returns rows and results 
 */

class Model { 
  private $host = DB_HOST;
  private $user = DB_USER;
  private $password = DB_PASS;
  private $db_name = DB_NAME;
  
  private $pdo;
  private $stmt;
  private $error;

  public function __construct() {
    // Set DSN
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
    $options = [
      PDO::ATTR_PERSISTENT => true, // Persistant connection to the database
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  // to use PDOException
    ];

    // Create PDO Instance
    try{
      $this->pdo = new PDO($dsn, $this->user, $this->password, $options);
    } 
    catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;

    }
  }
} 