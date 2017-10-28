<?php
    class LogoutController {
        public function index() {
            require_once('views/logout_prentice/index.php');
        }

        public function error() {
            require_once('views/logout_prentice/error.php');
        }

        public function destroy() {
            unset($_SESSION['message_login']);
            header("Location: ?page=home_prentice&action=index");
        }
    }
?>