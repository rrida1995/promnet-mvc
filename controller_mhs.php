<?php
include_once ("model_mhs.php");

class controller_mhs {	
	
	var $mymodel;
	
    function __construct(){
		$this->mymodel =new model_mhs();		
		$this->index();
	}		
	
	function index(){
		
		if (isset($_GET['arg_menu'])){
			$arg_menu=$_GET['arg_menu'];
		} else {
			$arg_menu="";
		}

		switch ($arg_menu) {
			case 'table':
				$data = $this->mymodel->getAll();
				include_once ("view_mhs_tables.php");
				break;

			case 'insert':
				include_once ("view_mhs_insert.php");
				break;

			case 'insert_respon':
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$kelas = $_POST['kelas'];

				$this->mymodel->insert($nim,$nama,$kelas);
				header("location:index_mhs.php");
				break;
			
			default:
				$data = $this->mymodel->getAll();
				include_once("view_mhs_list.php");
				break;
		}
	}
}

?>