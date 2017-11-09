<?php
class BlogModel {

  public static function getBlog($username)
  {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM PERF_POSTING WHERE post_author = "'.$username.'"');

    foreach($req->fetchAll(PDO::FETCH_OBJ) as $data) {
       $list[] = $data;
    }

    return $list;
  }

}
