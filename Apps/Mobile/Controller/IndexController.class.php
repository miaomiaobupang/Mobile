<?php
namespace Mobile\Controller;
use Think\Controller;
// +----------------------------------------------------------------------
// | 超级医生WEB项目
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://hopenoah.com All rights reserved.
// +----------------------------------------------------------------------
// | 词条控制器
// +----------------------------------------------------------------------
// | Author: Davin <yulong@hopenoah.com>
// +----------------------------------------------------------------------
class IndexController extends Controller{
	// private $hope_disease_type;

	/**
	 * 构造方法
	 */
	public function __construct() {
		// $this->hope_disease_type = D('hope_disease_type');
		parent::__construct();
		header("Content-Type:text/html;charset=UTF-8");
	}
	public function index(){
		$this->display();
	}
	
	//专家频道页
	public function expertIndex(){
		$this->display();
	}
	
	//专家列表页
	public function expertList(){
		$this->display();
	}
	
	//专家详情页
	public function expertDetail(){
		$this->display();
	}
	
	//医院频道页
	public function hospitalIndex(){
		$this->display();
	}
	
	//医院列表页
	public function hospitalList(){
		$this->display();
	}
	//医院列表页
	public function hospitalDetail(){
		$this->display();
	}
	//疾病频道页
	public function diseaseIndex(){
		$this->display();
	}
	//问答频道页
	public function questionIndex(){
		$this->display();
	}
	//问答列表页
	public function questionList(){
		// $diseaseArr = $this->hope_disease_type->where('level=1')->select();
		dump($diseaseArr);
		$this->display();
	}
	
}