<?php

class c_plant
{
    public function show_plant()
    {
        if (isset($_POST['type_id'])){
            $type_id=$_POST['type_id'];
        }
        $m_plant = new m_plant();
        $plant_type = $m_plant->plant_type();
        include_once 'view/pricing.php';
    }

    public function get_plant()
    {

            $type_id = $_GET['type_id'];
            $m_plant = new m_plant();
            $plant = $m_plant->get_plant($type_id);
            echo json_encode($plant);

    }
//
//    public function get_month_plant()
//    {
//        $m_plant = new m_plant();
//        $name_type = $_GET ['name_type'];
//        $plant_exp = $m_plant->get_month($name_type);
//        foreach ($plant_exp as $pl) {
//            echo '
//            <div class="tab-pane fade show active" id="package-personal-list-' . $pl->plant_exp . '">
//                                    <div class="row align-items-center">
//                                        <div class="col-md-6 item-selection-wrapper">
//                                            <div class="item-selection nav nav-tabs border-bottom-0">
//                                                <a class="item-month"
//                                                    href="#package-classic-' . $pl->plant_exp . '"
//                                                    data-toggle="tab">
//                                                    <div class="title">' . $pl->plant_exp . '</div> tháng
//                                                </a>
//                                            </div>
//                                        </div>
//                                    <div class="col-md-6 item-content-wrapper">
//                                        <div class="item-content tab-content p-y-12px">
//                                            <ul class="tab-pane fade active show" id="package-classic">
//                                            </ul>
//                                            </div>
//                                        </div>
//                                    </div>
//             </div>
//                                        ';
//        }
//
//
////                echo '
////                                        <div class="col-md-6 item-content-wrapper">
////                                            <div class="item-content tab-content p-y-12px">
////                                                                                                                                                                                                <ul class="tab-pane fade active show"
////                                                   id="package-classic-3">
////                                                    <li>
////                                                        <div class="label-text">Thời gian tập luyện:</div>
////                                                        <div class="label-title text-space" >'.$pl->plant_exp.'</div>
////                                                    </li>
////                                                                                                        <li>
////                                                        <button type="submit" class="btn btn-brand btn-sm"
////                                                            data-toggle="modal" data-target=".modal-sign-up">Đăng ký ngay</button>
////                                                    </li>
////                                                </ul>
////                                            </div>
////                                        </div>
////                                    </div>
////                                </div>
////            </div>
////        ';
//
//    }
//    public function get_plant_price(){
//        $m_plant = new m_plant();
//        $plant_id = $_GET ['plant_id'];
//        $plant_price = $m_plant->get_price($plant_id);
//        echo '
//             <li>
//                 <div class="label-text">Thời gian tập luyện:</div>
//                 <div class="label-title text-space">'.$plant_price->plant_exp.'</div>
//            </li>
//                ';
//    }
}
