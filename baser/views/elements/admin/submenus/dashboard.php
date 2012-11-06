<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ダッシュボードメニュー
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
 * @deprecated よく使う項目に代替
 */
?>


<tr>
	<th>ダッシュボードメニュー</th>
	<td>
		<ul class="cleafix">
			<li>
				<?php $bcBaser->link('ユーザーを追加する', array('controller' => 'users', 'action' => 'add')) ?>
			</li>
		</ul>
	</td>
</tr>

