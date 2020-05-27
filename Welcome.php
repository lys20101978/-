<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('bootstrap');
		$this->load->database();
		//var_dump($this->db);
		//$sql="select * from card";
		//$res=$this->db->query($sql);
		//$user=$res->result();
		//var_dump($user);
	}

	
	public function home()
	{

		$my_data=$this->input->post('test');
		$send_data["my_data"]=$my_data;
		//echo $my_data;
		//$this->output->set_output($my_data);
		$this->load->view("ajax_test");
		$this->load->view("home",$send_data);

	}

	


	

}
