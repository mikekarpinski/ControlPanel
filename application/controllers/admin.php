<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            	$logged = $this->session->userdata('logged');
				if( ! $logged )
				{
						if ( 
						( uri_string() != "admin/index")
						AND
						(uri_string()  != "admin/check_login") 
						)
					{
						redirect("admin/index");
					}
					
				}

    }


	public function index($error = "")
	{
		$data = array();

		if(!empty($error))
		{
			$data['error'] = "Wrong login or password";
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('/admin/LoginPage',$data);
		}
	}

	public function dashboard()
	{
		echo "Dashboard";
		return True;
		die();
	}

	public function check_login()
	{
		$login    = $_POST['login'];
		$password = $_POST['password'];

		if ((!isset($login))OR(!isset($password)))
		{
			$this->index(1);
		}

		$this->load->model('User');

		if($this->User->check_login($login, $password))
		{
			$this->session->set_userdata(array('logged'=> "True"));
			redirect('/admin/dashboard/');
		}
		else
		{
			$this->index(1);
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */