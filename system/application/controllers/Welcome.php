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

	public function ajax()
	{
		//echo "the Welcom controller test action";
		$test['test']="test in constant by var";
		$this->load->view('ajax_test',FALSE);
		//处理从view中发送过来的数据
		//$test_ok="变量分配测试";
		//$test_ok['test']=$this->input->post('test');
		//$test="test in constant by var";
		//echo "test in controller";
		//var_dump($_POST);
		//echo $ast;
		//$data_my=$_POST['test'];
		//echo $data_my;
		//$this->load->view('ajax_test',$data_my);
		//$this->load->vars($test_ok);
		//$this->load->view('ajax1',$test);
		//$this->output->append_output($test_ok);
	}

}
