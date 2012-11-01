<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ユーザー一覧
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
$bcBaser->js(array(
	'admin/jquery.baser_ajax_data_list', 
	'admin/jquery.baser_ajax_batch', 
	'admin/baser_ajax_data_list_config',
	'admin/baser_ajax_batch_config'
));
?>

<script type="text/javascript">
$(function(){
/**
 * ログイン
 */
	$.baserAjaxDataList.config.methods.up = {
		button: '.btn-login',
		result: function(row, result) {
			if(result) {
				window.location.href = result;
			}
		},
		initList: function() {

		}
	}
	$.baserAjaxDataList.init();
	$.baserAjaxBatch.init({ url: $("#AjaxBatchUrl").html()});
});
</script>

<div id="AjaxBatchUrl" style="display:none"><?php $bcBaser->url(array('controller' => 'users', 'action' => 'ajax_batch')) ?></div>
<div id="AlertMessage" class="message" style="display:none"></div>	
<div id="DataList"><?php $bcBaser->element('users/index_list') ?></div>