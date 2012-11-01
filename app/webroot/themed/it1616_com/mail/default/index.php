<?php
/**
 * メールフォーム
 */
$html->css('jquery-ui/ui.all', null, null, false);
$bcBaser->js(array('jquery-ui-1.8.14.custom.min','i18n/ui.datepicker-ja'), false);
$mail->indexFields($mailContent['MailContent']['id']);
?>

<h2 class="contents-head" style="padding-bottom:20px;">
<?php $bcBaser->img('tb_contact.png',array('alt'=>'お問合せ','width'=>'712px','height'=>'40px')) ?></h2>

<h3 class="contents-head">入力フォーム</h3>

<div class="section mail-description">
	<?php $mail->description() ?>
</div>

<div class="section">
	<?php $bcBaser->flash() ?>
	<?php $bcBaser->element('mail_form') ?>
</div>
