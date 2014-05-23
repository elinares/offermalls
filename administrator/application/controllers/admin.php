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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */