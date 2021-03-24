<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["password"]) || $_POST["password"]==""
){
  exit('ParamError');
}


//1. POSTデータ取得
$email = $_POST["email"];
$password = $_POST["password"];


//2. DB接続します(エラー処理追加)
try {
    $pdo = new PDO('mysql:dbname=member;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO member (email, password )VALUES(:email, :password)");
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':password', $password, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
    header("Location: search.php");
    exit;

}
?>
