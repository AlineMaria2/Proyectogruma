<?php
class Productos_model extends CI_Model {

    public function autocomplete($q) {
        $this->db->select('p.id, p.nombre');
        $this->db->from('cat_productos p');
        $this->db->join('cat_imagenes i', 'i.id = p.id_imagen', 'left');
        $this->db->like('p.nombre', $q);
        $this->db->where('p.activo', 1);
        $this->db->limit(6);
        return $this->db->get()->result();
    }

    public function obtener_productos() {
        $this->db->select('p.*, CONCAT(i.url, i.nombre_archivo) AS imagen_completa');
        $this->db->from('cat_productos p');
        $this->db->join('cat_imagenes i', 'i.id = p.id_imagen', 'left');
        $this->db->where('p.activo', 1);
        return $this->db->get()->result();
    }

    public function obtener_producto($id) {
        $this->db->select('p.*, CONCAT(i.url, i.nombre_archivo) AS imagen_completa');
        $this->db->from('cat_productos p');
        $this->db->join('cat_imagenes i', 'i.id = p.id_imagen', 'left');
        $this->db->where('p.id', $id);
        return $this->db->get()->row();
    }

    public function obtener_marcas() {
        return $this->db->get('marcas')->result();
    }

    public function obtener_productos_marca($id_marca) {
        $this->db->select('p.*, CONCAT(i.url, i.nombre_archivo) AS imagen_completa');
        $this->db->from('cat_productos p');
        $this->db->join('cat_imagenes i', 'i.id = p.id_imagen', 'left');
        $this->db->where('p.id_marca', $id_marca);
        $this->db->where('p.activo', 1);
        return $this->db->get()->result();
    }

    public function buscar($q) {
        $this->db->select('p.*, CONCAT(i.url, i.nombre_archivo) AS imagen_completa');
        $this->db->from('cat_productos p');
        $this->db->join('cat_imagenes i', 'i.id = p.id_imagen', 'left');
        $this->db->group_start();
            $this->db->like('p.nombre', $q);
            $this->db->or_like('p.descripcion', $q);
        $this->db->group_end();
        $this->db->where('p.activo', 1);
        return $this->db->get()->result();
    }
}