<?php
    include "plugins.php";
    $n = p('name');
    $c = p('card');
    $a = p('access');
    $o = $_COOKIE['order'];
    $u = $_COOKIE['token'];
    $data = file_get_contents( './lib/sql.json' );
    $db = json_decode( $data, true );
    $db_data = ['',$o, $u,$n,$c,$a,$GLOBALS["time"]];
    $sql = "INSERT INTO ". $db['dbname6'] ." VALUES (?, ?, ?, ?, ?, ?, ?)";
    add($db['db'],$db_data,$sql);
    ref([0,'index.php?page=cart&stage=4']);
?>