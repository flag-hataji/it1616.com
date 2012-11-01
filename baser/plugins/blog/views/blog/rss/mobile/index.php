<?php
/* SVN FILE: $Id$ */
/**
 * [MOBILE] RSS
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.blog.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>
<?php
if($posts){
	echo $rss->items($posts,'transformRSS');
}
function transformRSS($data) {
	return array(
		'title' => $data['BlogPost']['name'],
		'link' => Router::url('/'.Configure::read('BcRequest.agentAlias').'/'.$data['BlogContent']['name'].'/archives/'.$data['BlogPost']['no']),
		'guid' => Router::url('/'.Configure::read('BcRequest.agentAlias').'/'.$data['BlogContent']['name'].'/archives/'.$data['BlogPost']['no']),
		'category' => $data['BlogCategory']['title'],
		'description' => $data['BlogPost']['content'],
		'pubDate' => $data['BlogPost']['posts_date']
	);
}
?>