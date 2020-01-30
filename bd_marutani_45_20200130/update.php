<?php
$id = $_POST["id"];
$name = $_POST["name"];
$vacant = $_POST["vacant"];
$ar_vacant = implode(' ', $vacant);
$place = $_POST["place"];
$url = $_POST["URL"];


include("funcs.php");
$pdo = db_conn();


$stmt = $pdo->prepare("UPDATE gs_stylist_table SET name=:a1,vacant=:a2,place=:a3,URL=:a4 WHERE id=:a5");
$stmt->bindValue(':a1',$name, PDO::PARAM_STR);
$stmt->bindValue(':a2',serialize($vacant),PDO::PARAM_STR);
$stmt->bindValue(':a2',$ar_vacant,PDO::PARAM_STR);
$stmt->bindValue(':a3',$place,PDO::PARAM_STR); 
$stmt->bindValue(':a4',$url,PDO::PARAM_STR);
$stmt->bindValue(':a5',$id,PDO::PARAM_INT);

$status = $stmt->execute(); 

if($status==false){
    sql_error();
}else{
  redirect("redirect.php");
}


?>