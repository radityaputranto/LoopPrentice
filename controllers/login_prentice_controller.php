<?php
    class LoginPrenticeController {
        public function index() {
            header("Location: ?page=home_prentice&action=index");
        }

        public function error() {
            header("Location: ?page=home_prentice&action=index");
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
                    header("Location: ?page=privatearea_prentice&action=index");
                }
            } else {
                header("Location: ?page=home_prentice&action=index");
            }
        }
    }
?>