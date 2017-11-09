<?php 
	class PrivateAreaPostingController {
        public function index() {
            
            require_once('views/privatearea_prentice/posting.php');
        }

        public function add()
        {
        	if($_SERVER['REQUEST_METHOD'] == 'POST')
        	{
        		$kat = $_POST['kategori'];
        		$jud = $_POST['judul'];
        		$kon = $_POST['files'];
        		echo $kat;
        		echo $jud;
        		echo $kon;
        		// require_once('views/privatearea_prentice/hasil.php');
        	}
        }

        public function error() {
            require_once('views/home/error.php');
        }
    }
 ?>