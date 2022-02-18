<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得
$content = $_GET['content'];
$hung = $_GET['hung'];
$act = $_GET['act'];
$freq = $_GET['freq'];
$pcomment = $_GET['pcomment'];


//2. DB接続します

//例外処理を行っている。例外だと動かなくなるだけなので、tryで行ってダメならcatchでエラーを表示する。
require_once('funcs.php');
$pdo = db_conn();


//３．データ登録SQL作成


// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO pets_db(id, content, hung, act, freq, pcomment, indate)VALUES(NULL, :content, :hung, :act, :freq, :pcomment, sysdate())");

//  2. バインド変数を用意
$stmt->bindValue(':content', $content, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':hung', $hung, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':act', $act, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':freq', $freq, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pcomment', $pcomment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
//bindValue:より安全に管理するためのもの。

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  sql_error($stmt);

}else{
  
  redirect('log.php');
}
?>
