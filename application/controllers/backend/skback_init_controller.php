<?php

class skback_init_controller extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){

        $send = array(
            'header' => 'header',
            'navbar_landing' => 'navbar',
            'in' => 'in-container',
            'sidebar' => 'sidebar',
            'footer' => 'footer',
            'folder' => 'container',
            'content' => 'content',
            'end' => 'end-container',
            );


        $this->load->view('backend/template/template', $send);
    }
}

