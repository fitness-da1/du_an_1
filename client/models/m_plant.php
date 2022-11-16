<?php require_once('database.php');
class m_plant extends database {
    public function plant_type(){
        $sql="SELECT * FROM plant_type group by name_type order by id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function get_month($name_type){
        $sql="SELECT plt.type_id,pl.plant_exp,plt.plant_id FROM plant_type as plt 
            inner join plant as pl on pl.id=plt.plant_id
            where plt.name_type=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($name_type));
    }
    public function get_price($plant_id){
        $sql="SELECT * FROM plant
            where id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($plant_id));
    }
}