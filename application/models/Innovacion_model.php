<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Innovacion_model extends CI_Model {

    public function obtenerInnovacion()
    {
        $this->db->select('
            cat_innovacion.id,
            cat_innovacion.titulo,
            cat_innovacion.descripcion,
            cat_imagenes.url,
            cat_imagenes.nombre_archivo
        ');

        $this->db->from('cat_innovacion');

        $this->db->join(
            'cat_imagenes',
            'cat_imagenes.id = cat_innovacion.id_imagen'
        );

        $this->db->where('cat_innovacion.activo', 1);

        $this->db->order_by('cat_innovacion.id', 'ASC');

        return $this->db->get()->result();
    }
}