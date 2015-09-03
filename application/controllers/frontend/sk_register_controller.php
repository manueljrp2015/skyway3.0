<?php

/**
 * @title: Skyway 3.0
 * @developer: Tsu. Manuel Rodriguez
 * @copyright: 2015
 * @class: controller
 */
class Sk_register_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("frontend/referrals/referrals_model");
    }

    /**
     * @function: function index del modulo registro nuevo usuario
     * @param: id del referido
     */

    public function index()
    {
        $send = array(
            'header' => 'header',
            'footer' => "footer",
            'folder' => 'referrals',
            'content' => 'info-referral',
            'info' => $this->referrals_model->get_info_referral($this->input->get('qrefer'))
        );

        $this->load->view('frontend/template/template_dashboard', $send);
    }


    /**
     * @function: function index del modulo registro nuevo usuario
     * @param: id del referido
     */

    public function view_register_form()
    {
        $send = array(
            'header' => 'header',
            'footer' => "footer",
            'folder' => 'register',
            'content' => 'register-new-user',

        );

        $this->load->view('frontend/template/template_dashboard', $send);
    }

}
