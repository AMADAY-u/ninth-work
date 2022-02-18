<?php

// if(!isset($_FILES["fname"]["Name"]) || $_FILES["fname"]["Name"]==""){
//   exit("ParameError!Files!");
// };


/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
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
// $image = $_FILES['fname']['name'];

// //FileUpload処理
// $upload = "./img/";//画像アップロードフォルダへのパス
// //ダウンロードした画像を./img/へ移動させる記述
// if(move_upload_file($_FILES['fname']['tmp_name'], $upload.$image)){
// //FileUpload:OK
// }else{
//   //FileUpload:NG
//   echo "upload failed";
//   echo $_FILES['fname']['error'];
// }



//----------------------
//2. DB接続します
//----------------------

//例外処理を行っている。例外だと動かなくなるだけなので、tryで行ってダメならcatchでエラーを表示する。
require_once('funcs.php');
$pdo = db_conn();


//----------------------
//３．データ登録SQL作成
//----------------------

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO honer_db(id, lid, lpw, kanri_flg, pet, name, address, email, pname, sex, birth, sp, mhistory, hospital, comment)
VALUES(NULL, :lid, :lpw, :kanri_flg, :pet, :name, :address, :email, :pname, :sex, :birth, :sp, :mhistory, :hospital, :comment)");

//  2. バインド変数を用意
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

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
// $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
//bindValue:より安全に管理するためのもの。

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  // //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  // $error = $stmt->errorInfo();
  // exit("ErrorMessage:".$error[2]);
  sql_error($stmt);
  
}else{
  // //５．index.phpへリダイレクト

  redirect('index.php');


}
?>
