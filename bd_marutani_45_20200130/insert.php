<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name = $_POST["name"];
$vacant = $_POST["vacant"];
$ar_vacant = implode(' ', $vacant);
$place = $_POST["place"];
$url = $_POST["URL"];



//2. DB接続します
include("funcs.php");
$pdo = db_conn();


   


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_stylist_table(id,name,vacant,place,URL,indate)VALUES(NULL,:a1,:a2,:a3,:a4,sysdate())");
$stmt->bindValue(':a1',$name, PDO::PARAM_STR);
$stmt->bindValue(':a2',serialize($vacant),PDO::PARAM_STR);
$stmt->bindValue(':a2',$ar_vacant,PDO::PARAM_STR);
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
  header('Location: redirect.php');

}
?>
