<?php
include_once 'controllers/c_plant.php';
include_once 'controllers/c_home.php';
include_once 'controllers/c_about.php';
include_once 'controllers/c_categorie.php';
include_once 'controllers/c_trainer.php';
include_once 'controllers/c_gallery.php';
include_once 'controllers/c_blog.php';
include_once 'controllers/c_contact.php';
include_once 'controllers/c_user.php';
include_once 'controllers/c_payment.php';

include_once 'models/m_plant.php';
include_once 'models/m_user.php';
include_once 'models/m_categorie.php';
include_once 'models/m_trainer.php';
include_once 'models/m_contact.php';

$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
session_start();
switch ($ctr) {
    case '/':
        //login
    case 'home':
        $home = new c_home();
        $home->show_home();
        break;
    case 'about':
        $about = new c_about();
        $about->show_about();
        break;
    case 'categorie':
        $categorie = new c_categorie();
        $categorie->show_categorie();
        break;
    case 'detail_categorie':
        $detail_categorie = new c_categorie();
        $detail_categorie->detail_categorie();
        break;

    case 'trainer':
        $trainer = new c_trainer();
        $trainer->show_trainer();
        break;
    case 'gallery':
        $gallery = new c_gallery();
        $gallery->show_gallery();
        break;
    case 'blog':
        $blog = new c_blog();
        $blog->show_blog();
        break;
    case 'detail_blog':
        $detail_blog = new c_blog();
        $detail_blog->detail_blog();
        break;

    case 'contact':
        $contact = new c_contact();
        $contact->show_contact();
        break;
    case 'contact_submit':
        $contact = new c_contact();
        $contact->add_contact();
        break;
    case 'pricing':
        $plant = new c_plant();
        $plant->show_plant();
        break;
    case 'get_plant':
        $plant = new c_plant();
        $plant->get_plant();
        break;
    case 'user_signup':
        $user = new c_user();
        $user->user_signup();
        break;
    case 'checkout_form':
        $pay = new c_payment();
        $pay->show_payment();
        break;
    default :
        include_once 'view/404.php';
}
