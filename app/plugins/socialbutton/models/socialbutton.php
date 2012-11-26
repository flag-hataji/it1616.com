<?php
/* BaserCMS用　プラグイン
 *
 * @name            ソーシャルボタン
 *
 * @link			http://mani-lab.com   mani-lab
 * @version			0.9.5
 * @lastmodified	2012-08-25
 */


/********************************************
**
**　モデル
**
********************************************/
class Socialbutton extends AppModel{


	/*-----------------------------------------*/
	//　設定
	/*-----------------------------------------*/
	var $name = 'Socialbutton';
	var $useDbConfig = 'plugin';
	var $plugin = 'Socialbutton';
	
	
	/********************************************
	*  バリデート
	********************************************/
	function beforeValidate() {
		
	}
	
}
?>