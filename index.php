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
                <a href="javascript:reset()">首頁</a>
                <a href="javascript:login_view(\'#test\')">登入</a>
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
        ';
        /*if(@$_COOKIE["check"] == "1")
        {   
            echo "<script type='text/javascript'>
            window.onload =()=>
            {
                alert('帳號密碼錯誤');
            }
           </script>";
        }
        if(@$_COOKIE["check"] == "2")
        {   
            echo "<script type='text/javascript'>
            window.onload =()=>
            {
                alert('註冊成功');
            }
           </script>";
        }*/
        echo
        '    
        </body>
        </html>
	    ';
    }   
?>