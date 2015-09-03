<?php

class sk_mayday_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('frontend/mayday/mayday_model');
    }

    /*
     * metodo index llama pagina mayday email
     */

    public function index()
    {

        $send = array(
            'header' => 'header',
            'footer' => "footer",
            'folder' => 'mayday',
            'content' => 'mayday-forgot-email'
        );

        $this->load->view('frontend/template/template_dashboard', $send);
    }

    /*
     * consulta los datos para verificar la cuenta del usuario
     */

    public function mayday_exec_query()
    {
        $this->form_validation->set_rules('_i', '_i', 'trim|required|xss_clean|callback_verify_id');
        $this->form_validation->set_rules('_a', '_a', 'trim|required|xss_clean');
        $this->form_validation->set_rules('_pn', '_pn', 'trim|required|xss_clean');
        $this->form_validation->set_rules('_sn', '_sn', 'trim|required|xss_clean');

        if ($this->form_validation->run() === TRUE) {
            $array = array(
                "ident" => $this->input->post("_i"),
                "apodo" => $this->input->post("_a"),
                "nomb" => $this->input->post("_pn"),
                "apel" => $this->input->post("_sn")
            );

            $data = $this->mayday_model->exec_query_mayday($array);

            if ($data) {
                echo serialize(array($data, TRUE));
            } else {
                $send = array(
                    "page" => "response",
                    "response" => "Error: " . lang("mayday_msg_invalid_info")
                );

                $this->load->view('frontend/template/template_response', $send);
            }
        } else {
            $send = array(
                "page" => "response",
                "response" => "Error: " . lang("mayday_msg_valid_id")
            );

            $this->load->view('frontend/template/template_response', $send);
        }
    }

    /*
     * verifica la cedula o id del usuario
     */

    public function verify_id($id)
    {
        return $this->validador_model->valid_id_user($id);
    }

    /*
     * ejecuta el cambio de email
     */

    public function mayday_exec_change()
    {

        $this->form_validation->set_rules('_em', '_em', 'trim|required|xss_clean');
        $this->form_validation->set_rules('_new_em', '_new_em', 'trim|required|xss_clean|callback_verify_email');

        if ($this->form_validation->run() === TRUE) {
            $array = array(
                "email_old" => $this->input->post("_em"),
                "email_new" => $this->input->post("_new_em")
            );

            $data = $this->mayday_model->exec_change_mayday($array);

            if ($data) {
                $this->robot_email_model->send_email_new($array['email_new']);
                echo "done";
            } else {
                $send = array(
                    "page" => "response",
                    "response" => "Error: " . lang("mayday_msg_email_usade")
                );

                $this->load->view('frontend/template/template_response', $send);
            }
        } else {
            $send = array(
                "page" => "response",
                "response" => "Error: " . lang("mayday_msg_email_usade")
            );

            $this->load->view('frontend/template/template_response', $send);
        }
    }

    /*
     * verifica la cedula o id del usuario
     */

    public function verify_email($email)
    {
        return $this->validador_model->valida_email($email);
    }

}
