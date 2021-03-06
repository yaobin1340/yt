<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

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
        if (!$this->session->userdata('username')){
            redirect('login');
        }
        $this->cismarty->assign('type',1);
      //  $this->load->model('login_model');
    }

    public function index(){
        if ($this->session->userdata('type')==1){
            redirect('admin/index');
        }elseif($this->session->userdata('type')==2){
            redirect('supplier/index');
        }elseif($this->session->userdata('type')==3){
            redirect('project/index');
        }else{
            $this->session->sess_destroy();
            redirect('login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
