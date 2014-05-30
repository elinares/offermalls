<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$this->load->model('admin_model');

		if($this->input->post()){
			$email = $this->input->post('email');
			$contrasena = md5($this->input->post('contrasena'));
			
			$result = $this->admin_model->login($email, $contrasena);

			if($result){
				$this->session->set_userdata('info_user',$result);
				redirect('dashboard');
			}else{
				redirect('/');
			}
		}
	}

	public function logout(){
		$this->session->unset_userdata('info_user');
		redirect('/');
	}

	public function dashboard()
	{
		$this->load->view('dash');
	}

	/*CARGOS*/

	public function cargos()
	{
		$this->load->model('admin_model');
		$data['cargos'] = $this->admin_model->obtener_cargos();

		$this->load->view('lista_cargos', $data);
	}

	public function agregar_cargo()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos_cargo = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->guardar_cargos($datos_cargo);

			if($result){
				redirect('cargos');
			}
		}

		$this->load->view('agregar_cargo');
	}

	public function editar_cargo($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_cargo($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos_cargo = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->actualizar_cargos($datos_cargo, $id);

			if($result){
				redirect('cargos');
			}
		}

		$data['info_cargo'] = $datos;

		$this->load->view('editar_cargo', $data);
	}

	public function eliminar_cargo($id){
		$this->db->where('codcarg', $id);
		$result = $this->db->delete('cargo'); 

		if($result){
			redirect('cargos');
		}
	}	

	/*CATEGORIAS*/

	public function categorias()
	{
		$this->load->model('admin_model');
		$data['categorias'] = $this->admin_model->obtener_categorias();

		$this->load->view('lista_categorias', $data);
	}

	public function agregar_categoria()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');
			$imagen = $this->input->post('imagen');

			$datos = array(
				'nombre' => $nombre,
				'img' => $imagen
				);

			$result = $this->admin_model->guardar_categorias($datos);

			if($result){
				redirect('categorias');
			}
		}

		$this->load->view('agregar_categoria');
	}

	public function editar_categoria($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_categoria($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');
			$imagen = $this->input->post('imagen');

			$datos_db = array(
				'nombre' => $nombre,
				'img' => $imagen
				);

			$result = $this->admin_model->actualizar_categorias($datos_db, $id);

			if($result){
				redirect('categorias');
			}
		}

		$data['info_categoria'] = $datos;

		$this->load->view('editar_categoria', $data);
	}

	public function eliminar_categoria($id){
		$this->db->where('idcategoria', $id);
		$result = $this->db->delete('categoria'); 

		if($result){
			redirect('categorias');
		}
	}

	/*CENTROS COMERCIALES*/

	public function ccomerciales()
	{
		$this->load->model('admin_model');
		$data['ccomerciales'] = $this->admin_model->obtener_ccomerciales();

		$this->load->view('lista_ccomerciales', $data);
	}

	public function agregar_ccomercial()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');
			$municipio = $this->input->post('municipio');

			$datos = array(
				'nombre' => $nombre,
				'codciudad' => $municipio
				);

			$result = $this->admin_model->guardar_ccomerciales($datos);

			if($result){
				redirect('ccomerciales');
			}
		}

		$data['municipios'] = $this->admin_model->obtener_municipios();
		$this->load->view('agregar_ccomercial', $data);
	}

	public function editar_ccomercial($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_ccomercial($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');
			$municipio = $this->input->post('municipio');

			$datos_db = array(
				'nombre' => $nombre,
				'codciudad' => $municipio
				);

			$result = $this->admin_model->actualizar_ccomerciales($datos_db, $id);

			if($result){
				redirect('ccomerciales');
			}
		}

		$data['municipios'] = $this->admin_model->obtener_municipios();
		$data['info_ccomercial'] = $datos;

		$this->load->view('editar_ccomercial', $data);
	}

	public function eliminar_ccomercial($id){
		$this->db->where('codccomerc', $id);
		$result = $this->db->delete('ccomercial'); 

		if($result){
			redirect('ccomerciales');
		}
	}

	/*DEPARTAMENTOS*/

	public function departamentos()
	{
		$this->load->model('admin_model');
		$data['departamentos'] = $this->admin_model->obtener_departamentos();

		$this->load->view('lista_departamentos', $data);
	}

	public function agregar_departamento()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos_departamento = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->guardar_departamentos($datos_departamento);

			if($result){
				redirect('departamentos');
			}
		}

		$this->load->view('agregar_departamento');
	}

	public function editar_departamento($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_departamento($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos_departamento = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->actualizar_departamentos($datos_departamento, $id);

			if($result){
				redirect('departamentos');
			}
		}

		$data['info_departamento'] = $datos;

		$this->load->view('editar_departamento', $data);
	}

	public function eliminar_departamento($id){
		$this->db->where('coddepart', $id);
		$result = $this->db->delete('departamento'); 

		if($result){
			redirect('departamentos');
		}
	}

	/*ESTADOS DE CLIENTES*/

	public function eclientes()
	{
		$this->load->model('admin_model');
		$data['eclientes'] = $this->admin_model->obtener_eclientes();

		$this->load->view('lista_eclientes', $data);
	}

	public function agregar_ecliente()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->guardar_eclientes($datos);

			if($result){
				redirect('eclientes');
			}
		}

		$this->load->view('agregar_ecliente');
	}

	public function editar_ecliente($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_ecliente($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos_db = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->actualizar_eclientes($datos_db, $id);

			if($result){
				redirect('eclientes');
			}
		}

		$data['info_ecliente'] = $datos;

		$this->load->view('editar_ecliente', $data);
	}

	public function eliminar_ecliente($id){
		$this->db->where('codestado', $id);
		$result = $this->db->delete('estado'); 

		if($result){
			redirect('eclientes');
		}
	}

	/*ESTADOS DE OFERTAS*/

	public function eofertas()
	{
		$this->load->model('admin_model');
		$data['eofertas'] = $this->admin_model->obtener_eofertas();

		$this->load->view('lista_eofertas', $data);
	}

	public function agregar_eoferta()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->guardar_eofertas($datos);

			if($result){
				redirect('eofertas');
			}
		}

		$this->load->view('agregar_eoferta');
	}

	public function editar_eoferta($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_eoferta($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos_db = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->actualizar_eofertas($datos_db, $id);

			if($result){
				redirect('eofertas');
			}
		}

		$data['info_eoferta'] = $datos;

		$this->load->view('editar_eoferta', $data);
	}

	public function eliminar_eoferta($id){
		$this->db->where('idestado', $id);
		$result = $this->db->delete('estado_oferta'); 

		if($result){
			redirect('eofertas');
		}
	}

	/*MUNICIPIOS*/

	public function municipios()
	{
		$this->load->model('admin_model');
		$data['municipios'] = $this->admin_model->obtener_municipios();

		$this->load->view('lista_municipios', $data);
	}

	public function agregar_municipio()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');
			$departamento = $this->input->post('departamento');

			$datos = array(
				'nombre_ci' => $nombre,
				'coddepart' => $departamento
				);

			$result = $this->admin_model->guardar_municipios($datos);

			if($result){
				redirect('municipios');
			}
		}

		$data['departamentos'] = $this->admin_model->obtener_departamentos();
		$this->load->view('agregar_municipio', $data);
	}

	public function editar_municipio($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_municipio($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');
			$departamento = $this->input->post('departamento');

			$datos_db = array(
				'nombre_ci' => $nombre,
				'coddepart' => $departamento
				);

			$result = $this->admin_model->actualizar_municipios($datos_db, $id);

			if($result){
				redirect('municipios');
			}
		}

		$data['departamentos'] = $this->admin_model->obtener_departamentos();
		$data['info_municipio'] = $datos;

		$this->load->view('editar_municipio', $data);
	}

	public function eliminar_municipio($id){
		$this->db->where('codciudad', $id);
		$result = $this->db->delete('ciudad'); 

		if($result){
			redirect('municipios');
		}
	}

	/*SUBCATEGORIAS*/

	public function subcategorias()
	{
		$this->load->model('admin_model');
		$data['subcategorias'] = $this->admin_model->obtener_subcategorias();

		$this->load->view('lista_subcategorias', $data);
	}

	public function agregar_subcategoria()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');
			$categoria = $this->input->post('categoria');

			$datos = array(
				'nombre' => $nombre,
				'img' => 'default',
				'idcategoria' => $categoria
				);

			$result = $this->admin_model->guardar_subcategorias($datos);

			if($result){
				redirect('subcategorias');
			}
		}

		$data['categorias'] = $this->admin_model->obtener_categorias();
		$this->load->view('agregar_subcategoria', $data);
	}

	public function editar_subcategoria($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_subcategoria($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');
			$categoria = $this->input->post('categoria');

			$datos_db = array(
				'nombre' => $nombre,
				'img' => 'default',
				'idcategoria' => $categoria
				);

			$result = $this->admin_model->actualizar_subcategorias($datos_db, $id);

			if($result){
				redirect('subcategorias');
			}
		}

		$data['categorias'] = $this->admin_model->obtener_categorias();
		$data['info_subcategoria'] = $datos;

		$this->load->view('editar_subcategoria', $data);
	}

	public function eliminar_subcategoria($id){
		$this->db->where('codsubcat', $id);
		$result = $this->db->delete('subcategoria'); 

		if($result){
			redirect('subcategorias');
		}
	}

	/*TIPOS DE DESCUENTO*/

	public function tdescuentos()
	{
		$this->load->model('admin_model');
		$data['tdescuentos'] = $this->admin_model->obtener_tdescuentos();

		$this->load->view('lista_tdescuentos', $data);
	}

	public function agregar_tdescuento()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos_tdescuento = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->guardar_tdescuentos($datos_tdescuento);

			if($result){
				redirect('tdescuentos');
			}
		}

		$this->load->view('agregar_tdescuento');
	}

	public function editar_tdescuento($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_tdescuento($id);

		if($this->input->post()){
			$nombre = $this->input->post('nombre');

			$datos_tdescuento = array(
				'nombre' => $nombre
				);

			$result = $this->admin_model->actualizar_tdescuentos($datos_tdescuento, $id);

			if($result){
				redirect('tdescuentos');
			}
		}

		$data['info_tdescuento'] = $datos;

		$this->load->view('editar_tdescuento', $data);
	}

	public function eliminar_tdescuento($id){
		$this->db->where('codtipdes', $id);
		$result = $this->db->delete('tipo_descuento'); 

		if($result){
			redirect('tdescuentos');
		}
	}

	/*USUARIOS*/

	public function usuarios()
	{
		$this->load->model('admin_model');
		$data['usuarios'] = $this->admin_model->obtener_usuarios();

		$this->load->view('lista_usuarios', $data);
	}

	public function agregar_usuario()
	{
		$this->load->model('admin_model');

		if($this->input->post()){
			$nombres = $this->input->post('nombres');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
			$celular = $this->input->post('celular');
			$email = $this->input->post('email');
			$password = md5($this->input->post('contrasena'));
			$cargo = $this->input->post('cargo');
			$privilegio = $this->input->post('privilegio');
			$empresa = $this->input->post('empresa');

			$datos_usuario = array(
				'nombres' => $nombres,
				'apellidos' => $apellidos,
				'telefono' => $telefono,
				'celular' => $celular,
				'email' => $email,
				'password' => $password,
				'codcarg' => $cargo,
				'codprivilegio' => $privilegio,
				'codemp' => $empresa
				);

			$result = $this->admin_model->guardar_usuarios($datos_usuario);

			if($result){
				redirect('usuarios');
			}
		}
		
		$data['cargos'] = $this->admin_model->obtener_cargos();
		$data['empresas'] = $this->admin_model->obtener_empresas();
		$data['privilegios'] = $this->admin_model->obtener_privilegios();

		$this->load->view('agregar_usuario', $data);
	}

	public function editar_usuario($id){
		$this->load->model('admin_model');

		$datos = $this->admin_model->obtener_usuario($id);

		if($this->input->post()){
			$nombres = $this->input->post('nombres');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
			$celular = $this->input->post('celular');
			$email = $this->input->post('email');
			
			$password = $this->input->post('contrasena');
			if($password==''){
				$password=$datos['password'];
			}else{
				$password=md5($password);
			}

			$cargo = $this->input->post('cargo');
			$privilegio = $this->input->post('privilegio');
			$empresa = $this->input->post('empresa');

			$datos_usuario = array(
				'nombres' => $nombres,
				'apellidos' => $apellidos,
				'telefono' => $telefono,
				'celular' => $celular,
				'email' => $email,
				'password' => $password,
				'codcarg' => $cargo,
				'codprivilegio' => $privilegio,
				'codemp' => $empresa
				);

			$result = $this->admin_model->actualizar_usuarios($datos_usuario, $id);

			if($result){
				redirect('usuarios');
			}
		}

		$data['info_usuario'] = $datos;
		
		$data['cargos'] = $this->admin_model->obtener_cargos();
		$data['empresas'] = $this->admin_model->obtener_empresas();
		$data['privilegios'] = $this->admin_model->obtener_privilegios();

		$this->load->view('editar_usuario', $data);
	}

	public function eliminar_usuario($id){
		$this->db->where('codusr', $id);
		$result = $this->db->delete('usuario'); 

		if($result){
			redirect('usuarios');
		}
	}	

	/*USUARIOS FINALES*/

	public function ufinales()
	{
		$this->load->model('admin_model');
		$data['ufinales'] = $this->admin_model->obtener_ufinales();

		$this->load->view('lista_ufinales', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */