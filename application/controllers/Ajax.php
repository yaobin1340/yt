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
	public function index()
	{
		echo '1111';
//		$this->load->view('base_data');
	}

	public function upload_image(){
		$config['upload_path'] = './././uploadimages/';
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
}
