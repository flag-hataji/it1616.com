<div id="Newsback" style="padding: 0 0 0 30px;">
<div style="padding-top:31px;"></div>
<?php foreach($posts as $post): ?>
<div style="padding-top:31px;">
	<p>
		<span style="margin:0 15px 0 18px; line-height:150%; color:#6A0000;"><?php $blog->postDate($post,"Y年m月d日") ?></span>
		<span><?php $blog->postTitle($post) ?></span>
	</p>
</div>
<?php endforeach; ?>
</div>