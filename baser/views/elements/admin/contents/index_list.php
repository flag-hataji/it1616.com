<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] 検索インデックス一覧　テーブル
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<!-- pagination -->
<?php $bcBaser->element('pagination') ?>

<!-- list -->
<table cellpadding="0" cellspacing="0" class="list-table sort-table" id="ListTable">
	<thead>
		<tr>
			<th class="list-tool">
				<div>
					<?php $bcBaser->link($bcBaser->getImg('admin/btn_add.png', array('width' => 69, 'height' => 18, 'alt' => '新規追加', 'class' => 'btn')), array('action' => 'add')) ?>
				</div>
<?php if($bcBaser->isAdminUser()): ?>
				<div>
					<?php echo $bcForm->checkbox('ListTool.checkall', array('title' => '一括選択')) ?>
					<?php echo $bcForm->input('ListTool.batch', array('type' => 'select', 'options' => array('del' => '削除'), 'empty' => '一括処理')) ?>
					<?php echo $bcForm->button('適用', array('id' => 'BtnApplyBatch', 'disabled' => 'disabled')) ?>
				</div>
<?php endif ?>
			</th>
			<th>NO</th>
			<th>タイプ<br />カテゴリー</th>
			<th>タイトル</th>
			<th>コンテンツ内容</th>
			<th>公開状態</th>
			<th>登録日<br />更新日</th>
		</tr>
	</thead>
	<tbody>
	<?php if(!empty($datas)): ?>
		<?php $count=0; ?>
		<?php foreach($datas as $data): ?>
			<?php $bcBaser->element('contents/index_row', array('data' => $data, 'count' => $count)) ?>
			<?php $count++; ?>
		<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="8"><p class="no-data">データが見つかりませんでした。</p></td>
		</tr>
		<?php endif; ?>
	</tbody>
</table>

<!-- list-num -->
<?php $bcBaser->element('list_num') ?>
