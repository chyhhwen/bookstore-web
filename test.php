<?php
    include "plugins.php";
    /*if(@p('y'))
    {
        $db='stonk';
        $data = ['', '1','2','3',$GLOBALS["time"]];
        $dbname = 'data';
        $id = 9;
        $field = ['id','sid','name','price','time'];
	    //$sql = 'INSERT INTO `data` VALUES (?, ?, ?, ?, ?)';
        //add($db,$data,$sql);
        //$sql = "DELETE FROM " . $dbname ." WHERE id = ". $id ."";
        //delete($db,$sql);
        $sql = "SELECT * FROM ". $dbname ."";
        select($db,$sql,$field);
        
    }
    else
    {
        echo'
            <form action="" method="post">
            <input type="submit" name="y">
            </form>
        ';
    }*/
    $data = file_get_contents( './lib/sql.json' );
    $db = json_decode( $data, true );
    $sql = "SELECT * FROM `". $db['dbname2'] ."`";
    $rand = random(size($db['db'],$sql));
    //v($rand);
    //echo k('Spare');
?>