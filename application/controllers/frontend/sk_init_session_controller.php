<?php

class sk_init_session_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $send = array(
            'header' => 'header',
            'footer' => "footer",
            'folder' => 'init-session',
            'content' => 'init-session',
        );

        $this->load->view('frontend/template/template_dashboard', $send);
    }

    public function exec_in()
    {

        echo "hola";
        /*$this->form_validation->set_rules('_e', 'email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('_p', 'password', 'trim|required|xss_clean');

        if($this->form_validation->run() === TRUE) {
            
        }*/
    }

}
