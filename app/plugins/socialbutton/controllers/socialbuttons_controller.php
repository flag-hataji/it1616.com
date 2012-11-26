<?php
/* BaserCMS用　プラグイン
 *
 * @name            ソーシャルボタン
 *
 * @link			http://mani-lab.com   mani-lab
 * @version			0.9.6
 * @lastmodified	2012-10-04
 */
/********************************************
**
**　インポート
**
********************************************/
App::import('Controller', 'Plugins');


/********************************************
**
**　コントローラー
**
********************************************/
class SocialbuttonsController extends PluginsController {



	/*-----------------------------------------*/
	//　設定
	/*-----------------------------------------*/
	var $name = 'Socialbuttons';
	var $components = array('Auth','Cookie','BcAuthConfigure','RequestHandler');
	var $pageTitle = 'ソーシャルボタン';
	var $uses = array('Plugin','Socialbutton.Socialbutton');
	var $helpers = array('BcText','BcTime','BcForm');
	var $navis = array('ソーシャルボタン'=>'/admin/socialbutton/socialbuttons/index');
	var $crumbs = array(
			array('name' => 'プラグイン管理', 'url' => array('plugin' => '',
					'controller' => 'plugins', 'action' => 'index')),
							array('name' => 'ソーシャルボタン管理', 'url' => array('plugin' =>
					'socialbutton', 'controller' => 'socialbuttons', 'action' => 'index'))
	);
	

	/********************************************
	*　設定画面　index
	********************************************/
	function admin_index() {
		
		
		//送信データの確認
		//初期表示
		if(empty($this->data)){
		
			//現在の設定データを読み込む
			$SBData = $this->Socialbutton->find('first');
			
			//設定が無ければ初期状態なので、mixiなどキー設定が必要なものを使用しない設定で
			//View側へセットしていく。
			if(empty($SBData)){
				
				$SBData['Socialbutton']['twitter'] = '1';
				$SBData['Socialbutton']['facebook_like'] = '1';
				$SBData['Socialbutton']['facebook_share'] = '1';
				$SBData['Socialbutton']['mixi_like'] = '0';
				$SBData['Socialbutton']['mixi_check'] = '0';
				$SBData['Socialbutton']['mixi_key'] = '';
				$SBData['Socialbutton']['gree'] = '1';
				$SBData['Socialbutton']['google_plus'] = '1';
				$SBData['Socialbutton']['evernote'] = '1';
				$SBData['Socialbutton']['hatena'] = '1';
				
				//ver.0.9.6 追加
				$SBData['Socialbutton']['google_bookmark'] = '1';
				$SBData['Socialbutton']['yahoo_bookmark'] = '1';
				$SBData['Socialbutton']['tumblr'] = '1';
				$SBData['Socialbutton']['plurk'] = '1';
				$SBData['Socialbutton']['atode'] = '1';
				$SBData['Socialbutton']['newsing'] = '1';
				$SBData['Socialbutton']['choix'] = '1';
				$SBData['Socialbutton']['buzzurl'] = '1';
				
				
			}
		
		
		//更新ボタン押下後
		}else{
			
			//セーブする。
			if($this->Socialbutton->save($this->data)){
			
				//完了後、表示するメッセージ
				$this->Session->setFlash('ソーシャルボタン設定を更新しました。');
				//ログに残すメッセージ
				$this->Socialbutton->saveDbLog('ソーシャルボタン設定を更新しました。');
				
				
			}else{
				
				//エラーメッセージ
				$this->Session->setFlash('保存に失敗しました。');
				
			}
			
			//更新処理後の設定データを読み込む
			$SBData = $this->Socialbutton->find('first');
			
		}
		
		//データのセット
		$this->set('SBData',$SBData);
					
		//ページタイトル
		$this->pageTitle = 'ソーシャルボタン設定';
		
		//ヘルプ
		$this->help = 'socialbutton';
		
		//レンダリング
		$this->render('form');

	}
	
	
}

?>