<?php
require_once 'database.php';
class m_contact extends database {
    public function insert_contact($id, $full_name, $email, $message, $status) {
        $sql = "INSERT INTO contact  VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $full_name, $email, $message, $status));
    }
}