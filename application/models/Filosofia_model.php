<?php

class Filosofia_model extends CI_Model{

public function obtener_pilares(){

$this->db->where('tipo','pilares');
$this->db->where('activo',1);
$this->db->order_by('orden','ASC');

$query = $this->db->get('filosofia');

return $query->result();

}

public function obtener_valores(){

$this->db->where('tipo','valores');
$this->db->where('activo',1);
$this->db->order_by('orden','ASC');

$query = $this->db->get('filosofia');

return $query->result();

}

}