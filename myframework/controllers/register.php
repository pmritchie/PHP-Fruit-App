 <?php 
class register extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    public function form(){
        $data = array();
        $data["pagename"]= "sign_in";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud/about", "register"=>"/welcome/register");
        
        
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        $this->parent->getView("signInForm");
        $this->parent->getView("footer");
    }
}
?>