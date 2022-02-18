<?php

$message = date('Y/m/d/l');

//POSTで送られてきたデータは$_POST['目印名'];で取得
// name='text' → $_POST['text'];
session_start();
require_once('funcs.php');

loginCheck();





?>




<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Pets form</title>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
</head>

<header>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-header"><a class="navbar-brand" href="log.php">記録一覧</a></div>
            <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
            <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
        </div>
    </div>
</nav>
</header>


<body>
    <div class='wrap'>
        <div class='prof'>
            <div class='prof__img'><img src='img/2_Precious_Pets_2-1.jpg'alt=''></div>
            <div class='prfo__contents'>
                <div class='prof__name'>Pets Healthy Log</div>
                <div class='prof__text'><?php echo $message; ?></div>
            </div>
        </div>
        <!-- /.prof -->

        <div class='contents'>
            <div class='title'>食餌の情報</div>
            <div class='text'>
                今日の食餌の情報を入力してください。<br>
                「食餌の内容」「食欲」「活動量」「食餌頻度」を入力してください！<br>
            </div>
        </div>
        <!-- /.contents -->
        <form action="insert2.php" method="get">

            <div style="font-size: 20px;">
                <div style="font-weight: bold; margin: 0 0 32px;">
                餌の商品名 or 内容: <input type="text" name="content"><br>
                </div>
                
                
                <div style="margin: 0 0 32px;">
                    <dt style="font-weight: bold;">食欲</dt>
                    <dd class="form-item form-inner ">
                        <label class="form-label"><input type="radio" name="hung" id="y" value="食欲ある">食欲ある</label>
                        <label class="form-label"><input type="radio" name="hung" id="littey" value="少しある">少しある</label>
                        <label class="form-label"><input type="radio" name="hung" id="littlen" value="少しない">少しない</label>
                        <label class="form-label"><input type="radio" name="hung" id="n" value="まったくない">まったくない</label>
                    </dd>
                </div>
                <div style="margin: 0 0 32px;">
                    <dt style="font-weight: bold;">活動量</dt>
                    <dd class="form-item form-inner">
                        <label class="form-label"><input type="radio" name="act" id="act" value="活発！">活発！</label>
                        <label class="form-label"><input type="radio" name="act" id="litteact" value="普通">普通</label>
                        <label class="form-label"><input type="radio" name="act" id="littlenact" value="あまり元気ない">あまり元気ない</label>
                        <label class="form-label"><input type="radio" name="act" id="nact" value="動かない！">動かない！</label>
                    </dd>
                </div>
                <div style="margin: 0 0 32px;">
                    <dt style="font-weight: bold;">食餌の頻度（回数/日）</dt>
                    <dd class="form-item form-inner">
                        <label  class="form-label"><input type="radio" name="freq" id="4" value="４回">4回</label>
                        <label  class="form-label"><input type="radio" name="freq" id="3" value="３回">3回</label>
                        <label  class="form-label"><input type="radio" name="freq" id="2" value="２回">2回</label>
                        <label  class="form-label"><input type="radio" name="freq" id="1" value="１回">1回</label>
                    </dd>
                </div>
                <div style="font-weight: bold; margin: 0 0 32px;">
                コメント: <input type="textarea" name="pcomment"><br>
                </div>
            </div>

            

                <button type="submit">今日の記録を送信！</button>
        </form>

        <div class='contents'>
            <div class='title'>メニュー</div>
            <ul>
                <li><a href="profile.php">プロフィールへ</a></li>
                <li><a href="log.php">今までの記録を確認</a></li>
            </ul>
        </div>

        <footer class='footer'>
            <small class='copy'>&copy;Pets Form</small>
        </footer> 
    </div>
</body>
</html>
