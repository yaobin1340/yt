<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/11
 * Time: 21:31
 */
class Unit_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }
    function add_unit()
    {
        echo $this->input->post('');
    }
}