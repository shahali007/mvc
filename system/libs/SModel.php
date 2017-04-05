<?php
/*
 * SModel for Database connection
 * */
class SModel{
    protected $db = array();
    public function __construct(){
        $dsn    = "mysql:dbname=mvc; host=localhost";
        $user   = "root";
        $pass   = "1234";
        $this->db = new Database($dsn, $user, $pass);
    }
}
?>