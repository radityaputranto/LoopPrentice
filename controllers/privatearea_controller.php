<?php
    class PrivateAreaController {
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
            $username = $this->getUsername();
            $teamname = $this->getTeamname();
            require_once('views/privatearea/index.php');
        }

        public function error() {
            require_once('views/privatearea/error.php');
        }

        public function addsales() {
            $username = $this->getUsername();
            $teamname = $this->getTeamname();
            require_once('views/privatearea/sales/index.php');
        }
    }
?>