<?php
include_once 'controllers/c_plant.php';

include_once 'models/m_plant.php';

$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
session_start();
switch ($ctr) {
    case '/':
        //login
    case 'pricing':
        $plant = new c_plant();
        $plant->show_plant();
        break;
    case 'get_month_plant':
        $plant = new c_plant();
        $plant->get_month_plant();
        break;
    case 'get_plant':
        $plant = new c_plant();
        $plant->get_plant();
        break;
    case 'get_plant_price':
        $plant = new c_plant();
        $plant->get_plant_price();
        break;
    default :
        include_once 'view/404.php';
}
