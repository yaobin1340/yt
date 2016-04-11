<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

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
        parent::__construct();
        if (!$this->session->userdata('username')){
            redirect('login');
        }
        
      //  $this->load->model('login_model');
    }
    public function index()
    {
      $this->admin_io();
//		$this->load->view('base_data');
    }
    public function admin_io($type='admin')
    {
        $types=array('admin',
            'admin_supplier',
            'admin_project',
            'admin_paymentrequest',
            'admin_schedule',
            'admin_deal',
            'admin_deal_model',
            'admin_push',
            'admin_unit',
            'admin_material',
            'admin_user');
        if(!in_array($type,$types)){
            
        }
        /*$this->cismarty->assign('type',$type);
        if ($type=='admin'){

            $path="admin/admin_index.html";
        }
        else
        {
            $path="admin/{$type}.html";
        }*/
        redirect($type);
       // die($path);
        //$this->cismarty->display($path);
    }
}
