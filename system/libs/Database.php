<?php
/*
 * Database Class
 * */
class Database extends PDO{

    public function __construct($dsn, $user, $pass){
        parent::__construct($dsn, $user, $pass);
        //echo "Database connected";
    }

    public function select($sql, $data = array()){
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value){
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data){
        $keys   = implode(",", array_keys($data));
        $values = ":".implode(", :", array_keys($data));

        $sql    = $this->prepare("INSERT INTO $table($keys) VALUES($values)");
        foreach ($data as $keys => $values){
            $sql->bindValue($keys, $values);
        }
        return $sql->execute();
    }

}
?>