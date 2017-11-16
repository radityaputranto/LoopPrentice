<?php
class BlogModelFront {

  public static function getBlog()
  {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query("SELECT * FROM PERF_POSTING ORDER BY post_date DESC LIMIT 0,5");

    foreach($req->fetchAll(PDO::FETCH_OBJ) as $data) {
       $list[] = $data;
    }

    return $list;
  }

  public static function getOneBlog($idnya)
  {
    $db = Db::getInstance();
    $dt = $db->query("SELECT * FROM PERF_POSTING WHERE id_posting = '".$idnya."'")->fetchAll(PDO::FETCH_OBJ);

    return $dt;
  }

}
