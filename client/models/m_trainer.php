<?php require_once('database.php');
class m_trainer extends database {
    public function read_trainer() {
        $sql = "select tr.*,ca.categories_name from trainers as tr
inner join categories as ca on ca.id=tr.trainer_categorie
";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}