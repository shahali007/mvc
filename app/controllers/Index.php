<?php
/*
 * Index Controller
 * */
class Index extends SController {

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $this->load->view("home");
    }





}
?>