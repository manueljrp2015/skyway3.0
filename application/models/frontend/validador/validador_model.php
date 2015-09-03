<?php

class Validador_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function valid_id_user($id)
    {

        $q = $this->db->get_where("skyway_user", array("identificacion" => $id));
        if ($q->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function valid_login_user($login)
    {
        $q = $this->db->get_where("skyway_user", array("login" => $login));
        if ($q->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function valid_phone_user($phone)
    {
        $q = $this->db->get_where("skyway_datos_complementarios", array("telefono" => $phone));
        if ($q->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function valida_email($email)
    {

        $q = $this->db->get_where("skyway_user", array("email" => $email));
        if ($q->num_rows() > 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
