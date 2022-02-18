<?php
session_start();
require_once('funcs.php');
//DB接続ができます😊
$pdo = db_conn();
loginCheck();
kanriCheck();



//id 1番の人だったら、その人が登録したデータ
//だけがほしいので、DBに接続して検索をして表示するため。😊

/**
 * １．PHP
 * [ここでやりたいこと]
 * まず、クエリパラメータの確認 = GETで取得している内容を確認する
 * イメージは、select.phpで取得しているデータを一つだけ取得できるようにする。
 * →select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * ※SQLとデータ取得の箇所を修正します。
 */
//GET送信されたidを取得（URLの後ろについているデータ）
$id = $_GET["id"];

//SQLを準備する記述を書きます😊
$stmt = $pdo->prepare('SELECT * FROM pets_db WHERE id=:id;');

//sqlが安全かチェックする
$stmt->bindValue(':id',$id,PDO::PARAM_INT);

//sqlを実行
$status = $stmt->execute();
//statusにするにはif文の時に成功、失敗の時に変数に入れている。

//結果表示
$view = '';

if ($status === false) {
    sql_error($status);//func.phpに記述しているエラーの共通化を活用している。sql_error()
} else {
    $result = $stmt->fetch();//一行しかとってきていないからfetch

}

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
        <form action="update_modi.php" method="get">

            <div style="font-size: 20px;">
                <div style="font-weight: bold; margin: 0 0 32px;">
                餌の商品名 or 内容: <input type="text" name="content" value="<?= $result['content']?>"><br>
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
                コメント: <input type="textarea" name="pcomment" value="<?= $result['pcomment']?>"><br>
                </div>
            </div>

            <input type='hidden' name="id" value="<?= $result["id"]?>">
                <button type="submit">この日の記録を修正！</button>
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
