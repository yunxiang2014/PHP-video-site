<?php
/**
 * @name 升级模块
 */
class UpAction extends Action{
    // 构造函数	
    public function _initialize(){
		header("Content-Type:text/html; charset=utf-8");
		$lock = RUNTIME_PATH.'Install/ziyuan5_1_0.lock';
		if (is_file($lock)) {
			$this->assign("jumpUrl",'index.php');
			$this->error('已经升级过GXCMS-ziyuan5迅雷1.0版,不需要再次升级!');
		}
    }
	
    public function index(){
		$db_config = array('dbms'=>'mysql','username'=>C('db_user'),'password'=>C('db_pwd'),'hostname'=>C('db_host'),'hostport'=>C('db_port'),'database'=>C('db_name'));	
		$sql = read_file('./views/Install/up_ziyuan5_1_0.sql');
		$sql = str_replace('gx_',c('db_prefix'),$sql);
		$this->batQuery($sql,$db_config);
		touch(RUNTIME_PATH.'Install/ziyuan5_1_0.lock');
		@unlink('./temp/~app.php');
		@unlink('./temp/~runtime.php');
		$this->assign("jumpUrl",'index.php');
		$this->success('恭喜您！GXCMS-ziyuan5迅雷1.0升级完成！');
    }
	
	public function batQuery($sql,$db_config){
	    // 连接数据库
		//import('Think.Db.Driver.Dbmysql');
		require THINK_PATH.'/Lib/Think/Db/Driver/DbMysql.class.php';
		$db = new Dbmysql($db_config);
		$sql = str_replace("\r\n", "\n", $sql); 
		$ret = array(); 
		$num = 0; 
		foreach(explode(";\n", trim($sql)) as $query){
			$queries = explode("\n", trim($query)); 
			foreach($queries as $query) { 
				$ret[$num] .= $query[0] == '#' || $query[0].$query[1] == '--' ? '' : $query; 
			} $num++; 
		} 
		unset($sql); 
		foreach($ret as $query) {
			if(trim($query)) { 
			    $db->query($query); 
			} 
		} 
		return true; 
	}								
}
?>