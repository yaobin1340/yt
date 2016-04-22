<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/22
 * Time: 13:43
 */
class Schedule_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function list_task($page){
        $limit=4;
        $data['limit'] = $limit;
        $offset = ($page - 1) * $limit;
        $where="";
        if ($this->input->post('title')){
            $where=" where aa.pro_name like '%".$this->input->post('title')."%'";
        }
        //获取总记录数

        $sqlstr="select count(1) num from ((
select  a.id ex_id, c.`name` pro_name,d.name sup_name,a.cdate ex_cdate,a.`status` ex_status from `execute` a 
LEFT JOIN contract_main b on b.id = a.pid
LEFT JOIN project_profile c on b.userid = c.masterid
LEFT JOIN supplier_profile d on d.id = b.sid
where a.cid=0
)
union(
select a.id ex_id,d.name pro_name, f.name sup_name,a.cdate ex_cdate,a.`status` ex_status from `execute` a 
LEFT JOIN `change` b on b.id = a.cid
LEFT JOIN contract_main c on c.id = a.pid
LEFT JOIN project_profile d on c.userid = d.masterid
LEFT JOIN supplier_profile f on f.id = b.sid
where a.cid>0
)
) aa {$where} ORDER BY aa.ex_cdate desc";
        $num=$this->db->query($sqlstr)->row_array();
        // die(var_dump($num));
        $data['total'] = $num['num'];
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;

        //获取详细列
        $sqlstr1="select * from ((
select a.id ex_id, c.`name` pro_name,d.name sup_name,a.cdate ex_cdate,a.`status` ex_status from `execute` a 
LEFT JOIN contract_main b on b.id = a.pid
LEFT JOIN project_profile c on b.userid = c.masterid
LEFT JOIN supplier_profile d on d.id = b.sid
where a.cid=0
)
union(
select a.id ex_id,d.name pro_name, f.name sup_name,a.cdate ex_cdate,a.`status` ex_status from `execute` a 
LEFT JOIN `change` b on b.id = a.cid
LEFT JOIN contract_main c on c.id = a.pid
LEFT JOIN project_profile d on c.userid = d.masterid
LEFT JOIN supplier_profile f on f.id = b.sid
where a.cid>0
)
) aa {$where} ORDER BY aa.ex_cdate desc limit {$offset},{$limit}";
        $data['items']=$this->db->query($sqlstr1)->result_array();

        //  die(var_dump($data['pro_name']));
        return $data;


    }

}