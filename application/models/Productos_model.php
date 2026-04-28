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

    /* === ESTA ES LA FUNCIÓN QUE TE FALTA === */
    public function buscar($q) {
        $this->db->group_start(); // Iniciamos un grupo para que el "activo" se respete
            $this->db->like('nombre', $q); // Cambia 'nombre' si en tu DB se llama diferente
            $this->db->or_like('descripcion', $q);
        $this->db->group_end();
        
        $this->db->where('activo', 1); // Solo mostrar productos que estén activos
        $query = $this->db->get('cat_productos');
        return $query->result();
    }

}