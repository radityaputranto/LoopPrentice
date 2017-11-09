<?php
    class LoginController {
        public function index() {
            require_once('views/login/index.php');
        }

        public function error() {
            require_once('views/login/error.php');
        }

        public function auth() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $result = Login::auth($username, $password);
                // var_dump($result);

                if($result['error']=='true') {
                    header('Content-Type: application/json');
                    echo json_encode($result);
                    $json_login = json_encode($result);
                    $_SESSION['message_login'] = $json_login;
                    header("Location: ?page=home_prentice&action=index");
                } else {
                    header('Content-Type: application/json');
                    echo json_encode($result);
                    $json_login = json_encode($result);
                    $_SESSION['message_login'] = $json_login;
                    header("Location: ?page=privatearea&action=index");
                }
            } else {
                header("Location: ?page=home_prentice&action=index");
            }
        }
    }
?>