<?php 
class welcome extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
        
    }
    public function index(){
        //echo "hello";
        $data = array();
        $data["pagename"]= "home";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api", "crud"=>"/crud", "register"=>"/welcome/register",);

        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        $this->parent->getView("welcome");
        $this->parent->getView("footer");
    }
    public function register(){
        $data = array();
        $data["pagename"]= "register";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api", "crud"=>"/crud", "register"=>"/welcome/register",);
        
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        $this->getView("header", array("pagename"=>"regForm"));
        
        $random = substr( md5(rand()), 0, 7);
        
        $this->getView("regForm",array("cap"=>$random));
        $this->parent->getView("footer");
    }
    public function login(){
        $data = array();
        $data["pagename"]= "login";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api", "crud"=>"/crud", "register"=>"/welcome/register",);
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        $this->parent->getView("loginForm");
        $this->parent->getView("footer");
    }
    public function ajaxPar(){
        if(@$_REQUEST["email"]=="bob@saget.com" && @$_REQUEST["password"]=="password"){
            echo"welcome";
        }else{
            echo"nope";
        }
    }
    public function regComplete(){
        $data = array();
        $data["pagename"]= "";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api", "crud"=>"/crud", "register"=>"/welcome/register",);
        
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        if($_POST["captcha"]==$_SESSION["cap"]){
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                echo"<br><br><br><p>Invalid Email";
                echo "<br><br><br><a href='/welcome/register'>Click here to go back</a>";
            }else{
                $this->parent->getView("success",$_POST);
            }   
        }else{
            echo"<br><br><br><p>Invalid Captcha";
            echo "<br><br><br><a href='/welcome/register'>Click here to go back</a>";
        }

        $this->parent->getView("footer");
    }
}

   
    

?>