<?php
/*
 * Shahali Controller
 * */
class Shahali extends SController{
    public function __construct(){
        parent::__construct();
    }

    public function bogdadi($parameter){
        echo "Bogdadi - index[1] - position-2 $parameter <br>";
    }
}
?>