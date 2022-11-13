<?php
//include_once("models/m_categorie.php");

class c_categorie
{
    public function categorie_add()
    {
        $m_categorie = new m_categorie();
        if (isset($_POST['btn_add_categorie'])) {
            $id = NULL;
            $categorie_name = $_POST['categorie_name'];
            $categorie_mean = $_POST['categorie_mean'];
            $categorie_image = $_FILES['image']['name'];
            $kq1 = $m_categorie->return_categorie_name($categorie_name);
            if ($kq1->kq == 1) {
                $error_1['categorie_name'] = "Categorie name đã tồn tại";
            }
            if (empty($error_1)) {
                $kq = $m_categorie->insert_categorie($id, $categorie_name, $categorie_mean, $categorie_image);
                if ($kq) {
                    if ($_FILES["image"]["error"] == 0) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], "./view/assets/images/upload/$categorie_image");
                    }
                    header('location:?ctr=categorie_list&add=success');
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }
        }
        include_once("view/categorie/v_categories_add.php");
    }

    public function categorie_list()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        include_once("view/categorie/v_categorie_list.php");
    }

    public function show_categorie_edit()
    {
        $m_categorie = new m_categorie();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categorie = $m_categorie->read_categorie_by_id($id);
            include_once("view/categorie/v_categorie_edit.php");
        }
    }

    public function categorie_update()
    {
        $m_categorie = new m_categorie();
        if (isset($_POST['btn_update_categorie'])) {
            $id = $_POST['id'];
            $categorie = $m_categorie->read_categorie_by_id($id);
            $categorie_name = $_POST['categorie_name'];
            $categorie_meaningful = $_POST['categorie_mean'];
            $categorie_image = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : $categorie->categories_image;
//            $kq1 = $m_categorie->return_categorie_name($categorie_name);
//            if ($kq1->kq == 1) {
//                $error_1[] = "Categorie name đã tồn tại";
//            }
            if (empty($error_1)) {
                $kq = $m_categorie->edit_categorie($categorie_name, $categorie_meaningful, $categorie_image, $id);
                if ($kq) {
                    if ($_FILES["image"]["error"] == 0) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], "./view/assets/images/upload/$categorie_image");
                    }
                    header('location:?ctr=categorie_list&upd=success');
                } else {
                    echo "<script>alert('Cập nhật không thành công')</script>";
                }
            }
        }
    }

    public function categorie_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_categorie = new m_categorie();
            $m_categorie->delete_categorie($id);
            header('location:?ctr=categorie_list&dl=success');
        }
    }
}