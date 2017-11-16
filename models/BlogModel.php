<?php
class BlogModel {

  public static function getBlog($username)
  {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query("SELECT * FROM PERF_POSTING WHERE post_author = '".$username."' ORDER BY post_date DESC");

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

  public static function addBlog($data1)
  {
    $data = $data1;
    $db = Db::getInstance();
    $sql = $db->query("INSERT INTO PERF_POSTING VALUES ('',
      '".$data['username']."',
      '".date('Y-m-d H:i:s')."',
      '".$data['judul']."',
      '".$data['konten']."',
      '".$data['kategori']."',
      '".$data['tag']."',
      'confirm',
      '".$data['cover']."'
    )");

    if($sql)
      return "SUKSES";
    else
      return "ERROR";
  }

  public static function editBlog($idblog, $data, $foto)
  {
    $db = Db::getInstance();
    if($foto == 1){
      $sql = $db->query("UPDATE PERF_POSTING SET 
        post_title='".$data['judul']."',
        post_date='".date('Y-m-d H:i:s')."', 
        post_content='".$data['konten']."', 
        post_kategori='".$data['kategori']."', 
        post_tag='".$data['tag']."', 
        post_cover='".$data['cover']."' 
        WHERE id_posting = '".$idblog."'");
    }else{
      $sql = $db->query("UPDATE PERF_POSTING SET 
        post_title='".$data['judul']."',
        post_date='".date('Y-m-d H:i:s')."', 
        post_content='".$data['konten']."', 
        post_kategori='".$data['kategori']."', 
        post_tag='".$data['tag']."'
        WHERE id_posting = '".$idblog."'");
    }

    if($sql)
      return "SUKSES";
    else
      return "ERROR";
  }

  public static function deleteBlog($idblog)
  {
    $db = Db::getInstance();
    $sql = $db->query("DELETE FROM PERF_POSTING WHERE id_posting = '".$idblog."'");
    if($sql)
      return "SUKSES";
    else 
      return "ERROR";
  }

}
