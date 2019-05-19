<?php 

class profile extends AppController{

    public function __construct($parent){
        if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]== 1){
            $this->parent=$parent;

        }else{
            header("Location:/welcome");
        }
    }
    public function index(){
        $data = array();
        $data["pagename"]= "home";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud/about", "register"=>"/welcome/register", "login"=>"/welcome/login");

    
       
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
      
       
        $this->getView("profile", array("pagename"=>"profile"));

        echo"this is a protected area";
        $this->parent->getView("footer");
    }
    public function update(){
        $data = array();
        $data["pagename"]= "home";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud/about", "register"=>"/welcome/register", "login"=>"/welcome/login");

        if($_FILES["img"]["name"]!=""){
            $imageFileType = pathinfo("assets/".$_FILE["img"]["name"], PATHINFO_EXTENSION);
            if(file_exists("assets/".$_FILE["img"]["name"])){
                echo"Sorry, file exists";
            }else{
                if($imageFileType != "jpg" && $imageFileType != "png"){
                    echo "Sorry not this file type";
                }else{
                    if(move_uploaded_file($_FILES["img"]["tmp_name"], "assets/".$_FILES["img"]["name"])){
                        echo "file uploaded";
                    }else{
                        echo"error uploading";
                    }
                }
            }
        }
        header("Location:/profile?msg=File Uploaded");

    }
}

?>