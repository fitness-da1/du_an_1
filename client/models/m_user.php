<?php require_once('database.php');
class m_user extends database {
    public function insert_user($id, $fist_name, $last_name, $email, $address, $phone_number, $image, $plant, $status)
    {
        $sql = "INSERT INTO user  VALUES (?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $fist_name, $last_name, $email, $address, $phone_number, $image, $plant, $status));
    }
}