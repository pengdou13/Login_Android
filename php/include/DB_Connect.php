<?php

/**
 * @author Mi Li 1302197 Group 15 modified from Ravi Tamada
 * @link http://www.androidhive.info/2012/01/android-login-and-registration-with-php-mysql-and-sqlite/ Complete tutorial
 */
class DB_Connect {

    private $conn;

    // Connecting to database
    public function connect() {

        // Connecting to mysql database, parameters are host name, db user name,db password, database name
        $this->conn = new mysqli('localhost', 'root', '12345678', 'android');
        return $this->conn;
    }

}

?>
