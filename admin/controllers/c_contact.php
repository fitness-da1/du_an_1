<?php
//include_once("models/m_admin_member.php");

class c_contact
{
    public function contact_add()
    {
        if (isset($_POST['btn_add_contact'])) {
            $id = NULL;
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $status = $_POST['status'];

            $m_contact = new m_contact();
            $result = $m_contact->insert_contact($id, $full_name, $email, $message, $status);
//            header('location:admin_member_add.php?result=' . $username);
        }
        include_once("view/contact/v_contact_add.php");
    }

    public function contact_list()
    {
        $m_contact = new m_contact();
        $contact = $m_contact->read_contact();
        include_once("view/contact/v_contact_list.php");
    }

    public function show_contact_edit()
    {
        $m_contact = new m_contact();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $contact = $m_contact->read_contact_by_id($id);
            include_once("view/contact/v_contact_edit.php");
        }
    }

    public function contact_update()
    {
        $m_contact = new m_contact();
        if (isset($_POST['btn_update_contact'])) {
            $id = $_POST['id'];
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $status = $_POST['status'];
            $m_contact->edit_contact($full_name, $email, $message, $status, $id);
            header('location:?ctr=contact_list');
        }

    }

    // public function admin_member_delete()
    // {
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         $m_admin_member = new m_admin_member();
    //         $m_admin_member->delete_admin_member($id);
    //         header('location:?ctr=admin_member_list&dl=success');
    //     }
    // }


  

}