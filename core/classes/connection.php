<?php

// try for connect with class

class Connect {
    protected static $servername = "172.93.105.132";
    protected static $db_name="db_los_angos_dc";
    protected static $username = "root";
    protected static $password = "dIpG01c_*ssaB0ai0A+EckjzzMGf@b9A75C1E@#Az";
    protected static $pdo;
    public function __construct() { }

      // this is try to use self function in connect to make login easier with :: operator

    public static function connect() {
         $servername =self::$servername;
         $db_name = self::$db_name;
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db_name", self::$username, self::$password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
          //   echo "Connected successfully";
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
        
            return $conn;
    }

}


