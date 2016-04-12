<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/11
 * Time: 21:43
 */
class Add_unit_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }
    function add($unit)
    {

       // $unit=$this->input->post('unit');
      // die($unit);

        $data= $this->db->select()->from('unit')->where('name',$unit)->get()->row_array();
        if ($data)
        {
            return 1;
        }
        $time=time();
        $add=array(
            'name'=>$unit,
            'cdate'=>date("y-m-d h:m:s",$time)
        );
        $res=$this->db->insert('unit',$add);
        if (!$res)
        {
            return 2;
        }
        else
        {
            return 3;
        }
    }
}