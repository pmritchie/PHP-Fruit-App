<?php 
class about extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }

    public function about(){
        //echo "hello";
        $data = array();
        $data["pagename"]= "about";
        $data["navigation"] = array("home"=>"/welcome/home", "about"=>"/about/about");
        $data["color"] = "red";

        $this->parent->getView("navigation",$data);
        $this->parent->getView("header");
        $this->parent->getView("body");
        $this->parent->getView("footer");
    }
    
}

?>