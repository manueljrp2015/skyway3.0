<?php

/**
 * @title: Skyway 3.0
 * @developer: Tsu. Manuel Rodriguez
 * @copyright: 2015
 * @class: controller para referidos
 */
class Sk_refers_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("frontend/referrals/referrals_model");
    }

    public function index()
    {

        $send = array(
            'header' => 'header',
            'footer' => "footer",
            'folder' => 'referrals',
            'content' => 'find-referrals',
            "all_refer" => $this->referrals_model->get_all_referral_query()
        );

        $this->load->view('frontend/template/template_dashboard', $send);
    }

    function get_referral_search()
    {


        $send = array(
            "page" => "response",
            "response" => json_encode(array(
                "status" => TRUE,
                "error" => null,
                "data" => array(
                    'user' => $this->referrals_model->query_search_referral($this->input->post("query"))
                )
            ))
        );

        $this->load->view('frontend/template/template_response', $send);
    }

}
