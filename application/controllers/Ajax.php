<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

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
	function __construct(){
		parent::__construct();

		$this->load->model('ajax_model');
	}
	public function index()
	{

//		$this->load->view('base_data');
	}

	public function upload_image(){
		$config['upload_path'] = './uploadimages/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = true;
		$config['max_size'] = '1000';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile')){
			echo 1;
		}else{
			$pic_arr = $this->upload->data();
			echo $pic_arr['file_name'];
		}
	}

	public function getprovince(){
		$data=$this->ajax_model->getprovince();
		echo json_encode($data);
	}

	public function getcity($code){
		$data=$this->ajax_model->getcity($code);
		echo json_encode($data);
	}

	public function getarea($code){
		$data=$this->ajax_model->getarea($code);
		echo json_encode($data);
	}

	public function getmaterial(){
		$data=$this->ajax_model->getmaterial();
		echo json_encode($data);
	}

	public function getunit(){
		$data=$this->ajax_model->getunit();
		echo json_encode($data);
	}

	public function get_supplier(){
		$data=$this->ajax_model->get_supplier();
		//var_dump($data);
		echo json_encode($data);

	}

	public function get_pro(){
		$data=$this->ajax_model->get_pro();
		//var_dump($data);
		echo json_encode($data);
	}
}
