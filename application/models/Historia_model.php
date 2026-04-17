<?php

class Historia_model extends CI_Model{

public function obtener_acerca(){

$this->db->where('tipo','acerca');
$this->db->where('activo',1);
$this->db->order_by('orden','ASC');

$query = $this->db->get('historia');

return $query->result();

}

public function obtener_timeline(){

$this->db->where('tipo','timeline');
$this->db->where('activo',1);
$this->db->order_by('orden','ASC');

$query = $this->db->get('historia');

return $query->result();

}

}