<?php
/**
 * @title: Skyway 3.0
 * @developer: Tsu. Manuel Rodriguez
 * @copyright: 2015
 * @class: controller
 */

class Sk_catalogos_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_tipo_id_all()
    {
        echo json_encode($this->catalogos_model->get_all_tipo_id(), JSON_FORCE_OBJECT);
    }
}
