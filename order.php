<?php
    include "plugins.php";
    $data = file_get_contents( './lib/sql.json' );
    $db = json_decode( $data, true );
    $t = g('token');
    $o = $_COOKIE["order"];
    $u = $_COOKIE["token"];
    $db_data = ['',$o,$u,$t,1,$GLOBALS["time"]];
    $sql = "INSERT INTO `". $db['dbname5'] ."` VALUES (?, ?, ?, ?, ?, ?)";
    add($db['db'],$db_data,$sql);
    ref([0,'index.php?check=1']);
?>