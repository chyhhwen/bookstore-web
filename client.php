<?php
    include "plugins.php";
    switch(p('check'))
    {
        case 1:
            $data = file_get_contents( './lib/sql.json' );
            $db = json_decode( $data, true );
            $u = p('username');
            $p = p('password');
            $pdo = conn($db['db']);
            /*select*/
            $sql = "SELECT * FROM ". $db['dbname'] ."";
	        $stmt = $pdo->prepare($sql);
	        $stmt->execute();
            $check = false;
            $token = "";
	        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	        {
	            $check_u = $row[$db['user_field'][2]];
                $check_p = $row[$db['user_field'][3]];
                if($check_u == $u && $check_p == k($p))
                { 
                    $token = $row[$db['user_field'][1]];
                    $check = true;
                    if($check_u == $db['ad'])
                    {
	                    unset($pdo);
                        setcookie("user",$u);
                        ref([0,'admin.php']);
                    }
                    else
                    {
	                    unset($pdo);
                        setcookie("user",$u);
                        setcookie("token",$token);
                        set_s(['index',true,]);
                        $o = k($GLOBALS["time"]);
                        $db_data = ['',$token,$o,$GLOBALS["time"]];
                        $sql = "INSERT INTO ". $db['dbname4'] ." VALUES (?, ?, ?, ?)";
                        add($db['db'],$db_data,$sql);
                        setcookie("order",$o);
                        ref([0,'index.php']);
                    }
                }
	        }
            unset($pdo);
            if(!$check)
            {   
                ref([0,'index.php?check=0']);
            } 
        break;
        case 2:
            $n = p('name');
            $p = p('password');
            $g = p('gmail');
            $a = p('access');
            $uid = k($GLOBALS["time"]);
            $data = file_get_contents( './lib/sql.json' );
            $db = json_decode( $data, true );
            /*client*/
            $db_data = ['',$uid, $n,k($p),$g,$a,$GLOBALS["time"]];
            $sql = "INSERT INTO ". $db['dbname1'] ." VALUES (?, ?, ?, ?, ?,?,?)";
            add($db['db'],$db_data,$sql);
            /*user*/
            $db_data = ['',$uid, $n,k($p)];
            $sql = "INSERT INTO ". $db['dbname'] ." VALUES (?, ?, ?, ?)";
            add($db['db'],$db_data,$sql);
            setcookie("check","2");
            ref([0,'index.php?check=1']);
        break;    
        default:
            ref([0,'error.php']);
        break;
    }
?>