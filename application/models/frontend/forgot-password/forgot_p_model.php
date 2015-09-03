<?php

class forgot_p_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //valida el usuario en skyway
    public function valid_id_user($id) {

        $q = $this->db->get_where("skyway_user", array("identificacion" => $id));
        if ($q->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //obtiene informacion del usuario
    public function get_info_user($arr) {

        $q = $this->db->get_where("skyway_user", array("identificacion" => $arr['id']));
        if ($q->num_rows() > 0)
        {
            foreach ($q->result() as $v)
            {
                $d[] = $v;
            }

            return $d;
        }
        else
        {
            return FALSE;
        }
    }
    
    //verifica si una solicitud de cambio de clave

    public function verify_user_temp_pass($arr) {

        $q = $this->db->get_where("skyway_renew_pass", array("_idn" => $arr['id'], "_status" => "A"));
        if ($q->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //inserta solicitud de cambio de clave
    public function put_user_temp_pass($arr, $em) {

        $data = array(
            '_email' => $em,
            '_idn' => $arr['id']
        );

        $this->db->insert('skyway_renew_pass', $data);

        return TRUE;
    }

    //si hay una solicitud activa la actualiza
    public function update_user_temp_pass($arr) {

        $data = array(
            '_status' => "A"
        );
        $this->db->set('_date_create', 'NOW()', FALSE);
        $this->db->where("_idn", $arr['id']);
        $this->db->where("_status", "A");
        $this->db->update('skyway_renew_pass', $data);

        return TRUE;
    }

    //verifica el momento en que fue realizada la solicitud
    public function verify_sts_r($id) {

        $q = $this->db->get_where("skyway_renew_pass", array("_idn" => $id, "_status" => "A"));

        if ($q->num_rows() > 0)
        {
            foreach ($q->result() as $v)
            {
                $d = $v->_date_create;
            }

            return $d;
        }
        else
        {
            return FALSE;
        }
    }

    //expria la solicitud de cambio de clave
    public function expire_url_renew($id) {

        $data = array(
            '_status' => "V"
        );
        $this->db->where('_idn', $id);
        $this->db->update('skyway_renew_pass', $data);

        return TRUE;
    }
    
    
    //inserta en nuevo password
    public function put_new_pass($arr) {

        $data = array(
            'pwd' => do_hash($arr['p_new'])
        );
        $this->db->where('identificacion', $arr['idn']);
        $this->db->update('skyway_user', $data);

        return TRUE;
    }

}
