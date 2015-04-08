<?php 
require_once('cmsBase.php');
class CmsApplication extends CmsBase {
	
	function run() {
		// di sini akan dibuat kode,
		// untuk mengatur seluruh proses dalam cmsApplication.
		// Fungsi ini akan dipanggil dari modul TemplateFunction		
		if(isset($_REQUEST['task'])){
			$task=$_REQUEST['task'];
			switch($task){
				case 'addcontent':$app->addcontent();break;
				case 'anyothertask':$app->anyothertask();break;
				default: $app->display();break;
			}    
		}else{
			$this->display();
		}
	}
	
	function addcontent ()
	{
		echo 'Di sini akan dibuat fungsi menambah konten';
	}
	
	function display ()
	{
		echo 'Di sini akan dibuat fungsi untuk menampilkan konten';
	}
	
	function anyothertask ()
	{
		echo 'Di sini akan ditulis fungsi yang lainnya';
	}
	
	function show()
	{
		require_once($this->getCurrentTemplatePath().'template.php');
	}
	
}