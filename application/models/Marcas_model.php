<?php

class Marcas_model extends CI_Model{

public function obtener_marcas(){

$this->db->where('activo',1);

$query = $this->db->get('marcas');

return $query->result();

}

}