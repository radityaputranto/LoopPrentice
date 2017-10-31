<?php 
	class blog_PrenticeController {
        public function index() {
            
            require_once('views/blog_prentice/index.php');
        }

        public function error() {
            require_once('views/home/error.php');
        }
    }
 ?>