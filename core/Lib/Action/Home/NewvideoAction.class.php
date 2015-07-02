<?php
class NewvideoAction extends HomeAction{
    public function index(){
		$this->lists();
	}
    public function lists(){
		$this->assign('webtitle','最近更新'.'-'.C('web_name'));
		$this->assign('navtitle','<a href="'.C('web_path').'">首页</a> &gt; <span>最近更新</span>');
		$this->display('newvideo');
	}			
}
?>