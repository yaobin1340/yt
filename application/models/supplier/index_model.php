<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 9:00
 */
class Index_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function get_index_info(){
        $rs = $this->db->select('a.id id,name')->from('supplier_profile a')
            ->join('users b','a.masterid=b.id','left')
            ->where('status',2)->order_by('cdate','desc')->limit(4)->get()->result_array();

        $data['s_list'] = $rs;
        return $data;

    }

}