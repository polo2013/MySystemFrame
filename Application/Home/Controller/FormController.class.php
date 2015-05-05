<?php
namespace Home\Controller;
use \Home\Controller\CommonController;
class FormController extends CommonController {
	//过滤查询字段
	function _filter(&$map){
		$map['title'] = array('like',"%".$_POST['name']."%");
	}
}
