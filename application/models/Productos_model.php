<?php
class Productos_model extends CI_Model{

    public function obtener_productos(){

        $this->db->where('activo',1);
        $query = $this->db->get('cat_productos');

        return $query->result();

    }

    public function obtener_producto($id){

    $this->db->where('id',$id);
    $query = $this->db->get('cat_productos');

    return $query->row();

}

    public function obtener_marcas(){

    $query = $this->db->get('marcas');

    return $query->result();

}

    public function obtener_productos_marca($id_marca){

    $this->db->where('id_marca',$id_marca);
    $this->db->where('activo',1);

    $query = $this->db->get('cat_productos');

    return $query->result();

}

}