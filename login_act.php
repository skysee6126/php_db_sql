<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

//1. 接続します
try {
  $pdo = new PDO('mysql:dbname=member;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//２．データ登録SQL作成
$sql = "SELECT * FROM member WHERE email=:email AND password=:password";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password );
$res = $stmt->execute();

//SQL実行時にエラーがある場合
if($res==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}

//３．抽出データ数を取得
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()
$val = $stmt->fetch(); //1レコードだけ取得する方法

//４. 該当レコードがあればSESSIONに値を代入
if( $val["id"] != "" ){
  $_SESSION["chk_ssid"]  = session_id();
  //Login処理OKの場合select.phpへ遷移
  header("Location: search.php");
}else{
  //Login処理NGの場合login.phpへ遷移
  header("Location: index.php");
}
//処理終了
exit();
?>

