<?php
require_once("database.php");

class m_plant extends database
{
    public function insert_plant($id, $plant_name, $plant_exp, $plant_cost,$plant_type)
    {
        $sql = "INSERT INTO plant  VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $plant_name, $plant_exp, $plant_cost,$plant_type));
    }

    public function read_plant()
    {
        $sql = "SELECT * from plant";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_plant_type()
    {
        $sql = "SELECT * from plant_type";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_plant_by_id($id)
    {
        $sql = "SELECT * from plant where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_plant($plant_name, $plant_exp, $plant_cost, $id)
    {
        $sql = "UPDATE plant set plant_name = ?,plant_exp=?,plant_cost = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($plant_name, $plant_exp, $plant_cost, $id));
    }

    public function delete_plant($id)
    {
        $sql = "DELETE from plant where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}
