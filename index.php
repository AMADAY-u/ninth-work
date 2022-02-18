<?php
$date = date('Y/m/d/l');

function kanriCheck(){
    if($_SESSION['kanri_flg'] != 1){
        exit('一般の方は利用できません！');
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
    <title>ログイン</title>
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="ID_pw.php">ID登録</a>
                </div>
            </div>
        </nav>
    </header>
    <div class='wrap'>
        <div class='prof'>
            <div class='prof__img'><img src='img/2_Precious_Pets_2-1.jpg'alt=''></div>
            <div class='prfo__contents'>
                <div class='prof__name'>Pets Healthy Log</div>
                <div class='prof__text'><?=$date?></div>
            </div>
        </div>
    </div>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <form name="form1" action="login_act.php" method="post">
        <div class = 'id-pw'> 
            <p>ID:<input type="text" name="lid" /></p>
            <p>PW:<input type="password" name="lpw"/></p>
        </div>
        <div style='text-align: center'><input type="submit" value="LOGIN" /></div>
        
    </form>


</body>

</html>
