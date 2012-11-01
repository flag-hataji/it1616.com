
<div class="clearfix">
<div id="sidebox-app">
<?php $bcBaser->link($bcBaser->getImg('side/app_01.png',array('title'=>'app01','alt'=>'アプリ01')),'/app01') ;?>
<?php $bcBaser->link($bcBaser->getImg('side/app_02.png',array('title'=>'app02','alt'=>'アプリ02')),'/app02') ;?>
<?php $bcBaser->link($bcBaser->getImg('side/right_motiv.png',array('title'=>'モチベーションシート','alt'=>'モチベーションシート')),'/ms') ;?>
</div>
</div>
<div id="facebook">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=227292817297961";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/motivation.sheet?fref=ts" data-width="235" data-show-faces="true" data-stream="true" data-header="true"></div>
</div>

<a class="twitter-timeline" href="https://twitter.com/TaroOkazaki" data-widget-id="261122237334163456">@TaroOkazaki からのツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<div id="sidebox-contact"><?php $bcBaser->link($bcBaser->getImg('side/right_tel.png',array('title'=>'お問い合わせ','alt'=>'お問い合わせ')),'/contact') ;?></div>

<div id="sidebox-books">
    <div id="sidebox-books-top"><?php $bcBaser->Img('side/right_book_bg_top.png') ;?></div>
    aaaa
    <div id="sidebox-books-un"><?php $bcBaser->Img('side/right_book_bg_un.png') ;?></div>
</div>

</div>
