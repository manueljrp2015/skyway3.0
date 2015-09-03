<?php

class sk_forgot_pass_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("frontend/forgot-password/forgot_p_model");
    }

    public function change_password()
    {
        sleep(3);
        $this->form_validation->set_rules('_idn', '_idn', 'trim|required|xss_clean|callback_vid');


        if ($this->form_validation->run() === TRUE) {
            $arr = array(
                "id" => $this->input->post('_idn')
            );

            //obtiene los datos de usuario
            foreach ($this->forgot_p_model->get_info_user($arr) as $info) {
                $em = $info->email;
                $name = $info->nombre;
            }

            //verificar si hay una solicitud activa
            if ($this->forgot_p_model->verify_user_temp_pass($arr)) {
                //actualiza la solicitud en la tabla skyway_renew_pass
                $this->forgot_p_model->update_user_temp_pass($arr, $em);

                //envia el correo de cmbio de clave
                $this->robot_email_model->send_email_recovery_pass($em, $arr, $name);

                $send = array(
                    "page" => "response",
                    "response" => "resend"
                );

                $this->load->view('frontend/template/template_response', $send);
            } else {
                //inserta en la tabla skyway_renew_pass
                $this->forgot_p_model->put_user_temp_pass($arr, $em);

                //envia el correo de cmbio de clave
                $this->robot_email_model->send_email_recovery_pass($em, $arr, $name);

                $send = array(
                    "page" => "response",
                    "response" => "done"
                );

                $this->load->view('frontend/template/template_response', $send);
            }
        } else {
            $send = array(
                "page" => "response",
                "response" => "Error: " . lang("index_modal_forgot_pass_title_error")
            );

            $this->load->view('frontend/template/template_response', $send);
        }
    }

    /*
     * fncion que valida la existencia del usuario en la bd
     */

    public function vid($id)
    {
        return $this->validador_model->valid_id_user($id);
    }

    /*
     * vista de cambio de clave
     */

    public function page_renew_pass()
    {

        $arr = Process_forgot_pass::process_uri($this->input->get_post('put'));
        (!Process_forgot_pass::verify_sts_renove($arr[1])) ? $expire = 'expire' : $expire = 'active';

        $send = array(
            'header' => 'header',
            'footer' => "footer",
            'folder' => 'renew-pass',
            'content' => 'page-renew',
            'data_get' => $arr,
            'expire' => $expire
        );

        $this->load->view('frontend/template/template_dashboard', $send);
    }

    public function exec_renew_pass()
    {

        $this->form_validation->set_rules('_p', '_p', 'trim|required|xss_clean');
        $this->form_validation->set_rules('_rp', '_rp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('_e', '_e', 'trim|required|xss_clean');
        $this->form_validation->set_rules('_idn', '_idn', 'trim|required|xss_clean');

        if ($this->form_validation->run() === TRUE) {
            $array = array(
                "p_new" => $this->input->post("_rp"),
                "idn" => base64_decode($this->input->post("_idn"))
            );

            if ($this->forgot_p_model->put_new_pass($array)) {
                $this->robot_email_model->send_email_renew_pass(
                    base64_decode($this->input->post("_e")), $this->input->post("_rp"));

                $this->forgot_p_model->expire_url_renew($array['idn']);

                $send = array(
                    "page" => "response",
                    "response" => "done"
                );

                $this->load->view('frontend/template/template_response', $send);
            }
        }
    }

}

class Process_forgot_pass extends sk_forgot_pass_controller
{

    public function __construct()
    {
        parent::__construct();
    }

    //decodifica los datos get y los transfroam en arreglo
    protected function process_uri($get_uri)
    {
        return $array = explode(":", base64_decode($get_uri));
    }

    //verifica si hay una solictud abierta
    protected function verify_sts_renove($id)
    {

        $verify = $this->forgot_p_model->verify_sts_r($id);

        if (!$verify) {
            echo FALSE;
        } else {

            $datetime1 = new DateTime(date("Y-m-d H:i:s"));
            $datetime2 = new DateTime($verify);
            $interval = $datetime1->diff($datetime2);
            $time = $interval->format('%H');

            if ($time > 1) {
                $this->forgot_p_model->expire_url_renew($id);
                return FALSE;
            } else {
                return TRUE;
            }
        }
    }

}
