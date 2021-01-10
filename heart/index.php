<?php
/*echo "<html><head></head><body><h1>Not Found</h1></body></html>";
exit;*/
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8", false);
}
class PageTemplate
{
    private $template = '';
    public function setTemplate($template)
    {

        if (!is_file($template)) {
            throw new \Exception("Not found: ".$template);
        }
    $this->template = $template;
    }
    public function setText($text)
    {

        if (!is_file($text)) {
            throw new \Exception("Not found: ".$text);
        }
    $this->text_common = file($text);
    }
    public function view()
    {
        $page = $this;
        include $page->template;
    }
}
if (!empty($_GET["hl"])){
if ($_GET["hl"] === "en"){
$page = new PageTemplate();
$page->title  = "My opinion about defamation (slanders and libels)";
$page->url = "https://soratako.yunachannel.com/heart/?hl=en";
$page->description = "My opinion about defamation (slanders and libels)";
$page->author = "Soratako";
$page->author_twitter = "Sierra9Indiaa";
$page->keywords = "defamation,Slanders";
$page->created = "2020.09.12";
$page->created_year = "2020";
$page->modified = "2021.01.10";
$page->text_start = "Sorry. This page is currently being prepared for publication.<br>You can read <a href=\"https://translate.googleusercontent.com/translate_c?sl=ja&tl=en&u=https://soratako.yunachannel.com/heart/\" target=\"_blank\" rel=\"noreferrer noopener\">the machine translated English version</a> instead.";
$page->text_end = "Slandering others on the Internet is defamation. Defamation may result in compensation. Never slander on the Internet. Think carefully about what you say on the Internet. Information published on the Internet is viewed by an unspecified number of people. It can be incredibly difficult to delete content once posted on the Internet. Even if you delete your post or account, the remarks you made on the internet will remain forever.
Slandering others on the Internet is defamation. Defamation may result in compensation. You should never slander on the Internet. Think carefully about what you will say on the Internet. Information published on the Internet is viewed by an unspecified number of people. It can be incredibly difficult to delete content once posted on the Internet. Even if you delete your post or your account, the remarks you made on the internet will remain forever.";
$page->setText(__DIR__ . "/templates/heart_en.txt");
$page->setTemplate(__DIR__ . "/templates/heart.html");
$page->view();
}
}else{
$page = new PageTemplate();
$page->title  = "誹謗中傷に関するそらたこの考え";
$page->url = "https://soratako.yunachannel.com/heart/";
$page->description = "誹謗中傷に関するそらたこの考え";
$page->author = "Soratako";
$page->author_twitter = "Sierra9Indiaa";
$page->keywords = "誹謗中傷";
$page->created = "2020.09.12";
$page->created_year = "2020";
$page->modified = "2021.01.10";
$page->text_start = "2020年現在、インターネット上でよく見られる、「誹謗中傷」についてのそらたこの考えです。";
$page->text_end = "インターネットで他人を誹謗中傷することは名誉毀損に当たります。名誉毀損をすると賠償を命じられる可能性があります。安易な発言が誹謗中傷とみなされて、賠償をしなければいけなくなります。インターネットでの誹謗中傷は、絶対にやめましょう。インターネットでの発言はしっかりと考えてしましょう。インターネットは便利なツールですが、非常に厄介で奥の深いツールでもあります。インターネットでは一度送信したことは取り消すことができません。永遠に残り続けます。投稿の削除やアカウントの削除をしても自分がした発言は完全には消えません。安易な発言は自分の身を滅ぼします。";
$page->setText(__DIR__ . "/templates/heart.txt");
$page->setTemplate(__DIR__ . "/templates/heart.html");
$page->view();
}
?>