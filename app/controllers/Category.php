<?php
/*
 * Category Controller
 * */
class Category extends SController{

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $this->load->view("home");
    }

    public function addCategory(){
        $this->load->view("addCategory");
    }

    public function category(){
        $data            = array();
        $table           = "category";
        $catModel        = $this->load->model("CatModel");
        $data['cat']     = $catModel->catList($table);
        $this->load->view("category", $data);
    }

    public function catById(){
        $data            = array();
        $table           = "category";
        $id              = 4;
        $catModel        = $this->load->model("CatModel");
        $data['catbyid'] = $catModel->catById($table, $id);
        $this->load->view("catById", $data);
    }

    public function insertCategory(){
        $table           = "category";
        $name            = $_POST['name'];
        $title           = $_POST['title'];
        $data = array(
            'name'  => $name,
            'title' => $title
        );

        $Msg = array();
        if(empty($name)){
            $Msg['msg'] = "Name cannot be empty!.";
        }
        if(empty($title)){
            $Msg['msg'] = "Title cannot be empty!.";
        }
        if(!empty($Msg)){
            return $Msg;
        }
        else{
            $catModel        = $this->load->model("CatModel");
            $catModel->insertCat($table, $data);
            $Msg['msg'] = "success!";
        }
        $this->load->view("addCategory", $Msg);
    }


}
?>