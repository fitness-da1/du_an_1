<?php
//include_once("models/m_trainers.php");
//include_once("models/m_categorie.php");

class c_trainer
{
    public function trainers_add()
    {
        $m_trainers = new m_trainers();
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        if (isset($_FILES['image'])) {
            $trainer_image = $_FILES['image']['name'];
        }
        if (isset($_POST['btn_add_trainer'])) {
            $id = NULL;
            $trainer_name = $_POST['trainer_name'];
            $trainer_categorie = $_POST['trainer_categorie'];
            $trainer_image = $_FILES['image']['error']==0?$_FILES['image']['name']:null;
            if (empty($error_1)) {
                $kq = $m_trainers->insert_trainer($id, $trainer_name, $trainer_image, $trainer_categorie);
                if ($kq) {
                    if ($_FILES["image"]["error"] == 0) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], "../public/image/$trainer_image");
                    }
                    header('location:?ctr=trainer_list&add=success');
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }

        }
        include_once("view/trainer/v_trainers_add.php");
    }

    public function trainers_list()
    {
        $m_trainers = new m_trainers();
        $trainers = $m_trainers->read_trainer();
        include_once("view/trainer/v_trainers_list.php");
    }

    public function show_trainers_edit()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_trainers = new m_trainers();
            $trainer = $m_trainers->read_trainer_by_id($id);
            include_once("view/trainer/v_trainers_edit.php");
        }
    }

    public function trainers_update()
    {
        $m_trainers = new m_trainers();
        if (isset($_POST['btn_update_trainer'])) {
            $id = $_POST['id'];
            $trainer = $m_trainers->read_trainer_by_id($id);
            $trainer_name = $_POST['trainer_name'];
            $trainer_categorie = $_POST['trainer_categorie'];
            $trainer_image = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : $trainer->trainer_image;
            if (empty($error_1)) {
                $kq = $m_trainers->edit_trainer($trainer_name, $trainer_image, $trainer_categorie, $id);
                if ($kq) {
                    if ($_FILES["image"]["error"] == 0) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], "../public/image/$trainer_image");
                    }
                    header('location:?ctr=trainer_list&upd=success');
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }

            header('location:?ctr=trainers_list');
        }
    }

    public function trainers_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_class = new m_class();
            $m_class->delete_class($id);
            header('location:?ctr=trainers_list.&dl=success');
        }
    }
}