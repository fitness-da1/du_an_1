<?php
require_once ("database.php");
class m_categorie extends database {
    public function insert_categorie($id,$categorie_name,$meaningfull,$categorie_image) {
        $sql = "INSERT INTO categories  VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$categorie_name,$meaningfull,$categorie_image));
    }
    public function read_categorie() {
        $sql = "select * from categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_categorie_by_id($id) {
        $sql = "select * from categories where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function edit_categorie($categorie_name,$categorie_meaningful,$categorie_image,$id) {
        $sql = "update categories set categories_name = ?,categories_meaningful = ?, categories_image=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($categorie_name,$categorie_meaningful,$categorie_image,$id));
    }
    public  function delete_categorie($id){
        $sql="delete from categories where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
public function return_categorie_name($categorie_name){
    $sql = "select count(*) as kq from categories where categories_name = ?";
    $this->setQuery($sql);
    return $this->loadRow(array($categorie_name));
}

}
