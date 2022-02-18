<?php
$message = date('Y/m/d/l');
?>

<?php

//1.  DB接続します

session_start();
  //1.  DB接続します
require_once('funcs.php');
$pdo = db_conn();



//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM honer_db ");
$status = $stmt->execute();

//３．データ表示

if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
//Selectデータの数だけ自動でループしてくれる
//FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $ID = $result["lid"] ;
        $PW = $result["lpw"] ;
        $pet = $result["pet"] ;
        $name = $result["name"] ;
        $address = $result["address"] ;
        $email = $result["email"] ;
        $pname = $result["pname"] ;
        $sex = $result["sex"] ;
        $birth = $result["birth"] ;
        $sp = $result["sp"] ;
        $mhistory = $result["mhistory"] ;
        $hospital = $result["hospital"] ;
        $text = $result["comment"] ;
        // $image .= $image["image"]
        $view = '<li><a href="profile_modi.php?id='.$result["id"].'">個人情報修正</a></li>';

    }

}
?>





<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Pets profile</title>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
</head>

<header>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-header"><a class="navbar-brand" href="index.php">ログイン</a></div>
            <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
        </div>
    </div>
</nav>
</header>


<body>
    <div class='wrap'>
        <div class='prof'>
            <div class='prof__img active'><img src="./img/2_Precious_Pets_2-1.jpg"; alt=""></div>
            <!-- $imageを入れたい -->
            <div class='prfo__contents'>
                <div class='prof__name'>Profile</div>
                <div class='prof__text'><?= $message?></div>
                <div class='prof__text'></div>
            </div>
        </div>
        <!-- /.prof -->

        <div class='contents'>

            <div class='text'>ID：<?=$ID;?></div>
            <div class='text'>PW：<?=$PW;?></div>

            <div class='title'>個人情報</div>

            <div class='text'>種：<?=$pet;?></div>
            <div class='text'>主人名前：<?=$name;?></div>
            <div class='text'>住所：<?php echo $address;?></div>

            <div class='text'>アドレス：<?php echo $email;?></div>
            <div class='text'>ペットの名前：<?php echo $pname;?></div>
            <div class='text'>性別：<?php echo $sex;?></div>
            <div class='text'>誕生日：<?php echo $birth;?></div>

            <div class='text'>種名：<?php echo $sp;?></div>
            <div class='text'>既往歴：<?php echo $mhistory;?></div>
            <div class='text'>かかりつけの病院：<?php echo $hospital;?></div>
            <div class='text'>特徴：<?php echo $text;?></div>
        </div>
        <!-- /.contents -->

        <div class='contents'>
            <div class='title'>ログイン</div>
            <ul>
                <?=$view?>
                <li><a href="log.php">今までの記録を確認</a></li>
            </ul>
            <div class='text'></div>
        </div>
        <!-- /.contents -->

        <!-- iconの後半角スペースを入れること -->

        <footer class='footer'>
            <small class='copy'>&copy;Pets Form</small>
        </footer>

    </div>
</body>
</html>