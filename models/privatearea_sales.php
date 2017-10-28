<?php
    class PrivateAreaSales {
        public static function add($teamname, $msisdn, $username) {
           $db = Db::getInstance();
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           try {
               $query = $db->prepare("CALL sp_tap_table_data_ndu_insertdata (:teamname, :msisdn, :username)");

               $query->BindParam(':teamname', $teamname);
               $query->BindParam(':msisdn', $msisdn);
               $query->BindParam(':username', $username);

               $query->execute();

               $response = array("error" => "false",
                                  "message" => "Hi, Loopers. Data sales kamu berhasil disimpan.");
           } catch(PDOEXception $e) {
               $response = array("error" => "true",
                                  "message" => "Hi, Loopers. Kamu gagal menyimpan data.");
           }

           return $response;
        }
    }
?>