<?php
$id= $_GET["id"];

include("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM gs_stylist_table WHERE id=:id ");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

$row=$stmt->fetch();




?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>stylist_php</title>
</head>
<body>
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend><a href="redirect.php">スタイリスト登録</a></legend>
        <label>NAME：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
        <label>空き曜日:<input type="checkbox" name="vacant[]" value="月" value="<?=$row["vacant[]"]?>">月
                        <input type="checkbox" name="vacant[]" value="火" value="<?=$row["vacant[]"]?>">火
                        <input type="checkbox" name="vacant[]" value="水" value="<?=$row["vacant[]"]?>">水
                        <input type="checkbox" name="vacant[]" value="木" value="<?=$row["vacant[]"]?>">木
                        <input type="checkbox" name="vacant[]" value="金" value="<?=$row["vacant[]"]?>">金
                        <input type="checkbox" name="vacant[]" value="土" value="<?=$row["vacant[]"]?>">土
                        <input type="checkbox" name="vacant[]" value="日" value="<?=$row["vacant[]"]?>">日</label><br>
        <label>活動可能地点:<select name="place" id="place" value="<?=$row["place"]?>">
                        <option value="東京">東京</option>
                        <option value="新宿">新宿</option>
                        <option value="渋谷">渋谷</option>
                        <option value="代々木">代々木</option>
                        <option value="池袋">池袋</option>
                        <option value="下北沢">下北沢</option></select></label><br>
        <label>ポートフォリオ:<input type="text" name="URL" value="<?=$row["URL"]?>"></label><br>
        <input type="hidden" name="id" value="<?=$row["id"]?>">
        <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
    
</body>
</html>