<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/13
 * Time: 13:21
 */
class Deal_model_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function save_model(){
        if (!$this->input->post('dealname')){
            return 2;     //没有标题 不可保存
        }
        if($this->db->select()->from('deal_model')->where('dealname',$this->input->post('dealname'))->get()->row_array()){
            return 5;
        }

        $config['upload_path']="./uploadfiles/";
        $config['allowed_types']="jpg|gif|png|jpeg|doc|docx|pdf|xlsx";
        $config['file_name']=uniqid();
        $config['max_size'] = '10000';
        //$config['encrypt_name']=true;
        $this->load->library('upload',$config);
        if( !$this->upload->do_upload('Inputfile')){
            return 3;  //文件上传失败
        }
        $data=$this->upload->data();

        $modeldata=array(
          'dealname'=>$this->input->post('dealname'),
            'url'=>$data['file_name'],
            'oldfilename'=>$data['client_name'],
            'cdate'=>date("y-m-d H:i:s",time())
        );
       $res=$this->db->insert('deal_model',$modeldata);
        if ($res){
            return 1;
        }
        else{
            return 4;
        }

    }

    public function list_task($page){
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('deal_model');
        if($this->input->post('title')){
            $this->db->like('dealname',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select()->from('deal_model');

        if($this->input->post('title')){
            $this->db->like('dealname',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

    public function delete_model($id){
        return $this->db->delete('deal_model',array('id'=>$id));
    }

    public function download($id){

        $this->load->helper('download');
        $this->load->helper('file');
        $data=$this->db->select()->from('deal_model')->where('id',$id)->get()->row_array();

        if ($data){
            $string = read_file('./uploadfiles/'.$data['url']);

         //   $file_name='./uploadfiles/'.$data['url'];//需要下载的文件

            force_download($data['oldfilename'],$string);

        }


    }
}