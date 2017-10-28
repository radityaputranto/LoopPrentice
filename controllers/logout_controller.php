<?php
    class LogoutController {
        public function index() {
            require_once('views/logout/index.php');
        }

        public function error() {
            require_once('views/logout/error.php');
        }

        public function destroy() {
            unset($_SESSION['message_login']);
            header("Location: ?page=home&action=index");
        }
    }
?>