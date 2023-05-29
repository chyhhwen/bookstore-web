<?php
    include "plugins.php";
    $data = file_get_contents( './lib/sql.json' );
    $db = json_decode( $data, true );
    $n = p('name');
    $pr = p('price');
    $a = p('amount');
    $l = p('language');
    $w = p('writer');
    $pu = p('publisher');
    $r = p('relation');
    $b = k($GLOBALS["time"]);
    /*bool*/
    $db_data = ['',$b, $n,$pr,$a,$l,$GLOBALS["time"]];
    $sql = "INSERT INTO ". $db['dbname2'] ." VALUES (?, ?, ?, ?, ?, ?, ?)";
    add($db['db'],$db_data,$sql);
    /*introduce*/
    $db_data = ['',$b, $w,$pu,$r,$GLOBALS["time"]];
    $sql = "INSERT INTO ". $db['dbname3'] ." VALUES (?, ?, ?, ?, ?, ?)";
    add($db['db'],$db_data,$sql);
    ref([0,'index.php']);
?>