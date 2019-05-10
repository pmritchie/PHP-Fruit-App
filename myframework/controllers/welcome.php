<?php 
class welcome extends AppController{

    public function __construct($parent){
        $this->parent=$parent;

        //var_dump($this->parent);
    }
    public function home(){
        //echo "hello";
        $data = array();
        $data["pagename"]= "home";
        $data["navigation"] = array("home"=>"/welcome/home", "about"=>"/about/about");
        

        $this->parent->getView("navigation",$data);
        $this->parent->getView("header");
        $this->parent->getView("body");
        $this->parent->getView("footer");
    }
  
}

?>