<?php
class c_categorie
{
    public function show_categorie()
    {
        $m_categorie=new m_categorie();
        $categorie=$m_categorie->read_categorie();
        include_once 'view/categorie.php';
    }
    public function detail_categorie(){
        $id=$_GET['id'];
        $m_categories=new m_categorie();
        $detail_categorie=$m_categories->read_categorie_by_id($id);
        include_once 'view/detail_categorie.php';
    }
}
?>
