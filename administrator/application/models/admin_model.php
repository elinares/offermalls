<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct()
    {        
        parent::__construct();
    }
    
    function obtener_usuarios()
    {
        $query = $this->db->get('usuario');
        return $query->result_array();
    }

    function obtener_cargos()
    {
        $query = $this->db->get('cargo');
        return $query->result_array();
    }

    function obtener_privilegios()
    {
        $query = $this->db->get('privilegios');
        return $query->result_array();
    }

    function obtener_empresas()
    {
        $query = $this->db->get('empresa');
        return $query->result_array();
    }

    function guardar_usuarios($datos){
        return $this->db->insert('usuario', $datos);
    }

}
?>