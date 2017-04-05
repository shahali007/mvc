<?php
/*
 * It is main controller.
 * */
class SController{

    protected $load = array();

    public function __construct(){
        $this->load = new Load();
    }
}
?>