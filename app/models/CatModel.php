<?php
/*
 * CatModel Class
 * */
class CatModel extends SModel{
    public function __construct(){
        parent::__construct();
    }
    public function catList($table){
        $sql = "SELECT * FROM $table";
        return $this->db->select($sql);
    }

    public function catById($table, $id){
        $sql = "SELECT * FROM $table WHERE id=:id";
        $data = array(":id" => $id);
        return $this->db->select($sql, $data);
    }

    public function insertCat($table, $data){
        return $this->db->insert($table, $data);
    }
}
?>