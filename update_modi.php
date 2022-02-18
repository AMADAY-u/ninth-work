<?php
session_start();

//1. POSTデータ取得
$content = $_GET['content'];
$hung = $_GET['hung'];
$act = $_GET['act'];
$freq = $_GET['freq'];
$pcomment = $_GET['pcomment'];
$id = $_GET["id"]; //これを追加しましょう🤗

//2. DB接続します
require_once('funcs.php');
loginCheck();
$pdo = db_conn();



//３．データ更新SQL作成

// $stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,age,content,indate)VALUES(:name,:email,:age,:content,sysdate())");
$stmt = $pdo->prepare('UPDATE pets_db SET content=:content, hung=:hung, act=:act, freq=:freq, pcomment=:pcomment WHERE id=:id;' );

//  2. バインド変数を用意
$stmt->bindValue(':content', $content, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':hung', $hung, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':act', $act, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':freq', $freq, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pcomment', $pcomment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
//bindValue:より安全に管理するためのもの。
$stmt->bindValue(':id', $id, PDO::PARAM_STR); //数値 なぜ？DBの設定でidを登録するときにINTにしているから🤗


//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    // $error = $stmt->errorInfo();
    // exit("ErrorMessage:".$error[2]);
    sql_error($stmt);

}else{
  //５．index.phpへリダイレクト
    // header("Location: log.php");
    // exit();
    redirect('log.php');
}
?>