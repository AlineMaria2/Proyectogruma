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
public function buscar($query) {
    $this->db->select('*');
    $this->db->from('historia'); // Tu tabla de la base de datos
    $this->db->like('titulo', $query);
    $this->db->or_like('descripcion', $query);
    $query = $this->db->get();
    return $query->result();
} 
}
