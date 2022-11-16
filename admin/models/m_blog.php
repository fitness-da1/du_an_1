<?php
require_once ("database.php");
class m_blog extends database {
    public function insert_blog($id, $post_name, $post_content, $post_avatar) {
        $sql = "INSERT INTO blog  VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $post_name, $post_content, $post_avatar));
    }
    public function read_blog() {
        $sql = "SELECT * from blog";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_blog_by_id($id) {
        $sql = "SELECT * from blog where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_blog( $post_name, $post_content, $post_avatar, $id) {
        $sql = "UPDATE blog set post_name = ?,post_content = ?,post_avatar = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array( $post_name, $post_content, $post_avatar, $id));
    }
    public  function delete_blog($id){
        $sql="DELETE from blog where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}
