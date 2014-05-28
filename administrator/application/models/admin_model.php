<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct()
    {        
        parent::__construct();
    }

    function login($email, $contrasena)
    {
        $query = $this->db->get_where('usuario', array('email'=>$email, 'password'=>$contrasena));
        return $query->row_array();
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

    /*MANTENIMIENTO CARGOS*/

    function obtener_cargos()
    {
        $query = $this->db->get('cargo');
        return $query->result_array();
    }

    function guardar_cargos($datos){        
        return $this->db->insert('cargo', $datos);
    }

    function obtener_cargo($id){
        $query = $this->db->get_where('cargo', array('codcarg'=>$id));
        return $query->row_array();
    }

    function actualizar_cargos($datos, $id){
        $this->db->where('codcarg', $id);
        return $this->db->update('cargo', $datos);
    }

    /*MANTENIMIENTO CENTROS COMERCIALES*/

    function obtener_ccomerciales(){
        $query = $this->db->get('ccomercial');
        return $query->result_array();
    }

    function guardar_ccomerciales($datos){        
        return $this->db->insert('ccomercial', $datos);
    }

    function obtener_ccomercial($id){
        $query = $this->db->get_where('ccomercial', array('codccomerc'=>$id));
        return $query->row_array();
    }

    function actualizar_ccomerciales($datos, $id){
        $this->db->where('codccomerc', $id);
        return $this->db->update('ccomercial', $datos);
    }

    /*MANTENIMIENTO DEPARTAMENTOS*/

    function obtener_departamentos(){
        $query = $this->db->get('departamento');
        return $query->result_array();
    }

    function guardar_departamentos($datos){        
        return $this->db->insert('departamento', $datos);
    }

    function obtener_departamento($id){
        $query = $this->db->get_where('departamento', array('coddepart'=>$id));
        return $query->row_array();
    }

    function actualizar_departamentos($datos, $id){
        $this->db->where('coddepart', $id);
        return $this->db->update('departamento', $datos);
    }

    /*MANTENIMIENTO ESTADOS CLIENTES*/

    function obtener_eclientes(){
        $query = $this->db->get('estado');
        return $query->result_array();
    }

    function guardar_eclientes($datos){        
        return $this->db->insert('estado', $datos);
    }

    function obtener_ecliente($id){
        $query = $this->db->get_where('estado', array('codestado'=>$id));
        return $query->row_array();
    }

    function actualizar_eclientes($datos, $id){
        $this->db->where('codestado', $id);
        return $this->db->update('estado', $datos);
    }

    /*MANTENIMIENTO ESTADOS OFERTAS*/

    function obtener_eofertas(){
        $query = $this->db->get('estado_oferta');
        return $query->result_array();
    }

    function guardar_eofertas($datos){        
        return $this->db->insert('estado_oferta', $datos);
    }

    function obtener_eoferta($id){
        $query = $this->db->get_where('estado_oferta', array('idestado'=>$id));
        return $query->row_array();
    }

    function actualizar_eofertas($datos, $id){
        $this->db->where('idestado', $id);
        return $this->db->update('estado_oferta', $datos);
    }

    /*MANTENIMIENTO MUNICIPIOS*/

    function obtener_municipios(){
        $query = $this->db->get('ciudad');
        return $query->result_array();
    }

    function guardar_municipios($datos){        
        return $this->db->insert('ciudad', $datos);
    }

    function obtener_municipio($id){
        $query = $this->db->get_where('ciudad', array('codciudad'=>$id));
        return $query->row_array();
    }

    function actualizar_municipios($datos, $id){
        $this->db->where('codciudad', $id);
        return $this->db->update('ciudad', $datos);
    }

    /*MANTENIMIENTO TIPOS DE DESCUENTOS*/

    function obtener_tdescuentos(){
        $query = $this->db->get('tipo_descuento');
        return $query->result_array();
    }

    function guardar_tdescuentos($datos){        
        return $this->db->insert('tipo_descuento', $datos);
    }

    function obtener_tdescuento($id){
        $query = $this->db->get_where('tipo_descuento', array('codtipdes'=>$id));
        return $query->row_array();
    }

    function actualizar_tdescuentos($datos, $id){
        $this->db->where('codtipdes', $id);
        return $this->db->update('tipo_descuento', $datos);
    }

    /*MANTENIMIENTO USUARIOS*/

    function obtener_usuario($id){
        $query = $this->db->get_where('usuario', array('codusr'=>$id));
        return $query->row_array();
    }
    
    function obtener_usuarios()
    {
        $query = $this->db->get('usuario');
        return $query->result_array();
    }

    function actualizar_usuarios($datos, $id){
        $this->db->where('codusr', $id);
        return $this->db->update('usuario', $datos);
    }

    function guardar_usuarios($datos){        
        return $this->db->insert('usuario', $datos);
    }

    /*MANTENIMIENTO USUARIOS FINALES*/     

    function obtener_ufinales(){
        $query = $this->db->get('usuariofinal');
        return $query->result_array();
    }

}
?>