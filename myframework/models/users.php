class users{
    public function __construct($parent){
        $this->db = $parent->db;
    }
    public function select($sql, $value=(array)){
        this->sql = $this->db->prepare($sql);
        $result = $this->db->execute($value);
        $data = $this->sql->fethcAll();
        return $data;
    }

    public function add($sql, $value=array()){
        $this->sql = $this->db->prepare($sql);
        $result= $this->db->execute($value);
        
    }
}