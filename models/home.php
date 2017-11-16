<?php
    class Home {
        public static function get_institution() {
          $list = [];
          $db = Db::getInstance();
          $req = $db->query('call sp_tap_institution');

          foreach($req->fetchAll(PDO::FETCH_OBJ) as $data) {
             $list[] = $data;
          }

          return $list;
        }

        public static function get_faculty() {
          $list = [];
          $db = Db::getInstance();
         /* $req = $db->query('call sp_tap_institution_faculty');
*/
        /*  foreach($req->fetchAll(PDO::FETCH_OBJ) as $data) {
             $list[] = $data;
          }*/

          return $list;
        }

        public static function get_city() {
          $list = [];
          $db = Db::getInstance();
          $req = $db->query('call sp_tap_city');

          foreach($req->fetchAll(PDO::FETCH_OBJ) as $data) {
             $list[] = $data;
          }

          return $list;
        }

        public static function get_apprentice($teritorial) {
          $list = [];
          $db = Db::getInstance();
          $req = $db->prepare('call sp_tap_user_selectdata(:teritorial)');
          $req->execute(array(':teritorial' => $teritorial));

          foreach($req->fetchAll(PDO::FETCH_OBJ) as $data) {
             $list[] = $data;
          }

          return $list;
        }

        public static function get_total_apprentice($teritorial) {
          $list = [];
          $db = Db::getInstance();
          $req = $db->prepare('call sp_tap_user_total_apprentice(:teritorial)');
          $req->execute(array(':teritorial' => $teritorial));
          $total = $req->fetch(PDO::FETCH_OBJ);

          return $total;
        }

        public static function find($id) {
          $db = Db::getInstance();
          $id = intval($id);
          $req = $db->prepare('SELECT * FROM PERF_INSTITUTION_YOUTH WHERE npsn = :id');
          $req->execute(array('id' => $id));
          $post = $req->fetch(PDO::FETCH_OBJ);
          return $post;
        }
    }
?>