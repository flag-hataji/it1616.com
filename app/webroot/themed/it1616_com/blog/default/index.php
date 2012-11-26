<?php
/**
 * ブログトップ
 */
$bcBaser->css('colorbox/colorbox', null, null, false);
$bcBaser->js('jquery.colorbox-min', false);
$bcBaser->setDescription($blog->getDescription());
?>
<!-- blog title -->

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>

<!-- blog description -->
<?php if($blog->descriptionExists()): ?>
<div class="blog-description">
	<?php $blog->description() ?>
</div>
<?php endif ?>

<?php if(!empty($posts)): ?>
<?php foreach($posts as $post): ?>
<div class="post">
	<h4 class="contents-head">
		<?php $blog->postTitle($post) ?>
	</h4>
	<?php $blog->postContent($post,false,true) ?>
	<div class="meta"> <span>
		<?php $blog->category($post) ?>
		&nbsp;
		<?php $blog->postDate($post,"Y年m月d日") ?>
		&nbsp;
		<?php $blog->author($post) ?>
		</span> </div>
	<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>
</div>
<?php endforeach; ?>
<?php else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>
<!-- pagination -->
<?php $bcBaser->pagination('simple'); ?>