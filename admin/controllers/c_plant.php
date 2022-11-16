<?php
//include_once("models/m_plant.php");
class c_plant
{
    public function plant_add()
    {
       
        if (isset($_POST['btn_add_plant'])) {
            $id = NULL;
            $plant_name = $_POST['plant_name'];
            $plant_exp = $_POST['plant_exp'];
            $plant_cost = $_POST['plant_cost'];
            $m_plant = new m_plant();
            $m_plant->insert_plant($id, $plant_name, $plant_exp, $plant_cost);
        }
        include_once("view/plant/v_plant_add.php");
    }

    public function plant_list()
    {
        $m_plant = new m_plant();
        $plant = $m_plant->read_plant();
        include_once("view/plant/v_plant_list.php");
    }

    public function show_plant_edit()
    {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_plant = new m_plant();
            $plant = $m_plant->read_plant_by_id($id);
            include_once("view/plant/v_plant_edit.php");
        }
    }

    public function plant_update()
    {
        if (isset($_POST['btn_update_plant'])) {
            $id = $_POST['id'];
            $plant_name= $_POST['plant_name'];
            $plant_exp = $_POST['plant_exp'];
            $plant_cost = $_POST['plant_cost'];
            $m_plant = new m_plant();
            $m_plant->edit_plant($plant_name, $plant_exp, $plant_cost, $id);
            header('location:?ctr=plant_list');
        }
    }

    public function plant_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_class = new m_plant();
            $m_class->delete_plant($id);
            header('location:?ctr=plant_list&dl=success');
        }
    }
}