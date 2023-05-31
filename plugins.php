<?php
date_default_timezone_set('Asia/Taipei');
session_start();
$time = date('Y-m-d H:i:s');

function conn($dbname)
{
	try 
	{
		$pdo = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8",'root','');
	} 
	catch (PDOException $e) 
	{
		throw new PDOException($e->getMessage());
	}
	return $pdo;
}
function add($dbname,$data,$sql)
{
	$pdo = conn($dbname);
	$sth = $pdo->prepare($sql);
	try 
	{
    	if ($sth->execute($data)) 
		{
        	
    	} 
		else 
		{
			ref([0,'error.php']);
    	}
	} 
	catch (PDOException $e) 
	{
    	echo 'error';
	}
	unset($pdo);
}

function delete($dbname,$sql)
{
	$pdo = conn($dbname);
	$sth = $pdo->prepare($sql);
	try 
	{
    	if ($sth->execute()) 
		{
			
    	} 
		else 
		{
        	echo 'error';
    	}
	} 
	catch (PDOException $e) 
	{
    	echo 'error';
	}
	unset($pdo);
}

function fix($dbname,$data,$sql)
{
	$pdo = conn($dbname);
	$sth = $pdo->prepare($sql);
	try 
	{
    	if ($sth->execute($data)) 
		{
        	echo 'curret';
    	} 
		else 
		{
        	echo 'error';
    	}
	} 
	catch (PDOException $e) 
	{
    	echo 'error';
	}
	unset($pdo);
}

function select($dbname,$sql,$field)
{
	$pdo = conn($dbname);
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$array = array(array());
	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$i = 0;
		for($j=0;$j < count($field);$j++)
		{
			$array[$i][$j] = $row[$field[$i]];
			$i += 1;
		}
	}
	unset($pdo);
}
function size($dbname,$sql)
{
	$pdo = conn($dbname);
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$math = 0;
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$math += 1;
	}
	return $math;
}
function random($num)
{
	for($i=0;$i<$num;$i++)
	{
		$n[$i] = $i;
	}
	for($i = 0;$i<$num;$i++)
	{
		$rand = mt_rand($i,$num-1);
		if($n[$i] == $i)
		{
			$n[$i] = $n[$rand];
			$n[$rand] = $i;
		}
	}
	return $n;
}
function ref($a)
{
	header('refresh:'.$a[0].';url="'.$a[1].'"');
}

function p($a){return $_POST[$a];}
function g($a){return $_GET[$a];}
function s($a){return $_SESSION[$a];}
function set_s($a){$_SESSION[$a[0]]=$a[1];}
function f($a){return $_FILES[$a];}
function v($a){return var_dump($a);}
function k($a){return md5($a);}
function e($a){return explode(':',$a);}