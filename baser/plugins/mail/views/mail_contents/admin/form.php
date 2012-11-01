<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] メールコンテンツ フォーム
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.mail.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<script type="text/javascript">
$(window).load(function() {
	$("#MailContentName").focus();
});
$(function(){
	$('input[name="data[MailContent][sender_1_]"]').click(mailContentSender1ClickHandler);
	$("#MailContentSender1").hide();

	if($('input[name="data[MailContent][sender_1_]"]:checked').val()===undefined){
		if($("#MailContentSender1").val()!=''){
			$("#MailContentSender11").attr('checked',true);
		}else{
			$("#MailContentSender10").attr('checked',true);
		}
	}
	$("#EditLayout").click(function(){
		if(confirm('メールフォーム設定を保存して、レイアウトテンプレート '+$("#MailContentLayoutTemplate").val()+' の編集画面に移動します。よろしいですか？')){
			$("#MailContentEditLayout").val(1);
			$("#MailContentEditMailForm").val('');
			$("#MailContentEditMail").val('');
			$("#MailContentEditForm").submit();
		}
	});
	$("#EditForm").click(function(){
		if(confirm('メールフォーム設定を保存して、メールフォームテンプレート '+$("#MailContentFormTemplate").val()+' の編集画面に移動します。よろしいですか？')){
			$("#MailContentEditLayout").val('');
			$("#MailContentEditMailForm").val(1);
			$("#MailContentEditMail").val('');
			$("#MailContentEditForm").submit();
		}
	});
	$("#EditMail").click(function(){
		if(confirm('メールフォーム設定を保存して、送信メールテンプレート '+$("#MailContentMailTemplate").val()+' の編集画面に移動します。よろしいですか？')){
			$("#MailContentEditLayout").val('');
			$("#MailContentEditMailForm").val('');
			$("#MailContentEditMail").val(1);
			$("#MailContentEditForm").submit();
		}
	});
	mailContentSender1ClickHandler();
});

function mailContentSender1ClickHandler(){
	if($('input[name="data[MailContent][sender_1_]"]:checked').val()=='1'){
		$("#MailContentSender1").slideDown(100);
	}else{
		$("#MailContentSender1").slideUp(100);
	}
}
</script>
<?php if($this->action == 'admin_edit'): ?>
<div class="em-box align-left">このメールフォームのURL：
		<?php $bcBaser->link(
				$bcBaser->getUri('/' . $mailContent['MailContent']['name'] . '/index'), 
				'/' . $mailContent['MailContent']['name'] . '/index',
				array('target'=>'_blank')) ?>
</div>
<?php endif ?>

<!-- form -->
<h2>基本項目</h2>

<?php echo $bcForm->create('MailContent') ?>
<div class="section">
	<table cellpadding="0" cellspacing="0" id="FormTable" class="form-table">
	<?php if($this->action == 'admin_edit'): ?>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.id', 'NO') ?></th>
			<td class="col-input">
				<?php echo $bcForm->value('MailContent.id') ?>
				<?php echo $bcForm->input('MailContent.id', array('type' => 'hidden')) ?>
			</td>
		</tr>
	<?php endif; ?>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.name', 'メールフォームアカウント名') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.name', array('type' => 'text', 'size' => 40, 'maxlength' => 255)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpName', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.name') ?>
				<div id="helptextName" class="helptext">
					<ul>
						<li>メールフォームのURLに利用します。<br />
							<div class="example-box">(例)メールフォームアカウント名が test の場合<br />http://{baserCMS設置URL}/test/index</div></li>
						<li>半角英数字、ハイフン、アンダースコアで入力してください。</li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.title', 'メールフォームタイトル') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.title', array('type' => 'text', 'size' => 40, 'maxlength' => 255)) ?>
				<?php echo $bcForm->error('MailContent.title') ?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.description', 'メールフォーム説明文') ?></th>
			<td class="col-input">
				<?php echo $bcForm->ckeditor('MailContent.description', null, array('width' => 'auto', 'height' => '120px', 'type' => 'simple')) ?>
				<?php echo $bcForm->error('MailContent.description') ?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.sender_1', '送信先メールアドレス') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.sender_1_', array(
						'type'		=> 'radio',
						'options'	=> array('0' => '管理者用メールアドレスに送信する', '1' => '別のメールアドレスに送信する'),
						'legend'	=> false,
						'separator'	=> '<br />')) ?><br />
				<?php echo $bcForm->input('MailContent.sender_1', array('type' => 'text', 'size' => 40, 'maxlength' => 255)) ?>
				<?php echo $bcForm->error('MailContent.sender_1') ?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.sender_name', '送信先名') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.sender_name', array('type' => 'text', 'size' => 80, 'maxlength' => 255)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpSenderName', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.sender_name') ?>
				<div id="helptextSenderName" class="helptext">自動返信メールの送信者に表示します。</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.subject_user', '自動返信メール<br />件名<br />[ユーザー宛]') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.subject_user', array('type' => 'text', 'size' => 80)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpSubjectUser', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.subject_user') ?>
				<div id="helptextSubjectUser" class="helptext">ユーザー宛の自動返信メールの件名に表示します。</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.subject_admin', '自動送信メール<br />件名<br />[管理者宛]') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.subject_admin', array('type' => 'text', 'size' => 80)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpSubjectAdmin', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.subject_admin') ?>
				<div id="helptextSubjectAdmin" class="helptext">管理者宛の自動送信メールの件名に表示します。</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.redirect_url', 'リダイレクトURL') ?></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.redirect_url', array('type' => 'text', 'size' => 80, 'maxlength' => 255)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpRedirectUrl', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.redirect_url') ?>
				<div id="helptextRedirectUrl" class="helptext">
					<ul>
						<li>メール送信後、別のURLにリダイレクトする場合、ここにURLを指定します。</li>
						<li>httpからの完全なURLを指定してください。</li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.auth_capthca', 'イメージ認証') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.auth_captcha', array('type' => 'radio', 'options' => $bcText->booleanDoList('利用'), 'legend' => false)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpAuthCaptcha', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.auth_captcha') ?>
				<div id="helptextAuthCaptcha" class="helptext">
					<ul>
						<li>メールフォーム送信の際、表示された画像の文字入力させる事で認証を行ないます。</li>
						<li>スパムなどいたずら送信が多いが多い場合に設定すると便利です。</li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.ssl_on', 'SSL通信') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.ssl_on', array('type' => 'radio', 'options' => $bcText->booleanDoList('利用'), 'legend'=>false)) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpSslOn', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.ssl_on', 
						'SSL通信を利用するには、'.$bcBaser->getLink('システム設定', array('controller'=>'site_configs', 'action'=>'form', 'plugin'=>null), array('target'=>'_blank')).'で、
						事前にSSL通信用のWebサイトURLを指定してください。', array('escape'=>false)) ?>
				<div id="helptextSslOn" class="helptext">
					管理者ページでSSLを利用する場合は、事前にSSLの申込、設定が必要です。また、SSL通信で利用するURLをシステム設定で指定している必要があります。
				</div>
			</td>
		</tr>
	</table>	
</div>

<h2 class="btn-slide-form"><a href="javascript:void(0)" id="formOption">オプション</a></h2>
<div class="section">
	<table cellpadding="0" cellspacing="0" class="form-table slide-body" id="formOptionBody">
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.sender_2', 'BCC用送信先メールアドレス') ?></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.sender_2', array('type' => 'text', 'size' => 80, 'maxlength' => 255)) ?>
				<?php echo $html->image('admin/icn_help.png',array('id' => 'helpSender2', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.sender_2') ?>
				<div id="helptextSender2" class="helptext">
					<ul><li>BCC（ブラインドカーボンコピー）用のメールアドレスを指定します。</li>
						<li>複数の送信先を指定するには、カンマで区切って入力します。</li></ul>
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.widget_area', 'ウィジェットエリア') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.widget_area', array('type' => 'select', 'options' => $bcForm->getControlsource('WidgetArea.id') , 'empty' => 'サイト基本設定に従う')) ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpWidgetArea', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.widget_area') ?>
				<div id="helptextWidgetArea" class="helptext">
					メールコンテンツで利用するウィジェットエリアを指定します。<br />
					ウィジェットエリアは「<?php $bcBaser->link('ウィジェットエリア管理', array('plugin' => null, 'controller' => 'widget_areas', 'action' => 'index')) ?>」より追加できます。
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.layout_template', 'レイアウトテンプレート名') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.layout_template', array('type' => 'select', 'options' => $mail->getLayoutTemplates())) ?>
				<?php echo $bcForm->input('MailContent.edit_layout', array('type' => 'hidden')) ?>
	<?php if($this->action == 'admin_edit'): ?>
				<?php $bcBaser->link('≫ 編集する','javascript:void(0)', array('id' => 'EditLayout')) ?>
	<?php endif ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpLayoutTemplate', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.layout_template') ?>
				<div id="helptextLayoutTemplate" class="helptext">
					<ul>
						<li>メールフォームの外枠のテンプレートを指定します。</li>
						<li>「編集する」からテンプレートの内容を編集する事ができます。</li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.form_template', 'メールフォームテンプレート名') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.form_template', array('type' => 'select', 'options' => $mail->getFormTemplates())) ?>
				<?php echo $bcForm->input('MailContent.edit_mail_form', array('type' => 'hidden')) ?>
	<?php if($this->action == 'admin_edit'): ?>
				<?php $bcBaser->link('≫ 編集する', 'javascript:void(0)', array('id' => 'EditForm')) ?>
	<?php endif ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpFormTemplate', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.form_template') ?>
				<div id="helptextFormTemplate" class="helptext">
					<ul>
						<li>メールフォーム本体のテンプレートを指定します。</li>
						<li>「編集する」からテンプレートの内容を編集する事ができます。</li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.mail_template', '送信メールテンプレート名') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.mail_template', array('type' => 'select', 'options' => $mail->getMailTemplates())) ?>
				<?php echo $bcForm->input('MailContent.edit_mail', array('type' => 'hidden')) ?>
	<?php if($this->action == 'admin_edit'): ?>
				<?php $bcBaser->link('≫ 編集する', 'javascript:void(0)', array('id' => 'EditMail')) ?>
	<?php endif ?>
				<?php echo $html->image('admin/icn_help.png', array('id' => 'helpMailTemplate', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $bcForm->error('MailContent.mail_template') ?>
				<div id="helptextMailTemplate" class="helptext">
					<ul>
						<li>送信するメールのテンプレートを指定します。</li>
						<li>「編集する」からテンプレートの内容を編集する事ができます。</li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('MailContent.exclude_search', '公開設定') ?></th>
			<td class="col-input">
				<?php echo $bcForm->input('MailContent.status', array(
						'type'		=> 'radio',
						'options'	=> array(0 => '非公開', 1 => '公開') ,
						'legend'	=> false,
						'separator'	=> '&nbsp;&nbsp;')) ?><br />
				<?php echo $bcForm->error('MailContent.status') ?>
				<?php echo $bcForm->input('MailContent.exclude_search', array('type' => 'checkbox', 'label' => 'このメールフォームをサイト内検索の検索結果より除外する')) ?>
			</td>
		</tr>
	</table>
</div>
	
<!-- button -->
<div class="submit">
<?php if($this->action == 'admin_add'): ?>
	<?php echo $bcForm->submit('登　録', array('div' => false, 'class' => 'btn-red button')) ?>
<?php else: ?>
	<?php echo $bcForm->submit('更　新', array('div' => false, 'class' => 'btn-orange button')) ?>
	<?php $bcBaser->link('削　除', 
			array('action' => 'delete', $bcForm->value('MailContent.id')),
			array('class' => 'btn-gray button'),
			sprintf('%s を本当に削除してもいいですか？\n\n※ 現在このメールフォームに設定されているフィールドは全て削除されます。', $bcForm->value('MailContent.name')),
			false); ?>
<?php endif ?>
</div>

<?php echo $bcForm->end() ?>