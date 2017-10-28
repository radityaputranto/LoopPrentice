<?php
	class PrivateArea {
		public $username;
		public $teamname;

		public function __construct() {
			if(isset($_SESSION['message_login'])) {
		        $message_login = $_SESSION['message_login'];
		    } else {
                header("Location: ?page=home_prentice&action=index");
		    }

		    $mlogin = json_decode($message_login);

		    $_SESSION['user_name'] = $mlogin->data->user_name;
		    $_SESSION['team_name'] = $mlogin->data->team_name;

		    $this->username = $_SESSION['user_name'];
		    $this->teamname = $_SESSION['team_name'];
		}

		public function getUsername() {
			return $this->username;
		}

		public function getTeamname() {
			return $this->teamname;
		}
	}
?>