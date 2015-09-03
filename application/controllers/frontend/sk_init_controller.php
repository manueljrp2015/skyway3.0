<?php

/**
 * @title: Skyway 3.0
 * @developer: Tsu. Manuel Rodriguez
 * @copyright: 2015
 * @class: controller
 */
class sk_init_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model("frontend/landing-model/landing_model");
    }

    public function index()
    {

        $structure = $this->landing_model->get_landing_structure();

        foreach ($structure as $st) {
            ($st->overlay == "Y") ? $overlay = "overlay" : $overlay = "";
            ($st->features == "Y") ? $features = "features" : $features = "";
            ($st->session_1 == "Y") ? $session_1 = "session-1" : $session_1 = "";
            ($st->session_2 == "Y") ? $session_2 = "session-2" : $session_2 = "";
            ($st->session_3 == "Y") ? $session_3 = "session-3" : $session_3 = "";
            ($st->pricing == "Y") ? $pricing = "pricing" : $pricing = "";
            ($st->contact == "Y") ? $contact = "contact" : $contact = "";
            ($st->footer == "Y") ? $footer = "footer" : $footer = "";
        }


        $send = array(
            'header' => 'header',
            'navbar_landing' => 'navbar-landing',
            'overlay' => $overlay,
            'features' => $features,
            'session_1' => $session_1,
            'session_2' => $session_2,
            'session_3' => $session_3,
            'pricing' => $pricing,
            'contact' => $contact,
            'footer' => $footer,
            'folder' => 'blank',
            'content' => 'blank',
            'land_home' => $this->landing_model->get_landing_home(),
            'land_features' => $this->landing_model->get_landing_features(),
            'land_session_1' => $this->landing_model->get_landing_session_simple(),
        );


        $this->load->view('frontend/template/template', $send);
    }

}
