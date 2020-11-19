<?php
/*echo "<html><head></head><body><h1>Not Found</h1></body></html>";
exit;*/
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
<!--<h1 class="langjasimple" lang="simple"><ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>に<ruby><rb>関</rb><rt>かん</rt></ruby>するそらたこの<ruby><rb>考</rb><rt>かんが</rt></ruby>え</h1>-->
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
<!--<p class="langja" lang="ja">2020<ruby><rb>年</rb><rt>ねん</rt></ruby><ruby><rb>現在</rb><rt>げんざい</rt></ruby>、インターネット<ruby><rb>上</rb><rt>じょう</rt></ruby>でよく<ruby><rb>見</rb><rt>み</rt></ruby>られる、「<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>」についてのそらたこの<ruby><rb>考</rb><rt>かんが</rt></ruby>えです。</p>
<p class="langja" lang="ja">Tik TokなどのSNSでよく<ruby><rb>見</rb><rt>み</rt></ruby>かける<ruby><rb>言葉</rb><rt>ことば</rt></ruby>として、「<ruby><rb>有名</rb><rt>ゆうめい</rt></ruby>になったら<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>は<ruby><rb>仕方</rb><rt>しかた</rt></ruby>ない」、「<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>される<ruby><rb>覚悟</rb><rt>かくご</rt></ruby>を<ruby><rb>持</rb><rt>も</rt></ruby>って<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>をするべきだ」というものがあります。<ruby><rb>私</rb><rt>わたし</rt></ruby>はこの<ruby><rb>言葉</rb><rt>ことば</rt></ruby>を<ruby><rb>聞</rb><rt>き</rt></ruby>いて、その<ruby><rb>通</rb><rt>とお</rt></ruby>りだと<ruby><rb>思</rb><rt>おも</rt></ruby>います。<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>を<ruby><rb>通</rb><rt>とお</rt></ruby>して<ruby><rb>有名</rb><rt>ゆうめい</rt></ruby>になるということは<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>がより<ruby><rb>多</rb><rt>おお</rt></ruby>くの<ruby><rb>人</rb><rt>ひと</rt></ruby>の<ruby><rb>目</rb><rt>め</rt></ruby>に<ruby><rb>入</rb><rt>はい</rt></ruby>ると<ruby><rb>言</rb><rt>い</rt></ruby>うことです。<ruby><rb>世</rb><rt>よ</rt></ruby>の<ruby><rb>中</rb><rt>なか</rt></ruby>にはさまざまな<ruby><rb>考</rb><rt>かんが</rt></ruby>えがあり、<ruby><rb>1人</rb><rt>ひとり</rt></ruby>1<ruby><rb>人</rb><rt>にん</rt></ruby>の<ruby><rb>考</rb><rt>かんが</rt></ruby>えは<ruby><rb>皆</rb><rt>みな</rt></ruby><ruby><rb>違</rb><rt>ちが</rt></ruby>います。あなたにとっての<ruby><rb>当</rb><rt>あ</rt></ruby>たり<ruby><rb>前</rb><rt>まえ</rt></ruby>のことはあなた<ruby><rb>以外</rb><rt>いがい</rt></ruby>の<ruby><rb>全</rb><rt>すべ</rt></ruby>ての<ruby><rb>人</rb><rt>ひと</rt></ruby>にとっての<ruby><rb>当</rb><rt>あ</rt></ruby>たり<ruby><rb>前</rb><rt>まえ</rt></ruby>ではありません。それどころか<ruby><rb>他</rb><rt>た</rt></ruby>の<ruby><rb>誰</rb><rt>だれ</rt></ruby>かにとってはあり<ruby><rb>得</rb><rt>え</rt></ruby>ないことかもしれません。さまざまな<ruby><rb>考</rb><rt>かんが</rt></ruby>えを<ruby><rb>持</rb><rt>も</rt></ruby>つ<ruby><rb>人</rb><rt>ひと</rt></ruby>の<ruby><rb>中</rb><rt>なか</rt></ruby>には<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>と<ruby><rb>気</rb><rt>き</rt></ruby>づかず、<ruby><rb>相手</rb><rt>あいて</rt></ruby>を<ruby><rb>傷</rb><rt>きず</rt></ruby>つけていると<ruby><rb>知</rb><rt>し</rt></ruby>らずに<ruby><rb>発言</rb><rt>はつげん</rt></ruby>している<ruby><rb>人</rb><rt>ひと</rt></ruby>もいます。<ruby><rb>相手</rb><rt>あいて</rt></ruby>を<ruby><rb>罵</rb><rt>ののし</rt></ruby>って<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>することを<ruby><rb>生</rb><rt>い</rt></ruby>きがいとしているような<ruby><rb>頭</rb><rt>あたま</rt></ruby>のおかしい<ruby><rb>人</rb><rt>ひと</rt></ruby>もいると<ruby><rb>思</rb><rt>おも</rt></ruby>います。YouTubeの<ruby><rb>低</rb><rt>てい</rt></ruby><ruby><rb>評価</rb><rt>ひょうか</rt></ruby>で<ruby><rb>考</rb><rt>かんが</rt></ruby>えてみてください。10<ruby><rb>万</rb><rt>まん</rt></ruby>、100<ruby><rb>万</rb><rt>まん</rt></ruby><ruby><rb>再生</rb><rt>さいせい</rt></ruby>されている<ruby><rb>動画</rb><rt>どうが</rt></ruby>で<ruby><rb>低</rb><rt>てい</rt></ruby><ruby><rb>評価</rb><rt>ひょうか</rt></ruby>が1つもついていないものがありますか？まずないと<ruby><rb>言</rb><rt>い</rt></ruby>っていいでしょう。その<ruby><rb>動画</rb><rt>どうが</rt></ruby>があなたにとってどんなにいいものであるとしても<ruby><rb>他</rb><rt>た</rt></ruby>の<ruby><rb>誰</rb><rt>だれ</rt></ruby>かにとっては<ruby><rb>低</rb><rt>てい</rt></ruby><ruby><rb>評価</rb><rt>ひょうか</rt></ruby>をつけるに<ruby><rb>値</rb><rt>あたい</rt></ruby>する<ruby><rb>動画</rb><rt>どうが</rt></ruby>であるということです。このように<ruby><rb>自分</rb><rt>じぶん</rt></ruby>と<ruby><rb>違</rb><rt>ちが</rt></ruby>う<ruby><rb>考</rb><rt>かんが</rt></ruby>えを<ruby><rb>持</rb><rt>も</rt></ruby>つ<ruby><rb>人</rb><rt>ひと</rt></ruby>は<ruby><rb>必</rb><rt>かなら</rt></ruby>ずいて、それを<ruby><rb>認</rb><rt>みと</rt></ruby>めなくてはいけません。<ruby><rb>繰</rb><rt>く</rt></ruby>り<ruby><rb>返</rb><rt>かえ</rt></ruby>しますが、<ruby><rb>有名</rb><rt>ゆうめい</rt></ruby>になるということは<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>がより<ruby><rb>多</rb><rt>おお</rt></ruby>くの<ruby><rb>人</rb><rt>ひと</rt></ruby>の<ruby><rb>目</rb><rt>め</rt></ruby>にとまることです。インターネットに<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>をするということはいくら<ruby><rb>自分</rb><rt>じぶん</rt></ruby>が<ruby><rb>意図</rb><rt>いと</rt></ruby>していないとしても<ruby><rb>自分</rb><rt>じぶん</rt></ruby><ruby><rb>以外</rb><rt>いがい</rt></ruby>の<ruby><rb>不</rb><rt>ふ</rt></ruby><ruby><rb>特定</rb><rt>とくてい</rt></ruby><ruby><rb>多数</rb><rt>たすう</rt></ruby>の<ruby><rb>誰</rb><rt>だれ</rt></ruby>かに<ruby><rb>向</rb><rt>む</rt></ruby>けて<ruby><rb>発信</rb><rt>はっしん</rt></ruby>するということです。<ruby><rb>自分</rb><rt>じぶん</rt></ruby>と<ruby><rb>違</rb><rt>ちが</rt></ruby>う<ruby><rb>考</rb><rt>かんが</rt></ruby>えを<ruby><rb>持</rb><rt>も</rt></ruby>つ<ruby><rb>人</rb><rt>ひと</rt></ruby>が<ruby><rb>自分</rb><rt>じぶん</rt></ruby>が<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>、<ruby><rb>発信</rb><rt>はっしん</rt></ruby>した<ruby><rb>内容</rb><rt>ないよう</rt></ruby>を<ruby><rb>目</rb><rt>め</rt></ruby>にしたとき、<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>をしてくる<ruby><rb>可能</rb><rt>かのう</rt></ruby><ruby><rb>性</rb><rt>せい</rt></ruby>は<ruby><rb>十分</rb><rt>じゅうぶん</rt></ruby>あります。より<ruby><rb>多</rb><rt>おお</rt></ruby>くの<ruby><rb>人</rb><rt>ひと</rt></ruby>がその<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>、<ruby><rb>発信</rb><rt>はっしん</rt></ruby>を<ruby><rb>見</rb><rt>み</rt></ruby>るということは<ruby><rb>誰</rb><rt>だれ</rt></ruby>かに<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>される<ruby><rb>可能</rb><rt>かのう</rt></ruby><ruby><rb>性</rb><rt>せい</rt></ruby>がより<ruby><rb>高</rb><rt>たか</rt></ruby>まるということです。そのため、インターネットに<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>すること、<ruby><rb>有名</rb><rt>ゆうめい</rt></ruby>になること、には<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>される<ruby><rb>覚悟</rb><rt>かくご</rt></ruby>を<ruby><rb>持</rb><rt>も</rt></ruby>つ<ruby><rb>必要</rb><rt>ひつよう</rt></ruby>があると<ruby><rb>思</rb><rt>おも</rt></ruby>います。<br>
では、それらの<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>を<ruby><rb>当</rb><rt>あ</rt></ruby>たり<ruby><rb>前</rb><rt>まえ</rt></ruby>にしていいのでしょうか？<ruby><rb>当</rb><rt>あ</rt></ruby>たり<ruby><rb>前</rb><rt>まえ</rt></ruby>にしてはいけないと<ruby><rb>私</rb><rt>わたし</rt></ruby>は<ruby><rb>思</rb><rt>おも</rt></ruby>います。それらの<ruby><rb>言葉</rb><rt>ことば</rt></ruby>を<ruby><rb>使</rb><rt>つか</rt></ruby>って<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>を<ruby><rb>正当</rb><rt>せいとう</rt></ruby><ruby><rb>化</rb><rt>か</rt></ruby>していいのでしょうか？<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>を<ruby><rb>正当</rb><rt>せいとう</rt></ruby><ruby><rb>化</rb><rt>か</rt></ruby>してはいけないと<ruby><rb>思</rb><rt>おも</rt></ruby>います。<ruby><rb>自分</rb><rt>じぶん</rt></ruby>と<ruby><rb>違</rb><rt>ちが</rt></ruby>う、<ruby><rb>自分</rb><rt>じぶん</rt></ruby>の<ruby><rb>当</rb><rt>あ</rt></ruby>たり<ruby><rb>前</rb><rt>まえ</rt></ruby>と<ruby><rb>違</rb><rt>ちが</rt></ruby>う、それを<ruby><rb>認</rb><rt>みと</rt></ruby>めず<ruby><rb>批判</rb><rt>ひはん</rt></ruby>する<ruby><rb>発言</rb><rt>はつげん</rt></ruby>が<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>につながります。<ruby><rb>相手</rb><rt>あいて</rt></ruby>の<ruby><rb>考</rb><rt>かんが</rt></ruby>えを<ruby><rb>認</rb><rt>みと</rt></ruby>めそれを<ruby><rb>尊重</rb><rt>そんちょう</rt></ruby>することができなければ、<ruby><rb>自分</rb><rt>じぶん</rt></ruby>が<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>をする<ruby><rb>側</rb><rt>がわ</rt></ruby>になってしまいます。<ruby><rb>相手</rb><rt>あいて</rt></ruby>の<ruby><rb>考</rb><rt>かんが</rt></ruby>えを<ruby><rb>認</rb><rt>みと</rt></ruby>め、<ruby><rb>相手</rb><rt>あいて</rt></ruby>にも<ruby><rb>自分</rb><rt>じぶん</rt></ruby>の<ruby><rb>考</rb><rt>かんが</rt></ruby>えを<ruby><rb>認</rb><rt>みと</rt></ruby>めてもらう<ruby><rb>必要</rb><rt>ひつよう</rt></ruby>があります。<ruby><rb>認</rb><rt>みと</rt></ruby>めるとはそういう<ruby><rb>考</rb><rt>かんが</rt></ruby>えがあることを<ruby><rb>理解</rb><rt>りかい</rt></ruby>することです。<ruby><rb>納得</rb><rt>なっとく</rt></ruby>できないのであれば、<ruby><rb>自分</rb><rt>じぶん</rt></ruby>の<ruby><rb>意見</rb><rt>いけん</rt></ruby>にする<ruby><rb>必要</rb><rt>ひつよう</rt></ruby>はありません。ただ、<ruby><rb>自分</rb><rt>じぶん</rt></ruby>と<ruby><rb>違</rb><rt>ちが</rt></ruby>う<ruby><rb>意見</rb><rt>いけん</rt></ruby>を<ruby><rb>言</rb><rt>い</rt></ruby>った<ruby><rb>相手</rb><rt>あいて</rt></ruby>を<ruby><rb>罵</rb><rt>ののし</rt></ruby>ったり、<ruby><rb>馬鹿</rb><rt>ばか</rt></ruby>にしたり、<ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>したり、しないでください。Tik TokやYouTubeなどではコメント<ruby><rb>欄</rb><rt>らん</rt></ruby>を<ruby><rb>閉鎖</rb><rt>へいさ</rt></ruby>することで<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>をされないことができます。しかし、この<ruby><rb>方法</rb><rt>ほうほう</rt></ruby>は<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby><ruby><rb>以外</rb><rt>いがい</rt></ruby>の<ruby><rb>意見</rb><rt>いけん</rt></ruby>や<ruby><rb>感想</rb><rt>かんそう</rt></ruby>も<ruby><rb>一律</rb><rt>いちりつ</rt></ruby>に<ruby><rb>省</rb><rt>はぶ</rt></ruby>いてしまいます。Tik TokやTwitterなどでは<ruby><rb>特定</rb><rt>とくてい</rt></ruby>の<ruby><rb>自分</rb><rt>じぶん</rt></ruby>が<ruby><rb>繋</rb><rt>つな</rt></ruby>がっている<ruby><rb>人</rb><rt>ひと</rt></ruby>からのコメントのみを<ruby><rb>受</rb><rt>う</rt></ruby>けつけつけることができます。<ruby><rb>自分</rb><rt>じぶん</rt></ruby>と<ruby><rb>異</rb><rt>こと</rt></ruby>なる<ruby><rb>意見</rb><rt>いけん</rt></ruby>は<ruby><rb>入</rb><rt>はい</rt></ruby>りにくくなるでしょう。これらの<ruby><rb>機能</rb><rt>きのう</rt></ruby>やブロック、ミュート<ruby><rb>機能</rb><rt>きのう</rt></ruby>を<ruby><rb>使</rb><rt>つか</rt></ruby>うことは<ruby><rb>決</rb><rt>けっ</rt></ruby>して<ruby><rb>逃</rb><rt>に</rt></ruby>げではありません。<ruby><rb>使</rb><rt>つか</rt></ruby>うことが<ruby><rb>自分</rb><rt>じぶん</rt></ruby>の<ruby><rb>安全</rb><rt>あんぜん</rt></ruby>につながるかもしれません。しかし、これらの<ruby><rb>機能</rb><rt>きのう</rt></ruby>を<ruby><rb>使</rb><rt>つか</rt></ruby>わずとも、それぞれがお<ruby><rb>互</rb><rt>たが</rt></ruby>いを<ruby><rb>認</rb><rt>みと</rt></ruby>め<ruby><rb>合</rb><rt>あ</rt></ruby>えて、<ruby><rb>暖</rb><rt>あたた</rt></ruby>かいコメントや<ruby><rb>素晴</rb><rt>すば</rt></ruby>らしいコメントに<ruby><rb>溢</rb><rt>あふ</rt></ruby>れたコメント<ruby><rb>欄</rb><rt>らん</rt></ruby>になったらSNSはもっと<ruby><rb>便利</rb><rt>べんり</rt></ruby>で<ruby><rb>多</rb><rt>おお</rt></ruby>くの<ruby><rb>人</rb><rt>ひと</rt></ruby>の<ruby><rb>役</rb><rt>やく</rt></ruby>に<ruby><rb>立</rb><rt>た</rt></ruby>つものになるでしょう。<br><ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>は<ruby><rb>有名</rb><rt>ゆうめい</rt></ruby>になった<ruby><rb>証</rb><rt>あかし</rt></ruby>であるというい<ruby><rb>方</rb><rt>いかた</rt></ruby>をする<ruby><rb>人</rb><rt>ひと</rt></ruby>がいます。<ruby><rb>確</rb><rt>たし</rt></ruby>かにそういうい<ruby><rb>方</rb><rt>いかた</rt></ruby>もできると<ruby><rb>思</rb><rt>おも</rt></ruby>います。<ruby><rb>有名</rb><rt>ゆうめい</rt></ruby>になったことで、より<ruby><rb>多</rb><rt>おお</rt></ruby>くの<ruby><rb>人</rb><rt>ひと</rt></ruby>から、より<ruby><rb>多</rb><rt>おお</rt></ruby>くの<ruby><rb>視点</rb><rt>してん</rt></ruby>から<ruby><rb>意見</rb><rt>いけん</rt></ruby>がよせられる、その<ruby><rb>意見</rb><rt>いけん</rt></ruby>の<ruby><rb>中</rb><rt>なか</rt></ruby>に<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>が<ruby><rb>含</rb><rt>ふく</rt></ruby>まれているのかもしれません。しかし、<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>は<ruby><rb>当</rb><rt>あ</rt></ruby>たり<ruby><rb>前</rb><rt>まえ</rt></ruby>にしていいことではありません。その<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>を<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>した<ruby><rb>人</rb><rt>ひと</rt></ruby>には<ruby><rb>他人</rb><rt>たにん</rt></ruby>を<ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>する<ruby><rb>意図</rb><rt>いと</rt></ruby>はなかったのかもしれません、しかし、<ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>する<ruby><rb>意図</rb><rt>いと</rt></ruby>があったとしてもなかったとしても<ruby><rb>言</rb><rt>い</rt></ruby>われた<ruby><rb>相手</rb><rt>あいて</rt></ruby>は<ruby><rb>傷</rb><rt>きず</rt></ruby>つきます。その<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby><ruby><rb>見</rb><rt>み</rt></ruby>た<ruby><rb>人</rb><rt>ひと</rt></ruby>もいい<ruby><rb>気分</rb><rt>きぶん</rt></ruby>にはなりません。あなたが<ruby><rb>言</rb><rt>い</rt></ruby>った<ruby><rb>言葉</rb><rt>ことば</rt></ruby>が<ruby><rb>人</rb><rt>ひと</rt></ruby>を<ruby><rb>深</rb><rt>ふか</rt></ruby>く<ruby><rb>傷</rb><rt>きず</rt></ruby>つけます。もしかしたら、<ruby><rb>軽</rb><rt>かる</rt></ruby>い<ruby><rb>気持</rb><rt>きも</rt></ruby>ちで<ruby><rb>言</rb><rt>い</rt></ruby>ったのかもしれません。それでも、<ruby><rb>言</rb><rt>い</rt></ruby>われた<ruby><rb>側</rb><rt>がわ</rt></ruby>は<ruby><rb>軽</rb><rt>かる</rt></ruby>くすませられる<ruby><rb>言葉</rb><rt>ことば</rt></ruby>ではないです。<ruby><rb>発言</rb><rt>はつげん</rt></ruby>の<ruby><rb>前</rb><rt>まえ</rt></ruby>にしっかりと<ruby><rb>考</rb><rt>かんが</rt></ruby>えて、その<ruby><rb>発言</rb><rt>はつげん</rt></ruby>が<ruby><rb>本当</rb><rt>ほんとう</rt></ruby>に<ruby><rb>必要</rb><rt>ひつよう</rt></ruby>なのか、その<ruby><rb>発言</rb><rt>はつげん</rt></ruby>によって<ruby><rb>傷</rb><rt>きず</rt></ruby>つく<ruby><rb>人</rb><rt>ひと</rt></ruby>はいないか、その<ruby><rb>発言</rb><rt>はつげん</rt></ruby>をして<ruby><rb>自分</rb><rt>じぶん</rt></ruby>はどうなるのか、などを<ruby><rb>確認</rb><rt>かくにん</rt></ruby>してください。</p>
<p class="langja" lang="ja">あなたがもし、<ruby><rb>他</rb><rt>た</rt></ruby>の<ruby><rb>誰</rb><rt>だれ</rt></ruby>かよりちょっと<ruby><rb>影響</rb><rt>えいきょう</rt></ruby><ruby><rb>力</rb><rt>りょく</rt></ruby>があるのなら、<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>をやめようと<ruby><rb>呼</rb><rt>よ</rt></ruby>びかけてみてください。あなたの<ruby><rb>身近</rb><rt>みぢか</rt></ruby>な<ruby><rb>人</rb><rt>ひと</rt></ruby>や<ruby><rb>友達</rb><rt>ともだち</rt></ruby>と<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>がなぜダメなのかについて<ruby><rb>話題</rb><rt>わだい</rt></ruby>にしてみてください。あなたのちょっとの<ruby><rb>働</rb><rt>はたら</rt></ruby>きかけで<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>を<ruby><rb>少</rb><rt>すく</rt></ruby>なくできます。</p>

<p class="langja" lang="ja">インターネットで<ruby><rb>他人</rb><rt>たにん</rt></ruby>を<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>することは<ruby><rb>名誉</rb><rt>めいよ</rt></ruby><ruby><rb>毀損</rb><rt>きそん</rt></ruby>に<ruby><rb>当</rb><rt>あ</rt></ruby>たります。<ruby><rb>名誉</rb><rt>めいよ</rt></ruby><ruby><rb>毀損</rb><rt>きそん</rt></ruby>をすると<ruby><rb>賠償</rb><rt>ばいしょう</rt></ruby>を<ruby><rb>命</rb><rt>めい</rt></ruby>じられる<ruby><rb>可能</rb><rt>かのう</rt></ruby><ruby><rb>性</rb><rt>せい</rt></ruby>があります。<ruby><rb>安易</rb><rt>あんい</rt></ruby>な<ruby><rb>発言</rb><rt>はつげん</rt></ruby>が<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>とみなされて、<ruby><rb>賠償</rb><rt>ばいしょう</rt></ruby>をしなければいけなくなります。インターネットでの<ruby><rb>誹謗</rb><rt>ひぼう</rt></ruby><ruby><rb>中傷</rb><rt>ちゅうしょう</rt></ruby>は、<ruby><rb>絶対</rb><rt>ぜったい</rt></ruby>にやめましょう。インターネットでの<ruby><rb>発言</rb><rt>はつげん</rt></ruby>はしっかりと<ruby><rb>考</rb><rt>かんが</rt></ruby>えてしましょう。インターネットは<ruby><rb>便利</rb><rt>べんり</rt></ruby>なツールですが、<ruby><rb>非常</rb><rt>ひじょう</rt></ruby>に<ruby><rb>厄介</rb><rt>やっかい</rt></ruby>で<ruby><rb>奥</rb><rt>おく</rt></ruby>の<ruby><rb>深</rb><rt>ふか</rt></ruby>いツールでもあります。インターネットでは<ruby><rb>一度</rb><rt>いちど</rt></ruby><ruby><rb>送信</rb><rt>そうしん</rt></ruby>したことは<ruby><rb>取</rb><rt>と</rt></ruby>り<ruby><rb>消</rb><rt>け</rt></ruby>すことができません。<ruby><rb>永遠</rb><rt>えいえん</rt></ruby>に<ruby><rb>残</rb><rt>のこ</rt></ruby>り<ruby><rb>続</rb><rt>つづ</rt></ruby>けます。<ruby><rb>投稿</rb><rt>とうこう</rt></ruby>の<ruby><rb>削除</rb><rt>さくじょ</rt></ruby>やアカウントの<ruby><rb>削除</rb><rt>さくじょ</rt></ruby>をしても<ruby><rb>自分</rb><rt>じぶん</rt></ruby>がした<ruby><rb>発言</rb><rt>はつげん</rt></ruby>は<ruby><rb>完全</rb><rt>かんぜん</rt></ruby>には<ruby><rb>消</rb><rt>き</rt></ruby>えません。<ruby><rb>安易</rb><rt>あんい</rt></ruby>な<ruby><rb>発言</rb><rt>はつげん</rt></ruby>は<ruby><rb>自分</rb><rt>じぶん</rt></ruby>の<ruby><rb>身</rb><rt>み</rt></ruby>を<ruby><rb>滅</rb><rt>ほろ</rt></ruby>ぼします。</p>-->
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
const simple = document.getElementsByClassName("langjasimple");
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