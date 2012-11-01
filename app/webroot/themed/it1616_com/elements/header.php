<div class="hline">
    <div id="Header">
        <?php //$bcBaser->element('search') ?>
        <div id="HeaderKakugen">
        <?php echo "2012/00/00の格言： 事実がわかっていなくとも前進することだ。：ヘンリー・フォード " ?></div>
        <div id="HeaderTel">お問い合わせ<?php $bcBaser->img('header_tel.png') ?>TEL 092-525-0081</div>
    </div><!--Header-->

    <?php $bcBaser->element('global_menu') ?>

	<?php if(!$bcBaser->isTop()): ?>
    	<div id="Navigation">
    		<?php $bcBaser->element('navi',array('title_for_element'=>$bcBaser->getContentsTitle())); ?>
    	</div>
	<?php endif ?>
</div><!--hline-->