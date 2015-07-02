<?php
class AllvideoAction extends HomeAction{
    public function index(){
		$this->lists();
	}
    public function lists(){
		$this->assign('webtitle','全部影片'.'-'.C('web_name'));
		$this->assign('navtitle','<a href="'.C('web_path').'">首页</a> &gt; <span>全部影片</span>');
		$this->display('allvideo');
	}			
}
?>