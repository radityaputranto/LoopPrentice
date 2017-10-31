<?php 
	class blog_single_PrenticeController {
        public function index() {
            
            require_once('views/blog_prentice/single.php');
        }

        public function error() {
            require_once('views/home/error.php');
        }
    }
 ?>