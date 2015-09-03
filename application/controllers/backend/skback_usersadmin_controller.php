<?php

class skback_usersadmin_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $send = array(
            'header' => 'header',
            'navbar_landing' => 'navbar',
            'in' => 'in-container',
            'sidebar' => 'sidebar',
            'footer' => 'footer',
            'folder' => 'user-admin',
            'content' => 'users',
            'end' => 'end-container',
        );


        $this->load->view('backend/template/template', $send);
    }

}
