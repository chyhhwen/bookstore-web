<?php
    include "plugins.php";
    $p=0;
    if(@s('index'))
    {
        switch(@g('page'))
        {
            case "cart":
                echo
                '
                    <html>
                    <head>
                        <link rel="stylesheet" href="./css/cart.css">
                        <script type=\'text/javascript\' src=\'./js/cart.js\'></script> 
                        <meta charset="UTF-8">
                        <title>家佑好皮書店</title>
                    </head>
                    <body>
                    <nav>
                        <span style="padding-right:75vw;">'. $_COOKIE["user"] .'</span>
                        <a href="index.php">首頁</a>
                    </nav>
                    <div class="state">
                        <div class="title">
                            <h2>目前階段</h2>
                        </div>
                ';
                $test = "test";
                echo'<script>window.onload = () =>{';
                $data = file_get_contents( './lib/sql.json' );
                $db = json_decode( $data, true );
                $pdo = conn($db['db']);
                $sql = "SELECT * FROM `order`,`temp`,`book` WHERE `temp`.`bid`=`order`.`uid`AND`temp`.`oid`=`order`.`oid`AND`book`.`bid`=`order`.`bid`;";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $id = 0;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    if($_COOKIE['order'] == $row[$db['order_field'][1]])
                    {
                        $book_name = $row[$db['order_field'][12]];
                        $book_price = $row[$db['order_field'][13]];
                        $order_amount = $row[$db['order_field'][4]];
                        echo' shop.add("'.$id.'","'.$book_name.'","'.$book_price.'","'.$order_amount.'");';
                    }
                    $id += 1;
                }  
                unset($pdo);
                switch(@g('stage')) 
                {
                    case "1":
                        echo'details();';
                    break;
                    case "2":
                        echo'check();';
                    break;
                    case "3":
                        echo'usepay();';
                    break;
                    case "4":
                        echo'curret();';
                    break;
                    default:
                        echo'details();';
                    break;
                }              
                echo'}</script>';    
                echo
                '                
                    <div class="present">
                        <div class="stage">
                            <a href="javascript:details()" id="one">
                                <h3>1.確認明細</h3>
                            </a>
                        </div>
                        <div class="stage">
                            <a href="javascript:check()" id="three">
                                <h3>2.訂單確認</h3>
                            </a>
                        </div>
                        <div class="stage">
                            <a href="javascript:usepay()" id="four">
                                <h3>3.進行付款</h3>
                            </a>
                        </div>
                        <div class="stage">
                            <a href="javascript:curret()" id="five">
                                <h3>4.完成訂購</h3>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div id="list"></div>
                    <div class="notice">
                        <div class="title">
                            <h2>注意事項</h2>
                        </div>
                        <div class="test">
                            <h3>訂購缺書書籍的訂單</h3>
                            <h3>當您的訂單中同時包含缺書中與有現貨之書籍時，將於書籍到齊後才一併出貨及寄出，若您不願等待缺書中之書籍，建議將有現貨與缺貨籍各別下訂單。</h3>
                            <h3>缺貨書籍需等候時間</h3>
                            <h3>缺貨之書籍，根據供貨來源不同，約可分為下列四種：</h3>
                            <h3>中文書：供應商有現貨，約 3~7個工作天左右可到貨</h3>
                            <h3>非超皮代理進口之原文書：若代理商有現貨，約 5~8個工作天左右到貨</h3>
                            <h3>超皮代理進口之原文書：若國外供應商有現貨，約 2週~4週左右到貨</h3>
                            <h3>代購書籍：若國外廠商可供貨，約 2週~4週左右到貨</h3>
                            <h3>以上到貨時間若因無法控制之因素而延遲到貨，我們將儘速通知您，您可自行決定是否保留訂單繼續等候或是取消訂單。</h3>
                            <h3>若書籍有無法供貨情形發生，我們會打電話通知您。</h3>
                            <h3>選擇匯款或劃撥之訂單</h3>
                            <h3>下單後請別先行匯款，請在收到我們的匯款通知信後，再去匯款即可，並通知我們您的匯款資訊，以加速訂單處理速度。</h3>
                            <h3>家佑真的好皮</h3>
                            <h3>超皮的啦</h3>
                        </div>
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
                    </html>
                ';
            break;    
            case "chinese":
                echo
                '
                    <html>
                    <head>
                        <link rel="stylesheet" href="./css/shop.css"> 
                        <script type=\'text/javascript\' src=\'./js/cart.js\'></script> 
                        <meta charset="UTF-8">
                        <title>家佑好皮書店</title>
                    </head>
                    <body>
                    <nav>
                        <span style="padding-right:65vw;">'. $_COOKIE["user"] .'</span>
                        <a href="index.php">首頁</a>
                        <a href="index.php?page=cart">購物車</a>
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
                        <script type=\'text/javascript\' src=\'./js/cart.js\'></script> 
                        <meta charset="UTF-8">
                        <title>家佑好皮書店</title>
                    </head>
                    <body>
                    <nav>
                        <span style="padding-right:65vw;">'. $_COOKIE["user"] .'</span>
                        <a href="index.php">首頁</a>
                        <a href="index.php?page=cart">購物車</a>
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
                        <script type=\'text/javascript\' src=\'./js/cart.js\'></script> 
                        <meta charset="UTF-8">
                        <title>家佑好皮書店</title>
                    </head>
                    <body>
                        <nav>
                            <span style="padding-right:75vw;">'. $_COOKIE["user"] .'</span>
                            <a href="index.php">首頁</a>
                            <a href="index.php?page=cart">購物車</a>
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
                                        <h2>售價:$'. $row[$db['book_field'][3]] .'</h2>
                                        <h2>定價:$'. round(intval($row[$db['book_field'][3]]) * 0.8) .'</h2>
                                        <h2>語言:'. $row[$db['book_field'][5]] .'</h2>
                                        <h2>剩餘:'. $row[$db['book_field'][4]] .'</h2>
                                        <input type="hidden"  id="inputname" value="'. $row[$db['book_field'][2]] .'">
                                        <input type="hidden"  id="inputprice" value="'. round(intval($row[$db['book_field'][3]]) * 0.8) .'">
                                        <input type="submit" onclick="location.href=\'order.php?token='.$row[$db['book_field'][1]].'\'" value="加入購物車">
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
                    <script type=\'text/javascript\' src=\'./js/cart.js\'></script> 
                    <meta charset="UTF-8">
                    <title>家佑好皮書店</title>
                </head>
                <body>
                    <nav>
                        <span style=padding-right:70%;>'. $_COOKIE["user"] .'</span>
                        <a href="javascript:reset(\'#test\')">首頁</a>
                        <a href="index.php?page=cart">購物車</a>
                    </nav>
                    <div id="test"></div>
                    </div>
                    <div id="news">
                        <img src="./pic/cat.jpg">
                    </div>';
                    echo'<div id ="view_box">';
                    for($i=0;$i<3;$i++)
                    {
                        $title = ["推薦書籍","中文書籍","英文書籍"];
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
                        $size = size($db['db'],$sql);
                        $arr = random($size);
                        $fianl_arr = [];
                        for($k = 0;$k < 8;$k++)
                        {
                            $fianl_arr[$k] = $arr[$k];
                        }
                        sort($fianl_arr);
                        $pdo = conn($db['db']);
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $j = 0;
                        $k = 0;
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                        {
                            if($i == 0)
                            {
                                if($k == 8)
                                {
                                    break;
                                }
                                if($j == $fianl_arr[$k])
                                {
                                    $url = $db['url'] . $row[$db['book_field'][5]] . "/" . k($row[$db['book_field'][2]]) . $db['file'];
                                    echo
                                    '
                                        <div class=book>
                                        <div class=pic>
                                            <img src="'. $url .'">
                                        </div>
                                        <div class=price>$'. $row[$db['book_field'][3]] .'</div>
                                        <div class=name>
                                    ';
                                    if($row[$db['book_field'][5]] == $db['lan'][0])
                                    {
                                        echo'<a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=0">';
                                    }
                                    else
                                    {
                                        echo'<a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=1">';
                                    }
                                    echo
                                    '    
                                        <h3>'. $row[$db['book_field'][2]] .'<h3>
                                        </div>
                                        </div>
                                    ';
                                    $k += 1;
                                }
                                $j += 1;
                            }
                            else
                            {
                                if($j == 8)
                                {
                                    break;
                                }
                                else
                                {
                                    $url = $db['url'] . $row[$db['book_field'][5]] . "/" . k($row[$db['book_field'][2]]) . $db['file'];
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
                if(@g('check') == "1")
                {
                    echo'<script>alert(\'新增成功\');</script>';
                }
                echo'</html>';
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
                    $title = ["推薦書籍","中文書籍","英文書籍"];
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
                    $size = size($db['db'],$sql);
                    $arr = random($size);
                    $fianl_arr = [];
                    for($k = 0;$k < 8;$k++)
                    {
                        $fianl_arr[$k] = $arr[$k];
                    }
                    sort($fianl_arr);
                    $pdo = conn($db['db']);
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $j = 0;
                    $k = 0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        if($i == 0)
                        {
                            if($k == 8)
                            {
                                break;
                            }
                            if($j == $fianl_arr[$k])
                            {
                                $url = $db['url'] . $row[$db['book_field'][5]] . "/" . k($row[$db['book_field'][2]]) . $db['file'];
                                echo
                                '
                                    <div class=book>
                                    <div class=pic>
                                        <img src="'. $url .'">
                                    </div>
                                    <div class=price>$'. $row[$db['book_field'][3]] .'</div>
                                    <div class=name>
                                ';
                                if($row[$db['book_field'][5]] == $db['lan'][0])
                                {
                                    echo'<a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=0">';
                                }
                                else
                                {
                                    echo'<a href="index.php?page=view&token='. $row[$db['book_field'][1]] .'&lan=1">';
                                }
                                echo
                                '    
                                    <h3>'. $row[$db['book_field'][2]] .'<h3>
                                    </div>
                                    </div>
                                ';
                                $k += 1;
                            }
                            $j += 1;
                        }
                        else
                        {
                            if($j == 8)
                            {
                                break;
                            }
                            else
                            {
                                $url = $db['url'] . $row[$db['book_field'][5]] . "/" . k($row[$db['book_field'][2]]) . $db['file'];
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