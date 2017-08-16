<?php

class Database {

    protected static $connection;

    public function connect() {
        // Try and connect to the database
        if (!isset($this->$connection)) {
            // Load configuration as an array. Use the actual location of your configuration file
            $config = parse_ini_file('config_$15246_remote.ini');
            self::$connection = mysql_connect($config['host'], $config['username'], $config['password'], $config['dbname']);
        }

        // If connection was not successful, handle the error
        if (self::$connection === false) {
            echo("could not connect");
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            return false;
        }

        return self::$connection;
    }

    public function query($query) {

        // Connect to the database
        $connection = $this->connect();
        //return $connection;

        // Query the database
        $result = $connection->query($query);

        return $result;

    }

    public function select($query) {

        $rows = array();

        $result = $this->query($query);
        //$fields = $result->fetch_fields();

        if ($result === false) {
            return false;
        }

        while ($row = $result->fetch_assoc()) {
            $rows[] = array_map('utf8_encode',$row);
        }

        return json_encode($rows);

    }

    public function delete($query) {
        
        $result = $this->query($query);

        return $result;
    }

    public function insert($query) {

        // Connect to the database
        $connection = $this->connect();

        // Query the database
        $connection->query($query);

        return mysqli_insert_id($connection);
    }

    public function update($query) {

        // Connect to the database
        $connection = $this->connect();

        // Query the database
        $connection->query($query);

        return mysqli_insert_id($connection);
    }

    public function error() {
        $connection = $this->connect();
        return $connection->error;
    }

    public function quote($value) {
        $connection = $this->connect();
        return "'" . $connection->real_escape_string($value) . "'";
    }

}

/*  To get column names
SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='yourdatabasename' AND `TABLE_NAME`='yourtablename';
*/