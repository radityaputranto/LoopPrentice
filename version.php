<?php
    require_once('db/connection.php');

    $list = [];
    $db = Db::getInstance();

    $req = $db->query('call sp_tap_city');
    foreach($req->fetchAll(PDO::FETCH_OBJ) as $data) {
        $list[] = $data;
    }
    var_dump($req);
    echo json_encode($list);
?>