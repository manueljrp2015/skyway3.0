<?php

class landing_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_landing_home()
    {

        $q = $this->db->get("skyway_landing_home");

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $v) {
                $d["landing-home"] = $v;
            }
            return $d;
        } else {
            return $d["landing-home"] = NULL;
        }
    }

    function put_landing_home()
    {

    }

    function get_landing_features()
    {

        $this->db->limit(3);
        $q = $this->db->get_where("skyway_landing_features", array("_active" => "SI"));

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $v) {
                $d[] = $v;
            }
            return $d;
        } else {
            return $d[] = NULL;
        }
    }

    function put_landing_session()
    {

    }

    function get_landing_session_simple()
    {

        $this->db->limit(3);
        $q = $this->db->get_where("skyway_landing_session", array("_active" => "SI"));

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $v) {
                $d[] = $v;
            }
            return $d;
        } else {
            return $d[] = NULL;
        }
    }

    function put_landing_session_simple()
    {

    }

    function get_landing_structure()
    {

        $q = $this->db->get("skyway_landing_structure");

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $v) {
                $d[] = $v;
            }
            return $d;
        } else {
            return $d[] = NULL;
        }
    }

    function put_landing_structure()
    {

    }

}
