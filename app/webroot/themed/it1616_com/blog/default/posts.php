<div >
<div class="top-news-title">What's New!<span class="more"><a href="/news/">>>もっと見る</span></a></div>
<?php foreach($posts as $post): ?>
<div id="top-news-links">
    <div class="top-news-new">
        <?php $bcBaser->img("top/new.gif") ?>
    </div>
    <div class="top-news-txt">
    <p>
        <span><?php $blog->postDate($post,"Y/m/d") ?></span>
    </p>
    <p>
        <span><?php $blog->postTitle($post) ?></span>
    </p>
    </div>
</div>
<?php endforeach; ?>
</div>