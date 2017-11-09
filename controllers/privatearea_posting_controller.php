<?php 
	class PrivateAreaPostingController {
        public $username;
        public $teamname;

        public function __construct() {
            $PrivateArea = new PrivateArea();
            $this->username = $PrivateArea->getUsername();
            $this->teamname = $PrivateArea->getTeamname();
        }

        public function getUsername() {
            return $this->username;
        }

        public function getTeamname() {
            return $this->teamname;
        }

        public function index() {
            
            require_once('views/privatearea_prentice/posting.php');
        }

        public function addpost()
        {
        	if($_SERVER['REQUEST_METHOD'] == 'POST')
        	{
                $usr = $this->getUsername();
                $jud = $_POST['judul'];
                $tag = $_POST['tag'];
                $kat = $_POST['kategori'];
        		$cov = date('YmdHis').str_replace(" ", "_", $_FILES['cover']['name']);
        		$kon = htmlentities($_POST['konten']);
                $alldata = array(
                    'username'=>$usr, 'judul'=>$jud, 
                    'konten'=>$kon, 'tag'=>$tag, 
                    'kategori'=>$kat, 'cover'=>$cover
                );

                move_uploaded_file($_FILES['cover']['tmp_name'], "libs/img/".$cov);

                $query = BlogModel::addBlog($alldata);
                if($query == 'SUKSES'){
                    //sukses
                    header('location: ?page=privatearea_prentice&action=index');
                } 
                else {
                    //error
                    header('location: ?page=privatearea_posting&action=index');
                }
        	}
        }

        public function viewpost()
        {
            $idblog = $_GET['idblog'];
            $data = BlogModel::getOneBlog($idblog);
            require_once('views/privatearea_prentice/viewpost.php');
        }

        public function editpost()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $idblog = $_POST['idblog'];
                if($_FILES['cover']['name'] == null || $_FILES['cover']['name'] == ""){
                    $data = array(
                        'judul'=>$_POST['judul'],
                        'tag'=>$_POST['tag'],
                        'kategori'=>$_POST['kategori'],
                        'konten'=>htmlentities($_POST['konten'])
                    );
                    $nofoto = 0;
                } else {
                    $cov = date('YmdHis').str_replace(" ", "_", $_FILES['cover']['name']);
                    $data = array(
                        'judul'=>$_POST['judul'],
                        'tag'=>$_POST['tag'],
                        'kategori'=>$_POST['kategori'],
                        'cover'=>$cov,
                        'konten'=>htmlentities($_POST['konten'])
                    );
                    move_uploaded_file($_FILES['cover']['tmp_name'], "libs/img/".$cov);
                    $nofoto = 1;
                }

                $query = BlogModel::editBlog($idblog, $data, $nofoto);
                if($query == 'SUKSES'){
                    header('location: ?page=privatearea_prentice&action=index');
                }else{
                    header('location: ?page=privatearea_posting&action=index');
                }
            }
        }

        public function deletepost()
        {
            if($_SERVER['REQUEST_METHOD'] == 'GET') 
            {
                $idblog = $_GET['idblog'];
                // echo $idblog;
                $query = BlogModel::deleteBlog($idblog);
                if($query == "SUKSES")
                    header('location: ?page=privatearea_prentice&action=index');
                else
                    header('location: ?page=privatearea_posting&action=index');
            }
        }

        public function error() {
            require_once('views/home/error.php');
        }
    }
 ?>