<?php 

class profile extends AppController{

    public function __constructor($parent){
        if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]== 1){
            $this->parent=$parent;

        }else{
            header("Location:/welome");
        }
    }
    public function index(){

        $data = array();
        $data["pagename"]= "login";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud/about", "register"=>"/welcome/register", "login"=>"/welcome/login");

        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        echo"this is a protected area";
    }
}

?>