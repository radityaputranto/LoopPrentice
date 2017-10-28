<?php
    class Login {
        public static function auth($username, $password) {
            
           $db = Db::getInstance();
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           try {
               $query = $db->prepare("CALL sp_tap_user_auth (:username, :password)");

               $query->BindParam(':username', $username);
               $query->BindParam(':password', $password);

               $query->execute();
               $result = $query->fetch(PDO::FETCH_ASSOC);

               if($result) {
                  $data = array("user_name" => $result['user_name'],
                                "team_name" => $result['team_name']);
                  $response = array("error" => "false",
                                  "data" => $data,
                                  "message" => "Hi, Loopers. Tingkatkan penjualanmu, dapatkan reward menarik dari kami.");
               } else {
                  $response = array("error" => "true",
                                  "message" => "Hi, Loopers. Username atau Password kamu salah.");
               }
               
           } catch(PDOEXception $e) {
               $response = array("error" => "true",
                                  "message" => "Hi, Loopers. Username atau Password kamu salah.");
           }

           return $response;
        }
    }
?>