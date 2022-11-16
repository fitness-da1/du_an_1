<?php

class c_plant
{
    public function show_plant()
    {

        include_once 'view/pricing.php';
    }

    public function get_type_plant()
    {
        $m_plant = new m_plant();
        $plant_type = $m_plant->plant_type();
        echo json_encode($plant_type);
    }

    public function get_month_plant()
    {
        $m_plant = new m_plant();
        $name_type = $_GET ['name_type'];
        $plant_exp = $m_plant->get_month($name_type);
        foreach ($plant_exp as $item =>$value) {
            echo '
        <a class="item-month"
                       href="#package-classic-'.$value->plant_exp.'"
                       data-toggle="tab"
                       data-month="'.$value->plant_id.'">
                      <div class="title">'.$value->plant_exp.'</div>tháng
                  </a>
                  
                
        ';
        }
    }
    public function get_plant_price(){
        $m_plant = new m_plant();
        $plant_id = $_GET ['plant_id'];
        $plant_price = $m_plant->get_price($plant_id);
        echo '
             <li>
                 <div class="label-text">Thời gian tập luyện:</div>
                 <div class="label-title text-space">'.$plant_price->plant_exp.'</div>
            </li>
                ';
    }
}
