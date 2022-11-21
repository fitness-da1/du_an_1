<?php
class c_blog
{
    public function show_blog()
    {
        $m_blog=new m_blog();
        $blog=$m_blog->read_blog();
        include_once 'view/blog.php';
    }
    public function detail_blog()
    {
        $id=$_GET['id'];
        $m_blog=new m_blog();
        $detail_blog=$m_blog->read_blog_by_id($id);
        include_once 'view/detail_blog.php';
    }
}
?>
