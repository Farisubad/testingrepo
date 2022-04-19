<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent :: __construct();

        $this->load->model('m_login');
    }
	public function index()
	{   
	
		$this->load->view('login');	

	}
    public function login_aksi()
    {
        $user = $this->input->post('username',true);
        $pass = $this->input->post('password',true);

        //rules validasi
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');


        if($this->form_validation->run() != FALSE){
            $where = array(
                'username' => $user,
                'password' => $pass
            );

            $ceklogin = $this->m_login->cek_login($where)->num_rows();

            if($ceklogin > 0){
                $sess_data = array(
                    'username' =>$user,
                    'login' => 'OK'
                );
                $this->session->set_userdata($sess_data);
                redirect(base_url('index.php/home'));
            }
            else{
                redirect(base_url('index.php/log')); 
            }
        }
        else{
            $this->load->view('login');

        }
    }
    public function logout()
    {
       $this->session->sess_destroy();
       redirect(base_url('index.php/log')); 

    }
}
    ?>