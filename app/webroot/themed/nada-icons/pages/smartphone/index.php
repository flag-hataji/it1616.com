<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('') ?>
<?php $bcBaser->setDescription('') ?>
<?php $bcBaser->setPageEditLink(6) ?>
<!-- BaserPageTagEnd -->

<div id="news" class="clearfix">
<div class="news" style="margin-right:28px;">
<h2 id="newsHead01">NEWS RELEASE</h2>
<div class="body">
<?php $bcBaser->blogPosts('news', 5) ?>
</div>
</div>
<div class="news">
<h2 id="newsHead02">baserCMS NEWS</h2>
<div class="body">
<?php $bcBaser->js('/s/feed/ajax/1') ?>
</div>
</div>
</div>