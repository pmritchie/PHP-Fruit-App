<?php 
require_once './google-api-php-client-2.2.3_PHP54/vendor/autoload.php';
class api extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
   
    public function index(){
        $data = array();
        $data["pagename"]= "api";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api", "crud"=>"/crud", "register"=>"/welcome/register",);

        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        $file = $this->parent->getModel("apiModel")->googleDrive("1uYTQn-bHnTv7x7e6oaLka5TegKDN5j3bsr3uXc0wTOY");
        $this->getView("apiView",$file);
        $this->getView("footer");


       $client = new Google_Client();
       $client->setAuthConfig('./google-api-php-client-2.2.3_PHP54/vendor/secret.json');
       $client->addScope(Google_Service_Drive::DRIVE);
       $redirect_uri = 'http://localhost/api/callback';
       $client->setRedirectUri($redirect_uri);
    }

   
}
?>