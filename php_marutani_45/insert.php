<?php
include('dbconnect.php');
session_start();

// 何も触ってない状態から1h過ぎたら自動的にログアウトする。
if (isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
    $_SESSION['time'] = time();

    $members = $db->prepare('SELECT * FROM members WHERE id=?');
    $members->execute(array($_SESSION['id']));
    $member = $members->fetch();
} else {
    // not login
    header('Location:login.php');
    exit();
}

// log posts
// if (!empty($_POST)) {
//   if ($_POST['message'] !== '') {
//     $message = $db->prepare('INSERT INTO posts SET member_id=0, reply_post_id=0, message="' . $_POST['message'] . '", created=NOW()');
//     $message->execute(array(
//       $member['id'],
//       $_POST['message']
//     ));

//     header('Location:index.php');
//     exit();
//   }
// }

$messe = $_POST['message'];
$reply = $_POST['reply_post_id'];
// pull from session
$memberId = $member['id'];

$stmt = $db->prepare("INSERT INTO posts ( id , message , member_id , reply_post_id , created  )VALUES ( NULL,:a1,:a2,:a3,NOW() )");
$stmt->bindValue(':a1', $messe, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $memberId, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $reply, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:" . $error[2]);
} else {
    //５．index.phpへリダイレクト(リダイレクトすることによってPOSTの情報が切れて、素のphpに戻る)
    header('Location:index.php');
    exit();
}
