<?
class fruitModel{

    public function __construct($parent){
        $this->parent = $parent;
    }

    public function get(){
      $sql = 'select * from fruit_table';
      $stmt = $this->parent->db->prepare($sql);
      $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getOne($id){
        $sql = 'select * from fruit_table where id = :id';
        $stmt = $this->parent->db->prepare($sql);
        $stmt->execute(array(":id"=>$id));
          return $stmt->fetch();
      }
      public function add($obj){
        $sql = 'insert into fruit_table(name) values(:name)';
        $stmt = $this->parent->db->prepare($sql);
        $stmt->execute(array(":name"=>$obj["name"]));
      } 

      public function delete($id){
        $sql = 'delete from fruit_table where id = :id';
        $stmt = $this->parent->db->prepare($sql);
        $stmt->execute(array(":id"=>$id));
      }

      public function updateList($obj){
        echo($obj);
        $sql = 'update fruit_table set name = :name where id = :id';
        $stmt = $this->parent->db->prepare($sql);
        $stmt->execute(array(":name"=>$obj["name"], ":id"=>$obj["id"]));
      }
}
?>