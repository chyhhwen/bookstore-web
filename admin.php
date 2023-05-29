<?php
    include "plugins.php";
    echo 
    '<html>
    <head>
        <link rel="stylesheet" href="./css/admin.css">
        <script type=\'text/javascript\' src=\'./js/admin.js\'></script> 
        <meta charset="UTF-8">
        <title>桿哩鹽系統</title>
    </head>
    <body>
        <nav>
            <span style=padding-right:70vw;>桿哩鹽</span>
            <a href="javascript:reset(\'#test\')">首頁</a>
            <a href="javascript:put_view(\'#test\')">上架</a>
            <a href="javascript:register_view(\'#test\')">註冊</a>
        </nav>
        <div id="test"></div>
        </div>
        <div id="news">
            <img src="./pic/cat.jpg">
        </div>';
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
?>