<?php
    include "plugins.php";
    if(@g('del') == "1")
    {
        $data = file_get_contents( './lib/sql.json' );
        $db = json_decode( $data, true );
        $t = g('token');
        $u = $_COOKIE['token'];
        $sql = "DELETE FROM `" . $db['dbname5'] ."` WHERE `bid` = \"". $t ."\" AND `uid` = \"". $u . "\"";
        delete($db['db'],$sql);
        ref([0,'index.php?page=cart&stage=1']);
    }
    else
    { 
        $data = file_get_contents( './lib/sql.json' );
        $db = json_decode( $data, true );
        $t = g('token');
        $o = $_COOKIE["order"];
        $u = $_COOKIE["token"];
        $db_data = ['',$o,$u,$t,1,$GLOBALS["time"]];
        $sql = "INSERT INTO `". $db['dbname5'] ."` VALUES (?, ?, ?, ?, ?, ?)";
        add($db['db'],$db_data,$sql);
        ref([0,'index.php?check=1']);
    }
?>