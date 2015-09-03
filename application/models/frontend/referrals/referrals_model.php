<?php

/**
 * @title: Skyway 3.0
 * @developer: Tsu. Manuel Rodriguez
 * @copyright: 2015
 * @class: model 
 */

class Referrals_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * @class: function que ejecuta query para obtener grid de referidos
     * @param: nombre, email, telefono 
     */
    public function query_search_referral($data) {

        $q = $this->db->query("SELECT 
                            u.id,
                            u.email,
                            CONCAT(u.nombre,' ',u.apellido) as nomb,
                            u.apellido,
                            u.cuenta,
                            d.telefono,
                            if(f.imagen = '', 'coin-small-black.png', f.imagen) as img
                            FROM skyway_user AS u
                            LEFT JOIN skyway_folder_profile AS f ON f.fk_id_user = u.id
                            LEFT JOIN skyway_datos_complementarios AS d ON d.fk_id_user = u.id
                            WHERE CONCAT(nombre,' ',apellido) LIKE '%" . $data . "%'
                            OR u.nombre LIKE '" . $data . "%'
                            OR u.apellido LIKE '" . $data . "%'
                            OR d.telefono = '" . $data . "'
                            OR u.email = '" . $data . "'");

        if ($q->num_rows() > 0)
        {

            foreach ($q->result() as $row)
            {
                $d[] = $row;
            }

            return $d;
        }
        else
        {
            return $d[] = NULL;
        }
    }

    /**
     * @function: function extrae todos los referidos
     * @param: nombre, email, telefono 
     */
    public function get_all_referral_query() {

        $q = $this->db->query("SELECT 
                            u.id,
                            u.email,
                            CONCAT(u.nombre,' ',u.apellido) as nomb,
                            u.apellido,
                            u.cuenta,
                            d.telefono,
                            if(f.imagen = NULL, 'coin-small-black.png', f.imagen) as img
                            FROM skyway_user AS u
                            LEFT JOIN skyway_folder_profile AS f ON f.fk_id_user = u.id
                            LEFT JOIN skyway_datos_complementarios AS d ON d.fk_id_user = u.id
                            LIMIT 40");

        if ($q->num_rows() > 0)
        {

            foreach ($q->result() as $row)
            {
                $d[] = $row;
            }

            return $d;
        }
        else
        {
            return $d[] = NULL;
        }
    }

    /**
     * @function: function que consulta la informarcion del referido
     * @param: id del referido 
     */
    public function get_info_referral($id_referral) {

        $q = $this->db->query("
                            SELECT
                            u.id,
                            u.email,
                            CONCAT(u.nombre, ' ', u.apellido) AS nomb,
                            u.login,
                            u.cuenta,
                            d.telefono,
                            IF(co._coins_balance = NULL, 0, co._coins_balance) AS coins,
                            IF(COUNT(fol._fk_follower) = 0, 0, COUNT(fol._fk_follower)) AS followers,
                            IF(COUNT(fri._fk_friends) = 0, 0, COUNT(fri._fk_friends)) AS friends,
                            IF(COUNT(bio._fk_me) = 0, 0, COUNT(bio._fk_me)) AS releases,

                    IF (
                            f.imagen = NULL,
                            'coin-small-black.png',
                            f.imagen
                    ) AS img

                    FROM
                            skyway_user AS u
                    LEFT JOIN skyway_folder_profile AS f ON f.fk_id_user = u.id
                    LEFT JOIN skyway_datos_complementarios AS d ON d.fk_id_user = u.id
                    LEFT JOIN skyway_coins AS co ON co._fk_me = u.id
                    LEFT JOIN skyway_followers AS fol ON fol._fk_continued = u.id
                    AND fol._follow = 'FOLLOWING'
                    LEFT JOIN skyway_friends AS fri ON fri._fk_me = u.id
                    AND fri._friends_status = 'YES'
                    LEFT JOIN skyway_post_biography AS bio ON bio._fk_me = u.id
                    AND bio._status = 1
                    WHERE u.id = '" . base64_decode($id_referral) . "'");

        if ($q->num_rows() > 0)
        {
            foreach ($q->result() as $val)
            {
                $d[] = $val;
            }
            return $d;
        }
        else
        {
            return $d[] = NULL;
        }
    }

}
