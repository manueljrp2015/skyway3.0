<?php

class mayday_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * model que ejecuta query para validar los datos 
     */

    public function exec_query_mayday($array)
    {

        $q = $this->db->query("SELECT * 
                        FROM skyway_user
                        WHERE identificacion = " . $array['ident'] . " AND login = '" . $array['apodo'] . "'
                        OR identificacion = " . $array['ident'] . " AND nombre = '" . $array['nomb'] . "'
                        OR identificacion = " . $array['ident'] . " AND apellido = '" . $array['apel'] . "'
                        OR identificacion = " . $array['ident'] . " AND nombre = '" . $array['nomb'] . "' AND apellido = '" . $array['apel'] . "'
                        OR identificacion = " . $array['ident'] . " AND nombre = '" . $array['nomb'] . "' AND apellido = '" . $array['apel'] . "' AND login = '" . $array['apodo'] . "'");

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $v) {
                $email = $v->email;
            }
            return $email;
        } else {
            return FALSE;
        }
    }

    public function exec_change_mayday($array)
    {

        $data = array(
            'email' => $array['email_new'],
        );

        $this->db->where('email', $array['email_old']);
        $this->db->update('skyway_user', $data);

        return TRUE;
    }

}
