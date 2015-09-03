<?php
/**
 * @title: Skyway 3.0
 * @developer: Tsu. Manuel Rodriguez
 * @copyright: 2015
 * @class: controller
 */
class Catalogos_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_tipo_id()
    {
        $q = $this->db->get("skyway_tipo_id");

        if($q->num_rows() > 0)
        {
            foreach($q->result() as $v)
            {
                $d[] = $v;
            }

            return $d;
        }
        else
        {
            return NULL;
        }
    }

}