<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] フィード詳細メニュー
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.feed.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<tr>
	<th>フィードメニュー</th>
	<td>
		<ul class="cleafix">
<?php if($this->params['controller']=='feed_details'): ?>
			<li><?php $bcBaser->link('フィードを追加', array('controller' => 'feed_details', 'action' => 'add', $form->value('FeedDetail.feed_config_id'))) ?></li>
			<li><?php $bcBaser->link('フィード設定に戻る', array('controller' => 'feed_configs', 'action' => 'edit', $form->value('FeedDetail.feed_config_id'))) ?></li>
<?php else: ?>
			<li><?php $bcBaser->link('フィードを追加', array('controller' => 'feed_details', 'action' => 'add', $form->value('FeedConfig.id'))) ?></li>
<?php endif; ?>
		</ul>
	</td>
</tr>
