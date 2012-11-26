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
**　ヘルパー
**
********************************************/
class SocialbuttonHookHelper extends AppHelper{
	
	
	
	//フック登録
	var $registerHooks = array('afterLayout');
	
		
	/*-------------------------------------------
	* @name       afterLayout
	* @discript   必要なjsファイル、CSSを読みこませる。
	* @return     void
	* @params     none
	-------------------------------------------*/
	function afterLayout() {
		
		//Viewオブジェクトを追加
		$view = ClassRegistry::getObject('view');
		
		
		if($view) {
			
			//出力許可フラグ
			$printFlag = true;
			
			//管理画面とモバイルには表示しない。
			if(!empty($view->params['prefix'])){
				if($view->params['prefix'] == 'mobile' || $view->params['prefix'] == 'admin'){
					$printFlag = false;
				}
			}
			
			//出力許可を確認して処理する
			if($printFlag){
				
				//jsヘルパーを利用可能にするためインスタンスを生成。
				$this->Javascript = new JavascriptHelper();
				//他のプラグインを参考に、javascriptをヘッダタグ内に書き込む。
				$jscode = $this->Javascript->link('/socialbutton/js/jquery.socialbutton-1.9.0.js');
				//先にJQueryを読んでもらわなければならないので、最後のヘッダタグ直前に差し込む。
				$view->output = str_replace('</head>',$jscode.'</head>',$view->output);
				
				//ヘルパー利用の為のインスタンス生成
				$this->bcHtml = new BcHtmlHelper();
				//CSS設定
				$css = $this->bcHtml->css('/socialbutton/css/socialbutton');
				//ヘッダタグ直前あたりに出力
				$view->output = str_replace('</head>',$css.'</head>',$view->output);
			}

		}
	}
}
?>
