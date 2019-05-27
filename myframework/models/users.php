<?
class users{

    public function __construct($parent){
        //this connects the database from the parent
        $this->db=$parent->db;
    }

    public function select($sql, $value=array()){
        
        $this->sql = $this->db->prepare($sql);
        //executes the statement
        $result = $this->sql->execute($value);
        //gets results
        $data = $this->sql->fetchAll();
        return $data;
    }

    public function add($sql, $value=array()){
        $this->sql = $this->db->prepare($sql);
        $result= $this->sql->execute($value); 
    }
}
?>