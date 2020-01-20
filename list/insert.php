<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name=$_POST["name"];
$vacant=$_POST["vacant"];
$place=$_POST["place"];
$url=$_POST["URL"];

//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_homework;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBconnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_stylist_table(id,name,vacant,place,URL,indate)VALUES(NULL,:a1,:a2,:a3,:a4,sysdate())");
$stmt->bindValue(':a1',$name, PDO::PARAM_STR);
$stmt->bindValue(':a2',$vacant,PDO::PARAM_STR);
$stmt->bindValue(':a3',$place,PDO::PARAM_STR); 
$stmt->bindValue(':a4',$url,PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.htmlへリダイレクト
  header('Location: index.html');

}
?>
