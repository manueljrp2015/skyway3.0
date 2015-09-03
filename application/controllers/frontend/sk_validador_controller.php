<?php

/**
 * @title: Skyway 3.0
 * @developer: Tsu. Manuel Rodriguez
 * @copyright: 2015
 * @class: controller
 */
class Sk_validador_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("frontend/referrals/referrals_model");
    }

    public function exec_verify_nick()
    {
        echo ($this->validador_model->valid_login_user($this->input->post("_nickname"))) ?  $response = "false" :  $response =  "true";

    }

    public function exec_verify_email()
    {
        echo ($this->validador_model->valida_email($this->input->post("_email"))) ?  $response = "true" :  $response =  "false";
    }

    public function exec_verify_phone()
    {
        echo ($this->validador_model->valid_phone_user($this->input->post("_phone"))) ?  $response = "false" :  $response =  "true";
    }
}