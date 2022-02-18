<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。

//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る

//2. $id = POST["id"]を追加

//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更


//1. POSTデータ取得
$pet = $_POST['pet'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$pname = $_POST['pname'];
$sex = $_POST['sex'];
$birth = $_POST['birth'];
$sp = $_POST['sp'];
$mhistory = $_POST['mhistory'];
$hospital = $_POST['hospital'];
$comment = $_POST['text'];
// $image = $_FILES['image']['tmp_name'];
//これはなんですか？detail.phpのhiddenで送られたid
$id = $_POST["id"]; //これを追加しましょう🤗

//2. DB接続します
// function.phpに記述したものを書きますよ🤗↓
// これが一番最初に書く、呼び出したい時！🤗
require_once('funcs.php');
$pdo = db_conn();


//３．データ更新SQL作成
// $stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,age,content,indate)VALUES(:name,:email,:age,:content,sysdate())");
$stmt = $pdo->prepare('UPDATE honer_db SET pet=:pet, name=:name, address=:address, email=:email, pname=:pname, sex=:sex, birth=:birth, sp=:sp, mhistory=:mhistory, hospital=:hospital, comment=:comment WHERE id=:id;' );

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':pet', $pet, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':address', $address, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pname', $pname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':birth', $birth, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':sp', $sp, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':mhistory', $mhistory, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':hospital', $hospital, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':image', $image, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

// hiddenで受け取ったidをbindValueを用いて「安全かチェック」をする＝SQLインジェクション対策
$stmt->bindValue(':id', $id, PDO::PARAM_STR); //数値 なぜ？DBの設定でidを登録するときにINTにしているから🤗
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('profile.php');
}