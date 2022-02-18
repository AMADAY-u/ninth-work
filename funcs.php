<?php
//XSS対応（ echoする場所で使用！）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//DB接続関数：db_conn() 
//※関数を作成し、内容をreturnさせる。
//※ DBname等、今回の授業に合わせる。
function db_conn()
{
    try {
        $db_name = 'vet_db';
        $db_id   = 'root';
        $db_pw   = 'root';
        $db_host = 'localhost';
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DBConnectionError:' . $e->getMessage());
    }
}


//SQLエラー関数：sql_error($stmt)
function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
}


//リダイレクト関数: redirect($file_name)
function redirect($file_name)
{
    header('Location: ' . $file_name );
    exit();
}

//ログインチェック処理
function loginCheck(){
    if($_SESSION['chk_ssid'] != session_id()){
        exit('LOGIN EROROR!');
    }else{
        session_regenerate_id(true);
        $_SESSION['chk_ssid'] = session_id();
    }
}

//管理者チェック
function kanriCheck(){
    if($_SESSION['kanri_flg'] != 1){
        exit('一般の方は利用できません！');
    }
}
