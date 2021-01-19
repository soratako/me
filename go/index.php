<?php
 /**
  * Redirects to the specified URL.
  *
  * @author  Soratako <soratako@soratako.yunachannel.com>
  */
date_default_timezone_set("Asia/Tokyo");
$eIPAddress = getenv("REMOTE_ADDR");
$eAccessDate = date("Y-m-d H:i:s");
$eUserAgent = getenv("HTTP_USER_AGENT");
require_once "vendor/autoload.php";
$twig_loader = new \Twig\Loader\FilesystemLoader("templates");
$go_twig = new \Twig\Environment($twig_loader);
if ( !empty ($_GET["u"]) ) {
    $goGetLink = $_GET["u"];
    $goToContents = @file_get_contents($goGetLink);
    if ( $goToContents ) {
        if ( !empty ($_GET["confirm"]) ) {
            $goToLink = htmlspecialchars($goGetLink, ENT_QUOTES);
            $goBackLink = htmlspecialchars(getenv("HTTP_REFERER"), ENT_QUOTES);
            $twig_data = array(
                "goTitle" => "リンク先の確認",
                "goMessage" => "以下のURLに遷移しようとしています。よろしければリンクをクリックしてください。",
                "goToLink" => $goToLink,
                "goBackLink" => $goBackLink,
            );
            echo $go_twig->render("go.html", $twig_data);
            exit;
        } else {
            header("Location: {$goGetLink}", true, 307);
            exit;
        }
    } else {
        $goToLink = htmlspecialchars($goGetLink, ENT_QUOTES);
        $twig_data = array(
            "goTitle" => "ページが見つかりません",
            "goMessage" => "お探しのページは存在しないようです。",
            "goToLink" => $goToLink,
            "goBackLink" => $goBackLink,
        );
        echo $go_twig->render("go.html", $twig_data);
        exit;
    }
} else {
    echo "エラー";
    exit(1);
}
?>