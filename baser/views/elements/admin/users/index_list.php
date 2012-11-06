<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ユーザー一覧　テーブル
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

<table cellpadding="0" cellspacing="0" class="list-table" id="ListTable">
	<thead>
		<tr>
			<th style="width:140px" class="list-tool">
				<div>
					<?php $bcBaser->link($bcBaser->getImg('admin/btn_add.png', array('width' => 69, 'height' => 18, 'alt' => '新規追加', 'class' => 'btn')), array('action' => 'add')) ?>
				</div>
			</th>
			<th><?php echo $paginator->sort(array('asc' => $bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' NO', 'desc' => $bcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' NO'), 'id', array('escape' => false, 'class' => 'btn-direction')) ?></th>
			<th><?php echo $paginator->sort(array('asc' => $bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' アカウント名', 'desc' => $bcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' アカウント名'), 'name', array('escape' => false, 'class' => 'btn-direction')) ?></th>
			<th><?php echo $paginator->sort(array('asc' => $bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' グループ', 'desc' => $bcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' グループ'), 'user_group_id', array('escape' => false, 'class' => 'btn-direction')) ?><br />
				<?php echo $paginator->sort(array('asc' => $bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' 氏名', 'desc' => $bcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' 氏名'), 'real_name_1', array('escape' => false, 'class' => 'btn-direction')) ?></th>
			<th><?php echo $paginator->sort(array('asc' => $bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' 登録日', 'desc' => $bcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' 登録日'), 'created', array('escape' => false, 'class' => 'btn-direction')) ?><br />
				<?php echo $paginator->sort(array('asc' => $bcBaser->getImg('admin/blt_list_down.png', array('alt' => '昇順', 'title' => '昇順')).' 更新日', 'desc' => $bcBaser->getImg('admin/blt_list_up.png', array('alt' => '降順', 'title' => '降順')).' 更新日'), 'modified', array('escape' => false, 'class' => 'btn-direction')) ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($users)): ?>
			<?php foreach($users as $data): ?>
				<?php $bcBaser->element('users/index_row', array('data' => $data)) ?>
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
