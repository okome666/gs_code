<?php
include('dbconnect.php');
session_start();

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

// get posts
$posts = $db->query('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id ORDER BY p.created DESC');

if (isset($_REQUEST['res'])) {
  $response = $db->prepare('SELECT m.name, m.picture, p.* FROM members m,posts p WHERE m.id=p.member_id AND p.id=? ORDER BY p.created DESC');
  $response->execute(array($_REQUEST['res']));

  $table = $response->fetch();
  $message = '@' . $table['name'] . '->';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ひとこと掲示板</title>

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="wrap">
    <div id="head">
      <h1>ひとこと掲示板</h1>
    </div>
    <div id="content">
      <div style="text-align: right"><a href="logout.php">ログアウト</a></div>
      <form action="insert.php" method="post">
        <dl>
          <dt><?php echo htmlspecialchars($member['name'], ENT_QUOTES); ?>さん、メッセージをどうぞ</dt>
          <dd>
            <textarea name="message" cols="50" rows="5"><?php echo htmlspecialchars($message, ENT_QUOTES); ?></textarea>
            <input type="hidden" name="reply_post_id" value="<?php echo htmlspecialchars($_REQUEST['res'], ENT_QUOTES) ?>" />
          </dd>
        </dl>
        <div>
          <p>
            <input type="submit" value="投稿する" />
          </p>
        </div>
      </form>
      <?php
      foreach ($posts as $post) :
      ?>
        <div class="msg">
          <img src="member_picture/<?php echo htmlspecialchars($post['picture'], ENT_QUOTES); ?>" width="48" height="48" alt="<?php echo htmlspecialchars($post['name'], ENT_QUOTES); ?>" />
          <p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?><span class="name">（<?php echo htmlspecialchars($post['name'], ENT_QUOTES); ?>）</span>[<a href="index.php?res=<?php echo htmlspecialchars($post['id'], ENT_QUOTES); ?>">Re</a>]</p>
          <p class="day"><a href="view.php?id=<?php echo htmlspecialchars($post['id'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></a>
            <?php
            if ($post['reply_post_id']) :
            ?>

              <a href="view.php?id=<?php echo htmlspecialchars($post['reply_post_id'], ENT_QUOTES); ?>">
                返信元のメッセージ</a>
            <?php
            endif;
            ?>
            <?php
            if ($_SESSION['id'] == $post['member_id']) :
            ?>
              [<a href="delete.php?id=<?php echo htmlspecialchars($post['id']); ?>" style="color: #F33;">削除</a>]
            <?php
            endif;
            ?>
          </p>
        </div>
      <?php
      endforeach;
      ?>


    </div>
  </div>
</body>

</html>