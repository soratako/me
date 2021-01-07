<?php
date_default_timezone_set("Asia/Tokyo");
$user_IP = getenv("REMOTE_ADDR");
$accessdate = date("Y-m-d H:i:s");
$user_agent = getenv("HTTP_USER_AGENT");
if (!empty($_GET["u"])){
$to_link = $_GET["u"];
$get_contents = @file_get_contents($to_link);
if($get_contents):
if (!empty($_GET["confirm"])):?>
<!DOCTYPE html><html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>リンク先の確認</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="author" content="Soratako">
  <meta name="format-detection" content="telephone=no, email=no, address=no">
  <meta name="robots" content="none" />
</head><body><h1>リンク先の確認</h1><p>以下のURLに遷移しようとしています。<br>よろしければリンクをクリックしてください。</p>
<a href="<?= $to_link ?>" rel="noreferrer nofollow noopener external"><?= $to_link ?></a>
</body></html>
<?php else:
header("Location: {$to_link}");
exit;
endif;
else:?>
<!DOCTYPE html><html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>リンク先の確認</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="author" content="Soratako">
  <meta name="format-detection" content="telephone=no, email=no, address=no">
  <meta name="robots" content="none" />
</head><body><h1>ページが見つかりません</h1><p>お探しのページは存在しないようです。</p>
<a herf="<?= $to_link ?>" rel="noreferrer nofollow noopener external"><?= $to_link ?></a>
</body></html>
<?php
endif;
}else{
echo "エラー";
}
?>