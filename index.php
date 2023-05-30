<?php
    include "plugins.php";
    $p=0;
    if(@s('index'))
    {
        switch(@g('p'))
        {
            case 'yee':

                break;
            default:
                echo 
                '
                <html>
                <head>
                    <link rel="stylesheet" href="./css/index.css">
                    <script type=\'text/javascript\' src=\'./js/index.js\'></script>
                    <script type=\'text/javascript\' src=\'./js/client.js\'></script> 
                    <meta charset="UTF-8">
                    <title>家佑好皮書店</title>
                </head>
                <body>
                    <nav>
                        <span style=padding-right:70%;>'. $_COOKIE["user"] .'</span>
                        <a href="javascript:reset(\'#test\')">首頁</a>
                        <a href="javascript:register_view(\'#test\')">註冊</a>
                        <a href="./cart.html">購物車</a>
                    </nav>
                    <div id="test"></div>
                    </div>
                    <div id="news">
                        <img src="./pic/cat.jpg">
                    </div>';
                    echo'<div id ="view_box">';
                    for($i=0;$i<3;$i++)
                    {
                        $title = ["書籍排行榜","中文書籍","英文書籍"];
                        echo'
                        <div id=view>
                        <div class=title>
                        <h2>'. $title[$i] .'</h2></div>
                        <div id=books>
                        ';
                        for($j=0;$j<8;$j++)
                        {
                            echo'
                            <div class=book>
                            <div class=pic></div>
                            <div class=price>$null</div>
                            <div class=name>NULL</div>
                            </div>
                            ';
                        }
                        echo'</div></div>';
                    }
                    echo'</div>';
                    echo'<footer>
                        <span>
                            <a href="#">客後服務</a>|  
                            <a href="#">連絡我們 </a>| 
                            <a href="#">隱私權政策 </a>| 
                            <a href="#">服務條款</a>
                        </span><br>
                        <span>家佑真的好皮訊圖書有限公司</span><br>
                        <span>營業人統一編號 123456789</span>
                    </footer>
                </body>
                </html>
                ';
                break;
        }
    }
    else
    {
        switch(@g('page'))
        {
            case "chinese":
                echo
                '
                    <html>
                    <head>
                        <link rel="stylesheet" href="./css/shop.css"> 
                        <meta charset="UTF-8">
                        <title>家佑好皮書店</title>
                    </head>
                    <body>
                    <nav>
                        <span style="padding-right:65vw;">好皮</span>
                        <a href="index.php">首頁</a>
                        <a href="javascript:login_view(\'#test\')">登入</a>
                        <a href="javascript:register_view(\'#test\')">註冊</a>
                        <a href="javascript:alert(\'請先登入\')">購物車</a>
                    </nav>
                ';      
                $data = file_get_contents( './lib/sql.json' );
                $db = json_decode( $data, true );
                $pdo = conn($db['db']);
                $sql = "SELECT * FROM `". $db['dbname2'] ."` WHERE `language` = \"". $db['lan'][0] ."\"";
	            $stmt = $pdo->prepare($sql);
	            $stmt->execute();
                $check = false;
                $size = 0;
                $i = 0;
                $j = 0;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	            {
                    if($j % 7 == 0)
                    {
                        echo'<div class="view">';
                    }
                    $url = $db['url'] . $db['lan'][0] . "/" . k($row[$db['book_field'][2]]) . $db['file'];
                    echo
                    '
                        <div class="book">
                            <div class="pic">
                                <img src="'. $url .'">
                            </div>
                            <div class="form">
                                <h2>'. $row[$db['book_field'][3]] .'</h2>
                                <a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=0"><h2>'. $row[$db['book_field'][2]] .'</h2></a>
                            </div>
                        </div>
                    ';
                    $j += 1;
                    if($j % 7 == 0)
                    {
                        echo'</div>';
                        $j = 0;
                        $i += 1;
                    }
	            }
                unset($pdo);
                echo
                '         
                    <footer>
                        <span>
                            <a href="#">客後服務</a>|  
                            <a href="#">連絡我們 </a>| 
                            <a href="#">隱私權政策 </a>| 
                            <a href="#">服務條款</a>
                        </span><br>
                        <span>家佑真的好皮訊圖書有限公司</span><br>
                        <span>營業人統一編號 123456789</span>
                    </footer>
                    </body>
                    </html>
                ';
            break;    
            case "english":
                echo
                '
                    <html>
                    <head>
                        <link rel="stylesheet" href="./css/shop.css"> 
                        <meta charset="UTF-8">
                        <title>家佑好皮書店</title>
                    </head>
                    <body>
                    <nav>
                        <span style="padding-right:65vw;">好皮</span>
                        <a href="index.php">首頁</a>
                        <a href="javascript:login_view(\'#test\')">登入</a>
                        <a href="javascript:register_view(\'#test\')">註冊</a>
                        <a href="javascript:alert(\'請先登入\')">購物車</a>
                    </nav>
                ';      
                $data = file_get_contents( './lib/sql.json' );
                $db = json_decode( $data, true );
                $pdo = conn($db['db']);
                $sql = "SELECT * FROM `". $db['dbname2'] ."` WHERE `language` = \"". $db['lan'][1] ."\"";
	            $stmt = $pdo->prepare($sql);
	            $stmt->execute();
                $check = false;
                $size = 0;
                $i = 0;
                $j = 0;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	            {
                    if($j % 7 == 0)
                    {
                        echo'<div class="view">';
                    }
                    $url = $db['url'] . $db['lan'][1] . "/" . k($row[$db['book_field'][2]]) . $db['file'];
                    echo
                    '
                        <div class="book">
                            <div class="pic">
                                <img src="'. $url .'">
                            </div>
                            <div class="form">
                                <h2>'. $row[$db['book_field'][3]] .'</h2>
                                <a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=1"><h2>'. $row[$db['book_field'][2]] .'</h2></a>
                            </div>
                        </div>
                    ';
                    $j += 1;
                    if($j % 7 == 0)
                    {
                        echo'</div>';
                        $j = 0;
                        $i += 1;
                    }
	            }
                unset($pdo);
                echo
                '         
                    <footer>
                        <span>
                            <a href="#">客後服務</a>|  
                            <a href="#">連絡我們 </a>| 
                            <a href="#">隱私權政策 </a>| 
                            <a href="#">服務條款</a>
                        </span><br>
                        <span>家佑真的好皮訊圖書有限公司</span><br>
                        <span>營業人統一編號 123456789</span>
                    </footer>
                    </body>
                    </html>
                ';
            break; 
            case "view":
                $t = g('token');
                $l = g('lan');
                echo
                '
                    <html>
                    <head>
                        <link rel="stylesheet" href="./css/index.css"> 
                        <meta charset="UTF-8">
                        <title>家佑好皮書店</title>
                    </head>
                    <body>
                        <nav>
                            <span style="padding-right:65vw;">好皮</span>
                            <a href="index.php">首頁</a>
                            <a href="javascript:login_view(\'#test\')">登入</a>
                            <a href="javascript:register_view(\'#test\')">註冊</a>
                            <a href="javascript:alert(\'請先登入\')">購物車</a>
                        </nav>
                ';
                /*intro*/
                $data = file_get_contents( './lib/sql.json' );
                $db = json_decode( $data, true );
                $pdo = conn($db['db']);
                $sql = "SELECT * FROM `". $db['dbname3'] ."` WHERE `bid` = \"". $t ."\"";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $writer = "";
                $publisher = "";
                $relation = "";
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    if($row[$db['intro_field'][1]] == $t)
                    {
                        $writer = $row[$db['intro_field'][2]];
                        $publisher = $row[$db['intro_field'][3]];
                        $relation = $row[$db['intro_field'][4]];
                    }
                }
                unset($pdo); 
                /*book*/
                $pdo = conn($db['db']);
                $sql = "SELECT * FROM `". $db['dbname2'] ."` WHERE `language` = \"". $db['lan'][$l] ."\"";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $url = "";
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    if($row[$db['book_field'][1]] == $t)
                    {
                        $url = $db['url'] . $db['lan'][$l] . "/" . k($row[$db['book_field'][2]]) . $db['file'];
                        echo'            
                            <div class="view_main">
                                <div class="view_title">
                                    <h1>'. $row[$db['book_field'][2]] .'</h1>
                                </div>
                                <div class="view_body">
                                    <div class="pic">
                                        <img src="'. $url .'">
                                    </div>
                                    <div class="text">
                                        <h2>作者:'. $writer .'</h2>
                                        <h2>出版商:'. $publisher .'</h2>
                                        <h2>售價:'. $row[$db['book_field'][3]] .'</h2>
                                        <h2>定價:'. round(intval($row[$db['book_field'][3]]) * 0.8) .'</h2>
                                        <h2>語言:'. $row[$db['book_field'][5]] .'</h2>
                                        <h2>剩餘:'. $row[$db['book_field'][4]] .'</h2>
                                        <input type="submit" value="加入購物車">
                                    </div>
                                </div>
                            </div>
                        ';
                        break;
                    }
                }
                unset($pdo);    
                 echo
                 '  
                    <div class="view_main">
                        <div class="view_title">
                            <h1>敘述</h1>
                        </div>
                        <div class="view_body">
                            <div class="relation">
                                <h2>'. $relation .'</h2>
                            </div>
                        </div>
                    </div>
                ';
                echo
                '            
                    <footer>
                    <span>
                        <a href="#">客後服務</a>|  
                        <a href="#">連絡我們 </a>| 
                        <a href="#">隱私權政策 </a>| 
                        <a href="#">服務條款</a>
                        </span><br>
                        <span>家佑真的好皮訊圖書有限公司</span><br>
                        <span>營業人統一編號 123456789</span>
                    </footer>
                    </body>
                    </html>
                ';
            break;
            default:
                echo 
                '
                <html>
                <head>
                    <link rel="stylesheet" href="./css/index.css">
                    <script type=\'text/javascript\' src=\'./js/client.js\'></script> 
                    <meta charset="UTF-8">
                    <title>家佑好皮書店</title>
                </head>
                <body>
                    <nav>
                        <span>好皮</span>
                        <a href="index.php">首頁</a>
                        <a href="javascript:login_view(\'#test\')">登入</a>
                        <a href="javascript:register_view(\'#test\')">註冊</a>
                        <a href="javascript:alert(\'請先登入\')">購物車</a>
                    </nav>
                    <div id="test"></div>
                    </div>
                    <div id="news">
                        <img src="./pic/cat.jpg">
                    </div>';
                echo'<div id ="view_box">';
                for($i=0;$i<3;$i++)
                {
                    $title = ["書籍排行榜","中文書籍","英文書籍"];
                    $language = ["chinese","english"];
                    $data = file_get_contents( './lib/sql.json' );
                    $db = json_decode( $data, true );
                    $sql="";
                    switch($i)
                    {
                        case 0:
                            $sql = "SELECT * FROM `". $db['dbname2'] ."`";
                        break;   
                        case 1:
                            $sql = "SELECT * FROM `". $db['dbname2'] ."` WHERE `language` = \"". $db['lan'][0] ."\"";
                        break;     
                        case 2:
                            $sql = "SELECT * FROM `". $db['dbname2'] ."` WHERE `language` = \"". $db['lan'][1] ."\"";
                        break;        
                    }
                    if($i==0)
                    {
                        echo
                        '
                            <div id=view>
                            <div class=title>
                            <h2 style=color:black;>'. $title[$i] .'</h2></div>
                            <div id=books>
                        ';
                    }
                    else
                    {
                        echo
                        '
                            <div id=view>
                            <div class=title>
                            <a href="index.php?page='. $language[$i-1] .'"><h2>'. $title[$i] .'</h2></div></a>
                            <div id=books>
                        ';
                    }
                    $pdo = conn($db['db']);
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $j = 0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        if($j == 8)
                        {
                            break;
                        }
                        else
                        {
                            $url = $db['url'] . $db['view_lan'][$i] . "/" . k($row[$db['book_field'][2]]) . $db['file'];
                            echo
                            '
                                <div class=book>
                                <div class=pic>
                                    <img src="'. $url .'">
                                </div>
                                <div class=price>$'. $row[$db['book_field'][3]] .'</div>
                                <div class=name>
                            ';
                            switch($i)
                            {
                                case 0:
                                    echo'<a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=0">';
                                break;   
                                case 1:
                                    echo'<a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=0">';
                                break;     
                                case 2:
                                    echo'<a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=1">';
                                break;        
                            }
                            echo
                            '    
                                <h3>'. $row[$db['book_field'][2]] .'<h3>
                                </div>
                                </div>
                            ';
                        }
                        $j += 1;
                    }      
                    echo'</div></div>';
                    unset($pdo);
                }
                echo
                '
                    </div>
                    <footer>
                        <span>
                            <a href="#">客後服務</a>|  
                            <a href="#">連絡我們 </a>| 
                            <a href="#">隱私權政策 </a>| 
                            <a href="#">服務條款</a>
                        </span><br>
                        <span>家佑真的好皮訊圖書有限公司</span><br>
                        <span>營業人統一編號 123456789</span>
                    </footer>  
                    </body>
                ';
                if(@g('check') == "0")
                {
                    echo'<script>alert(\'帳號密碼錯誤\'); </script>';
                }
                if(@g('check') == "1")
                {
                    echo'<script>alert(\'註冊成功\');</script>';
                }
                echo'</html>';
            break;
        }
    }   
?>