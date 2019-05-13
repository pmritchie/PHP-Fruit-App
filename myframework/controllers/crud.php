<?php 
class crud extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }

    public function about(){
        //echo "hello";
        $data = array();
        $data["pagename"]= "crud";
        $data["navigation"] = array("home"=>"/welcome/home", "api"=>"/api/about", "crud"=>"/crud/about");
        $data["color"] = "red";

        $this->parent->getView("navigation",$data);
        $this->parent->getView("header");
        $this->parent->getView("welcome");
        $this->parent->getView("footer");
    }
}
?>