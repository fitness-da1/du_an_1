<?php
class c_user
{
    public function user_signup()
    {
        if (isset($_POST['btn_signup_user'])) {
            $id = NULL;
            $fist_name = $_POST['fist_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone'];
            $image = "";
            $plant = $_POST['plant_id'];
            $status = 1;
            $m_user = new m_user();
            $m_user->insert_user($id, $fist_name, $last_name, $email, $address, $phone_number, $image, $plant, $status);
        }
        header('location:?ctr=checkout_form');
    }
}