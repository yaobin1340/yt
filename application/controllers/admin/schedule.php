<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/22
 * Time: 13:41
 */
class Schedule extends MY_Controller {
    function __construct(){
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type',5);
        $this->load->model('admin/schedule_model','schedule_model');
    }

    function index(){
        $this->list_task();
    }


    public  function list_task($page=1){
        $data = $this->schedule_model->list_task($page);
        $base_url = "/admin/schedule/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('web_title','进度数据');
        $this->display('admin/admin_schedule.html');

    }

    public function export_exe($id){
        $rs = $this->schedule_model->get_exe_data($id);
        if(!$rs){
            $this->show_message('暂无数据');
        }
        $project_name = $this->schedule_model->get_project_name($id);
        require_once (APPPATH . 'libraries/PHPExcel/PHPExcel.php');
        $excel  = new \PHPExcel ();
        $excel->getActiveSheet()->setCellValue("A1","裕腾管理软件，项目进度表");
        $excel->getActiveSheet()->mergeCells('A1:G1');
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $excel->getActiveSheet()->setCellValue("A2","项目名称：".$project_name);
        $excel->getActiveSheet()->mergeCells('A2:G2');

        $letter = array('A','B','C','D','E','F','G');
        $tableheader = array('序','日期','物料','供应商','数量','单价','备注');
        for($i = 0;$i < count($tableheader);$i++) {
            $excel->getActiveSheet()->setCellValue("$letter[$i]3","$tableheader[$i]");
        }
        $data = array();

        foreach ($rs as $k=>$v){
            $sname = $v['sname1']?$v['sname1']:$v['sname2'];
            $data[] = array(($k+1),$v['cdate'],$v['m_name'],$sname,$v['num'],$v['price'],$v['desc']);
        }

        for ($i = 4;$i <= count($data) + 3;$i++) {
            $j = 0;
            foreach ($data[$i - 4] as $key=>$value) {
                $excel->getActiveSheet()->setCellValue("$letter[$j]$i",' '."$value");
                $j++;
            }
        }
        $write = new \PHPExcel_Writer_Excel5 ($excel);
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");;
        header('Content-Disposition:attachment;filename="testdata.xls"');
        header("Content-Transfer-Encoding:binary");
        $write->save('php://output');
    }

    public function export_pay($id){
        $rs = $this->schedule_model->get_exe_data($id);
        if(!$rs){
            $this->show_message('暂无数据');
        }
        $project_name = $this->schedule_model->get_project_name($id);
        require_once (APPPATH . 'libraries/PHPExcel/PHPExcel.php');
        $excel  = new \PHPExcel ();
        $excel->getActiveSheet()->setCellValue("A1","裕腾管理软件，款项进度表");
        $excel->getActiveSheet()->mergeCells('A1:H1');
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $excel->getActiveSheet()->setCellValue("A2","项目名称：".$project_name);
        $excel->getActiveSheet()->mergeCells('A2:H2');

        $letter = array('A','B','C','D','E','F','G','H');
        $tableheader = array('序','申请日期','物料','供应商','合约编号','数量','单价','支付状态');
        for($i = 0;$i < count($tableheader);$i++) {
            $excel->getActiveSheet()->setCellValue("$letter[$i]3","$tableheader[$i]");
        }
        $data = array();

        foreach ($rs as $k=>$v){
            $sname = $v['sname1']?$v['sname1']:$v['sname2'];
            $no = $v['no1']?$v['no1']:$v['no2'];
            if($v['status'] == 1)
                $status = '未申请支付';
            if($v['status'] == 2)
                $status = '申请支付';
            if($v['status'] == 3)
                $status = '已支付';
            $data[] = array(($k+1),$v['cdate'],$v['m_name'],$sname,''.$no,$v['num'],$v['price'],$status);
        }

        for ($i = 4;$i <= count($data) + 3;$i++) {
            $j = 0;
            foreach ($data[$i - 4] as $key=>$value) {
                $excel->getActiveSheet()->setCellValue("$letter[$j]$i",' '."$value");
                $j++;
            }
        }
        $write = new \PHPExcel_Writer_Excel5 ($excel);
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");;
        header('Content-Disposition:attachment;filename="testdata.xls"');
        header("Content-Transfer-Encoding:binary");
        $write->save('php://output');
    }

    function show_ex($id){
        $data=$this->schedule_model->show_ex($id);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','进度详情');
            $this->display('admin/admin_schedule_details.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }
}