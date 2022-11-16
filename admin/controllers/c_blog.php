<?php


class c_blog
{
    public function blog_add()
    {
        
        if (isset($_FILES['image'])) {
            $post_avatar = $_FILES['image']['name'];
        }
        if (isset($_POST['btn_add_blog'])) {
            $id = NULL;
            $post_name = $_POST['post_name'];
            $post_content = $_POST['post_content'];
            $post_avatar = $_FILES['image']['name'];
            $m_blog = new m_blog();
            $m_blog->insert_blog($id, $post_name, $post_content, $post_avatar);
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
        if (isset($_POST['btn_update_blog'])) {
            $id = $_POST['id'];
            $post_name = $_POST['post_name'];
            $post_content = $_POST['post_content'];
            $post_avatar = $_FILES['image']['name'];
            $m_blog = new m_blog();
            $m_blog->edit_blog($post_name, $post_content, $post_avatar, $id);
            header('location:?ctr=blog_list');
        }
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