<?php
class c_contact
{
    public function show_contact()
    {
        include_once 'view/contact.php';
    }
    public function add_contact(){
        if (isset($_POST['btn_contact'])) {
            $id = NULL;
            $full_name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $status = 1;
            $m_contact = new m_contact();
            $m_contact->insert_contact($id, $full_name, $email, $message, $status);
        }
        header('location:?ctr=contact');
    }

}
?>
