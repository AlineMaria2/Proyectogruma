<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sustentabilidad_model extends CI_Model {

    // CONTENIDO GENERAL
    public function obtenerSustentabilidad()
    {
        $this->db->select('
            cat_sustentabilidad.id,
            cat_sustentabilidad.titulo,
            cat_sustentabilidad.descripcion,
            cat_imagenes.url,
            cat_imagenes.nombre_archivo
        ');

        $this->db->from('cat_sustentabilidad');

        $this->db->join(
            'cat_imagenes',
            'cat_imagenes.id = cat_sustentabilidad.id_imagen'
        );

        $this->db->where('cat_sustentabilidad.activo', 1);

        $this->db->order_by('cat_sustentabilidad.id', 'ASC');

        return $this->db->get()->result();
    }


    // IMAGENES DEL CARRUSEL
    public function obtenerBanner()
    {
        $this->db->select('
            cat_imagenes.url,
            cat_imagenes.nombre_archivo
        ');

        $this->db->from('cat_sustentabilidad_banner');

        $this->db->join(
            'cat_imagenes',
            'cat_imagenes.id = cat_sustentabilidad_banner.id_imagen'
        );

        $this->db->where('cat_sustentabilidad_banner.id_sustentabilidad', 1);

        return $this->db->get()->result();
    }
}