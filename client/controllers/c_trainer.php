<?php
class c_trainer
{
    public function show_trainer()
    {
        $m_trainer=new m_trainer();
        $trainer=$m_trainer->read_trainer();
        include_once 'view/trainers.php';
    }
}
?>
