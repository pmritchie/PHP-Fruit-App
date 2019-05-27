<?
class crud extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }

    public function index(){
        //echo "hello";
        $data = array();
        $data["pagename"]= "DB";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud", "register"=>"/welcome/register",);
        
        $data["fruits"]= $this->parent->getModel("fruitModel")->get();

        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
       
        echo"<br>";
        echo"<br>";
        $this->parent->getView("fruits", $data);
    }

    public function addForm(){
        $data = array();
        $data["pagename"]= "DB";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud", "register"=>"/welcome/register",);
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        echo"<br>";
        $this->parent->getView("AddForm",$data);

    }
    public function addAction(){
        $this->parent->getModel("fruitModel")->add($_REQUEST);
        header("location:/crud");
    }

    public function delete(){
        var_dump($_REQUEST['id']);
        $this->parent->getModel("fruitModel")->delete($_REQUEST['id']);
        header("location:/crud");
    }
    public function editForm(){
        $data = array();
        $data["fruit"]= $this->parent->getModel("fruitModel")->getOne($_REQUEST["id"]);
        $data["pagename"]= "edit";
        $data["navigation"] = array("home"=>"/welcome/index", "api"=>"/api/about", "crud"=>"/crud", "register"=>"/welcome/register",);
        $this->parent->getView("header");
        $this->parent->getView("navigation",$data);
        echo"<br>";
        $this->parent->getView("editForm",$data["fruit"]);
    }

    public function editList(){
        $this->parent->getModel("fruitModel")->updateList($_POST);
        header("location:/crud");
    }
}


?>