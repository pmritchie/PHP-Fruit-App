<?php
class auth extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    public function login(){
        
        if($_REQUEST["username"] && $_REQUEST["password"]){
            $data = $this->parent->getModel("users")->select(
                "select * from users where email = :email and password = :password",
                array(":email"=>$_REQUEST["username"],":password"=>sha1($_REQUEST["password"])));
                
            if($data){
                $_SESSION["loggedin"] =1;
                header("Location:/welcome");
            }else{
                header("Location:/welcome?msg=Bad Login");
            }
        }


    //     if($_REQUEST["username"] && $_REQUEST["password"]){
    //         //$myfile = fopen("./assets/accounts.txt", "r") or die("Unable to open file!");
    //         $myfile = "./assets/accounts.txt";
    //         if(file_exists($myfile)){
    //             $profiles = file($myfile);
                
    //             foreach($profiles as $user){
    //             $userArray = explode("|", $user);
    //             if($_REQUEST["username"] == $userArray[0] && $_REQUEST["password"]==$userArray[1]){
    //                 $_SESSION["loggedin"] = 1;
    //                 $_SESSION["bio"] = $userArray[2];
    //                 $_SESSION["username"] = $userArray[0];
    //                 header("Location:/profile");
    //             }else{
    //                 echo "<br><br><h2>Username or password did not match</h2>";
    //                 echo "<br><br><br><a href='/welcome/index'>Click here to go back</a>";
    //             }
                
    //             }
    //         }else{
    //             echo"not reading the file";
    //         }
              
    //     }else{
    //         echo "<br><br><h2>You need a username and password</h2>";
    //         echo "<br><br><br><a href='/welcome/index'>Click here to go back</a>";
    //     }
    // }
    }
    public function logout(){
        session_destroy();
        header("Location:/welcome");
    }
}

?>