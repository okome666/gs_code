<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>stylist_php</title>
</head>
<body>
<form method="post" action="insert.php ">
  <div class="jumbotron">
   <fieldset>
    <legend>スタイリスト登録</legend>
        <label>NAME：<input type="text" name="name"></label><br>
        <label>空き曜日:<input type="checkbox" name="vacant" value="月">月
                        <input type="checkbox" name="vacant" value="火">火
                        <input type="checkbox" name="vacant" value="水">水
                        <input type="checkbox" name="vacant" value="木">木
                        <input type="checkbox" name="vacant" value="金">金
                        <input type="checkbox" name="vacant" value="土">土
                        <input type="checkbox" name="vacant" value="日">日</label><br>
        <label>活動可能地点:<select name="place" id="place">
                        <option value="東京">東京</option>
                        <option value="新宿">新宿</option>
                        <option value="渋谷">渋谷</option>
                        <option value="代々木">代々木</option>
                        <option value="池袋">池袋</option>
                        <option value="下北沢">下北沢</option></select></label><br>
        <label>ポートフォリオ:<input type="text" name="URL"></label><br>
        <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
    
</body>
</html>