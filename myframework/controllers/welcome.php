<?php 
class welcome extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    public function index(){
        //echo "hello";
        $data = array();
        $data["pagename"]= "home";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud/about", "register"=>"/welcome/register");
        
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        $this->parent->getView("welcome");
        $this->parent->getView("footer");
    }
    public function register(){
        $data = array();
        $data["pagename"]= "register";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud/about", "register"=>"/welcome/register");
        
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        $this->parent->getView("signInForm");
        $this->parent->getView("footer");
    }
    public function regComplete(){
        $data = array();
        $data["pagename"]= "";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud/about", "register"=>"/welcome/register");
        
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);

        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            
        }else{
            $this->parent->getView("success",$_Post);
        };
        $this->parent->getView("footer");


    }
}
?>