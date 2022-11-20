<?php


class c_blog
{
    public function blog_add()
    {
        if (isset($_POST['btn_add_blog'])) {
            $id = NULL;
            $id_author = $_SESSION['user_admin']->id;
            $post_name = $_POST['post_name'];
            $post_content = $_POST['post_content'];
            $post_avatar = $_FILES['post_avatar']['name'];
            $post_view = 0;
            $post_time = date('Y-m-d');
            $m_blog = new m_blog();
            $kq = $m_blog->insert_blog($id,$id_author, $post_name, $post_content, $post_avatar,$post_view,$post_time);
            if ($kq) {
                if ($_FILES["image"]["error"] == 0) {
                    move_uploaded_file($_FILES["post_avatar"]["tmp_name"], "../public/image/$post_avatar");
                }
                header('location:?ctr=blog_list&add=success');
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        include_once("view/blog/v_blog_add.php");
    }

    public function blog_list()
    {
        $m_blog = new m_blog();
        $blog = $m_blog->read_blog();
        include_once("view/blog/v_blog_list.php");
    }

    public function show_blog_edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_blog = new m_blog();
            $blog = $m_blog->read_blog_by_id($id);
            include_once("view/blog/v_blog_edit.php");
        }
    }

    public function blog_update()
    {
        $m_blog = new m_blog();
        if (isset($_POST['btn_update_blog'])) {
            $id = $_POST['id'];
            $image = $m_blog->read_blog_by_id($id);
            $post_name = $_POST['post_name'];
            $post_content = $_POST['post_content'];
            $post_avatar = !empty($_FILES['post_avatar']['name']) ? $_FILES['post_avatar']['name'] : $image->post_avata;

            $kq = $m_blog->edit_blog($post_name, $post_content, $post_avatar, $id);
            if ($kq) {
                if ($_FILES["image"]["error"] == 0) {
                    move_uploaded_file($_FILES["post_avatar"]["tmp_name"], "../public/image/$post_avatar");
                }
                header('location:?ctr=blog_list&add=success');
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
//            header('location:?ctr=blog_list');
    }

    public function blog_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_class = new m_blog();
            $m_class->delete_blog($id);
            header('location:?ctr=blog_list&dl=success');
        }
    }
}