<?php
echo "<html><head></head><body><h1>Not Found</h1></body></html>";
exit;
$lang = $_GET["lang"];
$modifiedtimen = new DateTime("2020-09-12");
$modifiedtime = $modifiedtimen->format(DateTime::ATOM);
?>
<!DOCTYPE html><html prefix="og: http://ogp.me/ns# website: http://ogp.me/ns/website#" dir="ltr" lang="<?php if ($lang === "en") {echo "en";}else{echo "ja";}?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="author" content="Soratako">
   <meta name="format-detection" content="telephone=no, email=no, address=no">
  <!-- Bot -->
  <meta name="robots" content="all" />
  <!-- /Bot -->
  <!-- meta -->
  <meta name="keywords" content="誹謗中傷">
  <meta name="description" content="<?php if ($lang === "en") {echo "My opinion about defamation (slanders and libels)";}else{echo "誹謗中傷に関するそらたこの考え";}?>">
  <!-- /meta -->
  <!-- ogp, Twitter tags -->
  <meta property="og:title" content="<?php if ($lang === "en") {echo "My opinion about defamation (slanders and libels)";}else{echo "誹謗中傷に関するそらたこの考え";}?>">
  <meta property="og:description" content="<?php if ($lang === "en") {echo "My opinion about defamation (slanders and libels)";}else{echo "誹謗中傷に関するそらたこの考え";}?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://soratako.yunachannel.com/heart/<?php if ($lang === "en") {echo "?lang=en";}?>">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:creator" content="@Sierra9Indiaa">
  <!-- /ogp, Twitter tags -->

  <title><?php if ($lang === "en") {echo "My opinion about defamation (slanders and libels)";}else{echo "誹謗中傷に関するそらたこの考え";}?></title>
  <link rel="canonical" href="https://soratako.yunachannel.com/heart/<?php if ($lang === "en") {echo "?lang=en";}?>">
  <!-- Exte JS CSS -->
  <link rel="stylesheet" href="/style.css" />
  <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>-->
  <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
  <!-- /Exte JS CSS -->
</head>
<body>
<div id="loading" class="loading"><i class="fa fa-spinner fa-spin"></i></div>
  <script>
       const loading =  document.getElementById("loading");
　　window.addEventListener('load', function () {
　　loading.style.display = "none";
　　});
  </script>
<div class="heart" id="contents">
<h1 class="langja" lang="ja">誹謗中傷に関するそらたこの考え</h1>
<h1 class="langen" lang="en">My opinion about defamation (slanders and libels)</h1>
<!-- body -->
 <div class="date-tags">
  <span class="fas fa-history" aria-hidden="true"></span> <time class="updated" datetime="<?php echo stripslashes($modifiedtime); ?>" itemprop="dateModified"><?php 
  $dateformat = DateTimeInterface::ATOM;
  $modifiedtimeformat = DateTime::createFromFormat($dateformat,$modifiedtime);
  echo $modifiedtimeformat->format("Y.m.d"); ?></time> <span class="far fa-clock" aria-hidden="true"></span> <span class="published"><meta itemprop="datePublished" content="2020-09-10T21:50:27+09:00">2020.09.10</span>
  </div>
<p class="langja" lang="ja">2020年現在、インターネット上でよく見られる、「誹謗中傷」についてのそらたこの考えです。</p>
<p class="langja" lang="ja">Tik TokなどのSNSでよく見かける言葉として、「有名になったら誹謗中傷は仕方ない」、「誹謗中傷される覚悟を持って投稿をするべきだ」というものがあります。私はこの言葉を聞いて、その通りだと思います。投稿を通して有名になるということは投稿がより多くの人の目に入ると言うことです。世の中にはさまざまな考えがあり、1人1人の考えは皆違います。あなたにとっての当たり前のことはあなた以外の全ての人にとっての当たり前ではありません。それどころか他の誰かにとってはあり得ないことかもしれません。さまざまな考えを持つ人の中には誹謗中傷と気づかず、相手を傷つけていると知らずに発言している人もいます。相手を罵って誹謗中傷することを生きがいとしているような頭のおかしい人もいると思います。YouTubeの低評価で考えてみてください。10万、100万再生されている動画で低評価が1つもついていないものがありますか？まずないと言っていいでしょう。その動画があなたにとってどんなにいいものであるとしても他の誰かにとっては低評価をつけるに値する動画であるということです。このように自分と違う考えを持つ人は必ずいて、それを認めなくてはいけません。繰り返しますが、有名になるということは投稿がより多くの人の目にとまることです。インターネットに投稿をするということはいくら自分が意図していないとしても自分以外の不特定多数の誰かに向けて発信するということです。自分と違う考えを持つ人が自分が投稿、発信した内容を目にしたとき、誹謗中傷をしてくる可能性は十分あります。より多くの人がその投稿、発信を見るということは誰かに誹謗中傷される可能性がより高まるということです。そのため、インターネットに投稿すること、有名になること、には誹謗中傷される覚悟を持つ必要があると思います。<br>
では、それらの誹謗中傷を当たり前にしていいのでしょうか？当たり前にしてはいけないと私は思います。それらの言葉を使って誹謗中傷を正当化していいのでしょうか？誹謗中傷を正当化してはいけないと思います。自分と違う、自分の当たり前と違う、それを認めず批判する発言が誹謗中傷につながります。相手の考えを認めそれを尊重することができなければ、自分が誹謗中傷をする側になってしまいます。相手の考えを認め、相手にも自分の考えを認めてもらう必要があります。認めるとはそういう考えがあることを理解することです。納得できないのであれば、自分の意見にする必要はありません。ただ、自分と違う意見を言った相手を罵ったり、馬鹿にしたり、中傷したり、しないでください。Tik TokやYouTubeなどではコメント欄を閉鎖することで誹謗中傷をされないことができます。しかし、この方法は誹謗中傷以外の意見や感想も一律に省いてしまいます。Tik TokやTwitterなどでは特定の自分が繋がっている人からのコメントのみを受けつけつけることができます。自分と異なる意見は入りにくくなるでしょう。これらの機能やブロック、ミュート機能を使うことは決して逃げではありません。使うことが自分の安全につながるかもしれません。しかし、これらの機能を使わずとも、それぞれがお互いを認め合えて、暖かいコメントや素晴らしいコメントに溢れたコメント欄になったらSNSはもっと便利で多くの人の役に立つものになるでしょう。<br>誹謗中傷は有名になった証であるという言い方をする人がいます。確かにそういう言い方もできると思います。有名になったことで、より多くの人から、より多くの視点から意見がよせられる、その意見の中に誹謗中傷が含まれているのかもしれません。しかし、誹謗中傷は当たり前にしていいことではありません。その誹謗中傷を投稿した人には他人を中傷する意図はなかったのかもしれません、しかし、中傷する意図があったとしてもなかったとしても言われた相手は傷つきます。その誹謗中傷見た人もいい気分にはなりません。あなたが言った言葉が人を深く傷つけます。もしかしたら、軽い気持ちで言ったのかもしれません。それでも、言われた側は軽くすませられる言葉ではないです。発言の前にしっかりと考えて、その発言が本当に必要なのか、その発言によって傷つく人はいないか、その発言をして自分はどうなるのか、などを確認してください。</p>
<p class="langja" lang="ja">あなたがもし、他の誰かよりちょっと影響力があるのなら、誹謗中傷をやめようと呼びかけてみてください。あなたの身近な人や友達と誹謗中傷がなぜダメなのかについて話題にしてみてください。あなたのちょっとの働きかけで誹謗中傷を少なくできます。</p>

<p class="langja" lang="ja">インターネットで他人を誹謗中傷することは名誉毀損に当たります。名誉毀損をすると賠償を命じられる可能性があります。安易な発言が誹謗中傷とみなされて、賠償をしなければいけなくなります。インターネットでの誹謗中傷は、絶対にやめましょう。インターネットでの発言はしっかりと考えてしましょう。インターネットは便利なツールですが、非常に厄介で奥の深いツールでもあります。インターネットでは一度送信したことは取り消すことができません。永遠に残り続けます。投稿の削除やアカウントの削除をしても自分がした発言は完全には消えません。安易な発言は自分の身を滅ぼします。</p>

<p class="langen" lang="en" style="font-size:x-large;font-weight:bold;">Sorry. This page is currently being prepared for publication.<br>Please read <a href="/heart/">the Japanese version</a> <span style="font-size:initial;">(<a href="https://translate.googleusercontent.com/translate_c?sl=ja&tl=en&u=https://soratako.yunachannel.com/heart/" target="_blank" rel="noreferrer noopener">translated version by Google Translate</a>)</span> instead.</p>
<p class="langen" lang="en">Libel and slander problems on the Internet, such as Tik Tok, are often seen. In this page, I considered the these problems.</p>
<p class="langen" lang="en">Words often seen on social media such as Tik Tok are "If you want to become famous, you have to get prepared to be slandered," and "Before posting, you should be prepared to be slandered," "If you are famous, it is impossible not to be slandered." I think that's right. Being famous through posts means that the posts will be seen by more people. Each person has different opinions, and you and others are different. On the contrary, your opinion may be totally unacceptable to someone else. Posting on the Internet means sending to an unspecified number of people, no matter how much you do not intend. </p>
<p class="langen" lang="en">
Slandering others on the Internet is defamation. Defamation may result in compensation. Never slander on the Internet. Think carefully about what you say on the Internet. Information published on the Internet is viewed by an unspecified number of people. It can be incredibly difficult to delete content once posted on the Internet. Even if you delete your post or account, the remarks you made on the internet will remain forever.
Slandering others on the Internet is defamation. Defamation may result in compensation. You should never slander on the Internet. Think carefully about what you will say on the Internet. Information published on the Internet is viewed by an unspecified number of people. It can be incredibly difficult to delete content once posted on the Internet. Even if you delete your post or your account, the remarks you made on the internet will remain forever.
</p>
<!-- End body -->
<footer>
<div id="back-to-previous" class="back-to-previous" style="display:inline-block;">
      <a href="javascript:history.go(-1);" class="back-to-previous-button"><span class="fas fa-arrow-left"></span></a>
  </div>
<div id="back-to-next" class="back-to-next" style="display:inline-block;">
      <a href="javascript:history.go(+1);" class="back-to-next-button"><span class="fas fa-arrow-right"></span></a>
  </div>
<div id="home-menu" class="home-menu" style="display:inline-block;">
      <a href="https://soratako.yunachannel.com/" class="home-menu-button"><span class="fas fa-home"></span></a>
  </div>
<div id="go-to-top" class="go-to-top" style="display:inline-block;">
      <a class="go-to-top-button"><span class="fas fa-arrow-circle-up"></span></a>
  </div>
</footer>
<script>
//上部へスムームスクロールする
const gototop = document.getElementById("go-to-top");
gototop.addEventListener("click", goToTop, false);
function goToTop() {
var x1 = x2 = x3 = 0;
var y1 = y2 = y3 = 0;
if (document.documentElement) {
x1 = document.documentElement.scrollLeft || 0;
y1 = document.documentElement.scrollTop || 0;
}
if (document.body) {
x2 = document.body.scrollLeft || 0;
y2 = document.body.scrollTop || 0;
}
x3 = window.scrollX || 0;
y3 = window.scrollY || 0;
var x = Math.max(x1, Math.max(x2, x3));
var y = Math.max(y1, Math.max(y2, y3));
window.scrollTo(Math.floor(x / 2), Math.floor(y / 2));
if (x > 0 || y > 0) {
window.setTimeout("goToTop()", 80);
}
}
</script>
<script>
//リファラ(アクセス元履歴)がない場合にボタン無効化
window.addEventListener("load", historyDisable, false);
function historyDisable(){
    browsehistory = window.history;
    let browsehistorycount = browsehistory.length - 1;
    if ( browsehistorycount ) {
	
    }else{
	const historybuttonprev = document.getElementById("back-to-previous");
	const historybuttonnext = document.getElementById("back-to-next");
	historybuttonprev.innerHTML = '<div id="fasdisabled" class="back-to-previous-button"><span class="fas fa-arrow-left"></span></div>';
	historybuttonnext.innerHTML = '<div id="fasdisabled" class="back-to-next-button"><span class="fas fa-arrow-right"></span></div>';
    }
}
</script>
<script>
//言語切り替え URLパラメータで判断
window.onload = function() {
const langparameter = location.search.substring(1);
const langele = document.documentElement.getAttribute("lang");
const langelelang = "lang=" + langele;
const langja = document.getElementsByClassName("langja");
const langen = document.getElementsByClassName("langen");
if (langparameter == langelelang) {
 for(var i = 0; i < langen.length; i++) {
 langen[i].style.display = "";
 }
 for(var i = 0; i < langja.length; i++) {
 langja[i].style.display = "none";
 }
    }else{
 for(var i = 0; i < langen.length; i++) {
 langen[i].style.display = "none";
 }
 for(var i = 0; i < langja.length; i++) {
 langja[i].style.display = "";
 }
    }
}
</script>
<div class="footer">
<p id="copyright">
&copy;(C) 2020<script>new Date().getFullYear()>2020&&document.write("-"+new Date().getFullYear());</script> Soratako.
</p>
</div>
<!-- div contents -->
</div>
<!-- /div contents -->
</body>
</html>