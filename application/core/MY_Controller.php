<?php
if (! defined('BASEPATH'))
exit('No direct script access allowed');
/**
 * 扩展业务控制器
 *
 * @package		app
 * @subpackage	Libraries
 * @category	controller
 * @author      yaobin<645894453@qq.com>
 *
 */
class MY_Controller extends CI_Controller
{
	public function __construct ()
	{
		parent::__construct();
		ini_set('date.timezone','Asia/Shanghai');
		$this->cismarty->assign('base_url',base_url());//url路径
	}

	//重载smarty方法assign
	public function assign($key,$val) {
		$this->cismarty->assign($key,$val);
	}

	//重载smarty方法display
	public function display($html) {
		$this->cismarty->display($html);
	}
	
//	//重载smarty方法show
//	public function show($html) {
//		$this->cismarty->show($html);
//	}


}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */