<?php
/**
 * デフォルトレイアウト
 */
?>
<?php $bcBaser->xmlHeader() ?>
<?php $bcBaser->docType() ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<?php $bcBaser->charset() ?>
<?php $bcBaser->title() ?>
<?php $bcBaser->metaDescription() ?>
<?php $bcBaser->metaKeywords() ?>
<?php $bcBaser->icon() ?>
<?php $bcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>
<?php $bcBaser->css('style') ?>
<?php if($bcBaser->isTop()): ?>
<?php $bcBaser->css('style1') ?>
<?php //$bcBaser->css('bxslider') ?>
<?php endif; ?>
<?php $bcBaser->css(array(
    'layout',
    'jquery.bxslider')) ?>
<?php $bcBaser->js(array(
    'jquery-1.4.4.min',
    'jquery.easing',
    'jquery.colorbox-min',
    'script',
    'rollover',
    'jquery.bxSlider',
    'jquery.bxslider.min',
    'jquery.easing.1.3',
    'jquery.fitvids',
    'startup')) ?>
<?php $bcBaser->scripts() ?>
<?php $bcBaser->element('google_analytics') ?>
</head>
<?php $bcBaser->func() ?>
<body id="<?php echo $bcBaser->getContentsName(true) ?>">

<?php $bcBaser->element('header') ?>

<div id="Page">

    <?php if($bcBaser->isTop()): ?>
        <?php $bcBaser->img("../img/itm_main_01.png") ?>
    <?php endif ?>

    <div id="Wrap" class="clearfix">
        <div id="Alfa">
            <div id="ContentsBody" class="clearfix">

            <?php if($bcBaser->isTop()): ?>
                <?php $bcBaser->element('toppage') ?><!--TOPPAGE-->
            <?php else: ?>
                <div id="Navigation">
                        <?php $bcBaser->element('navi',array('title_for_element'=>$bcBaser->getContentsTitle())); ?>
                </div>

                <div id="subpage"  ><!--それ以外ページ-->
                    <?php $bcBaser->content() ?>
                    <div class="to-top"> <a href="#Page">トップへ戻る</a> </div>
                </div>
            <?php endif ?>

            <?php $bcBaser->element('contents_navi') ?>
            </div><!--ContentsBody-->
        </div><!--Alfa-->


        <div id="Beta">
            <!-- SideBar -->
            <div id="SideBar">
                <div id="sidebox-bg-top"><?php $bcBaser->Img('side/sidebox_bg_top.png') ;?></div>
                    <div id="SideBox">
                        <?php $bcBaser->element('sidebox') ?>
                    </div>
                <div id="sidebox-bg-un"><?php $bcBaser->Img('side/sidebox_bg_un.png') ;?></div>
                <div class="link">
                <?php $bcBaser->element('widget_area',array('no'=>$widgetArea)) ?>
                </div>
            </div>
            <!-- end SideBar -->
        </div>
    </div><!--Wrarp-->

</div>
    <?php $bcBaser->element('footer') ?>
<?php echo $cakeDebug; ?>
</html>