<?php
class Banner_model extends CI_Model {

    public function obtener_banner(){

        $this->db->where('activo',1);
        $query = $this->db->get('banner');

        return $query->result();
    }

}