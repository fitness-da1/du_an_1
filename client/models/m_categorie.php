<?php require_once('database.php');
class m_categorie extends database {
    public function read_categorie() {
        $sql = "select * from categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_categorie_by_id($id) {
        $sql = "select * from categories where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}