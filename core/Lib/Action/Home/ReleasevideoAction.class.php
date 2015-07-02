<?php
class ReleasevideoAction extends HomeAction{
    public function index(){
		$this->lists();
	}
    public function lists(){
		$this->assign('webtitle','新片上映'.'-'.C('web_name'));
		$this->assign('navtitle','<a href="'.C('web_path').'">首页</a> &gt; <span>新片上映</span>');
		$this->display('releasevideo');
	}			
}
?>