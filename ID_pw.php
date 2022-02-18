


<?php
$message = date('Y/m/d/l');

session_start();

//1.  DB接続します
require_once('funcs.php');




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



<body>
    <div class='wrap'>
        <div class='prof'>
            <div class='prof__img'><img src='img/2_Precious_Pets_2-1.jpg'alt=''></div>
            <div class='prfo__contents'>
                <div class='prof__name'>ID登録</div>
                <div class='prof__text'><?php echo $message; ?></div>
            </div>
        </div>
        <!-- /.prof -->

        <div class='contents'>
            <div class='title'>個人情報</div>
            <div class='text'>
                IDとPW、そして個人の情報を入力してください。<br>
                「あなたの名前」「住所」「emailアドレス」「ペットの名前」「種名」を入力してください！<br>
                例）「太郎」「北海道」「＊＊＊＠test.ts」「ケン」「チワワ」
                <p style="color:red;">※注意　ログイン後変更できますが、ログインまでは変更できません。IDとPWを忘れずに！</p>
            </div>
        </div>
        <!-- /.contents -->

        <form action='insert1.php' method="post" enctype="multipart/form-data">
            <p>ID:<input type="text" name="lid" /></p>
            <p>PW:<input type="password" name="lpw"/></p>
            <div>
                <p>
                    <label class="form-label"> 管理者:<input type="radio" name="kanri_flg" value="1"/></label>
                    <label class="form-label">一般利用者:<input type="radio" name="kanri_flg" value="0"/></label>
                </p>
            </div>
            <hr>

            <p>飼っているペットはなにかな？</p>
                <label class="form-label"><input type='radio' name="pet" value="犬">いっぬ！</label>
                <label class="form-label"><input type='radio' name="pet" value="猫">ねっこ！</label>
                <label class="form-label"><input type='radio' name="pet" value="その他">犬猫とかありえない！</label>

                <hr>
                <ul class ='title'>
                    <li>主人名前： <input  type="text" name="name"></li>
                    <li>住所：<input type="text" name="address"></li>
                    <li>EMAIL：<input type="email" name="email"></li>
                    <li>ペットの名前：<input  type="text" name="pname" value='<?=$name?>'></li>
                    <li>性別：
                        <label class="form-label"><input type='radio' name="sex" value="オス">オス</label>
                        <label class="form-label"><input type='radio' name="sex" value="メス">メス</label>
                    </li>
                    <li>誕生日：<input  type="date" name="birth"></li>
                    <li>種類： <input type="text" name="sp"></li>
                    <li>既往歴：<input type="text" name="mhistory"></li>
                    <li>かかりつけの病院： <input type="text" name="hospital"></li>
                </ul>
            <p>ペットの好きなものや特徴を好きに書いてね！！！</p>
            <textarea name='text' id='comment'></textarea>
            <label>画像を選択</label>
            <input type="file" name="fname" accept="image/*">

            <button type="submit">個人情報を送信！</button>
        </form>

        <footer class='footer'>
            <small class='copy'>&copy;Pets Form</small>
        </footer>
    </div>
</body>
</html>