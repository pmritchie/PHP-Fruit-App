<?php 
class api extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }

    public function about(){
        $data = array();
        $data["pagename"]= "api";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud", "register"=>"/welcome/register",);
        
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        $this->parent->getView("apiView");
        $this->parent->getView("footer");
    }

   
}
?>