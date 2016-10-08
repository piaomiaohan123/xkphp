<?php


/**
 * 框架的核心文件
 * author  hades
 * 2016-10-08
 */
class XKPHP {




	public function __construct(){
	     

	}

	public function  DefinePath(){

		define('ROOT_PATH',dirname(dirname(__FILE__)));
		define('PUBLIC_PATH',ROOT_PATH.DIRECTORY_SEPARATOR.'Public');
		define('XKPHP_PATH',ROOT_PATH.DIRECTORY_SEPARATOR.'XKPHP');
		define('Common_PATH',XKPHP_PATH.DIRECTORY_SEPARATOR.'Common');
		define('Conf_PATH',XKPHP_PATH.DIRECTORY_SEPARATOR.'Conf');
		define('Lang_PATH',XKPHP_PATH.DIRECTORY_SEPARATOR.'Lang');
		define('Library_PATH',XKPHP_PATH.DIRECTORY_SEPARATOR.'Library');
		define('Mode_PATH',XKPHP_PATH.DIRECTORY_SEPARATOR.'Mode');
		define('Tpl_PATH',XKPHP_PATH.DIRECTORY_SEPARATOR.'Tpl');
		
	}
}

$XKPHP=new XKPHP();
$XKPHP->DefinePath();


