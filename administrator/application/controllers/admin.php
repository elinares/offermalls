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
			print_r($result);

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