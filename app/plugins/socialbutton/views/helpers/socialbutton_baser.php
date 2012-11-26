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
class SocialbuttonBaserHelper extends AppHelper {
	/*-------------------------------------------
	* @name       getSocialbuttons
	* @discript   ソーシャルボタンを取得する。
	* @return     text
	* @params     text
	-------------------------------------------*/
	function getSocialbuttons($type=null){
		
		/*
		サイズは３種類
		small,middle（default）,large
		*/
		
		//$typeが空の場合はデフォルト設定
		if(empty($type)){
			$type = 'middle';			
		}
		
		//サイズ毎にHTML生成処理を分ける。
		switch($type){
			
			//小サイズ
			case 'small':
				$printHtml = $this->getSmallHtml();
				break;
			
			//中サイズ
			case 'middle':
				$printHtml = $this->getMiddleHtml();
				break;
			
			//大サイズ
			case 'large':
				$printHtml = $this->getLargeHtml();
				break;
				
			//それ以外
			default:
				$printHtml = '<p>取得エラーです。パラメータを確認してください。</p>';
				break;		
				
		}
		
		//結果を返す。
		return $printHtml;
		
	}




	/*-------------------------------------------
	* @name       _getSmallHtml
	* @discript   小サイズのHTMLを取得する。
	* @return     text
	* @params     text
	-------------------------------------------*/
	function getSmallHtml(){
	
		//インスタンスを生成する。
		$this->bcBaser = new BcBaserHelper();
	
		//html格納変数
		$html = "";
		$js = "";
		
		//DBモデルの利用
		$fairModel = ClassRegistry::init('Socialbutton.Socialbutton');
		
		//各ボタンの利用設定確認とHTML,JSを作成
		$configData = $fairModel->find('first');
		
		if(!empty($configData)){
			
			//twitter
			if($configData['Socialbutton']['twitter'] == 1){
			
				$html .= '<div id="twitterMini"></div>';

				$js .= "
					$('#twitterMini').socialbutton('twitter', {
					button: 'none'
						});";
			}
			
			//facebook like
			if($configData['Socialbutton']['facebook_like'] == 1){
			
				$html .= '<div id="facebook_likeMini"></div>';
				
				$js .= "
					$('#facebook_likeMini').socialbutton('facebook_like', {
					button: 'button_count'
					});";
			}
			
			//facebook share
			if($configData['Socialbutton']['facebook_share'] == 1){
			
				$html .= '<div id="facebook_shareMini"></div>';
				
				$js .= "
					$('#facebook_shareMini').socialbutton('facebook_share', {
					button: 'button'
					});";
			}
			
			//mixi like
			if($configData['Socialbutton']['mixi_like'] == 1){
			
				$html .= '<div id="mixi_likeMini"></div>';
				
				$js .= "
					$('#mixi_likeMini').socialbutton('mixi_like', {
					key: '".$configData['Socialbutton']['mixi_key']."',
					show_faces: false
					}).width(90);";
			}
			
			//mixi like
			if($configData['Socialbutton']['mixi_check'] == 1){
			
				$html .= '<div id="mixi_checkMini"></div>';
				
				$js .= "
					$('#mixi_checkMini').socialbutton('mixi_check', {
			        button: 'button-1',
					key: ' ".$configData['Socialbutton']['mixi_key']."'
					});";
			}
			
			//google +1
			if($configData['Socialbutton']['google_plus'] == 1){
			
				$html .= '<div id="google_plusMini"></div>';
				
				$js .= "
					$('#google_plusMini').socialbutton('google_plusone', {
					lang: 'ja',
					size: 'medium',
					count: false
					});";
			}
			
			//gree
			if($configData['Socialbutton']['gree'] == 1){
			
				$html .= '<div id="greeMini"></div>';
				
				$js .= "
					$('#greeMini').socialbutton('gree_sf', {
					button: 4,
			        height: 22
					});";
			}
			
			//evernote
			if($configData['Socialbutton']['evernote'] == 1){
			
				$html .= '<div id="evernoteMini"></div>';
				
				$js .= "
					$('#evernoteMini').socialbutton('evernote', {
			        button: 'site-mem-22',
			        styling: 'full'
				    });";
			}
			
			//hatena
			if($configData['Socialbutton']['hatena'] == 1){
			
				$html .= '<div id="hatenaMini"></div>';
				
				$js .= "
					$('#hatenaMini').socialbutton('hatena', {
			        button: 'simple'
				    });";
			}
			
			//googleブックマーク
			if($configData['Socialbutton']['google_bookmark'] == 1){
			
				$html .= '<div id="googleBookMarkMini"><a href="javascript:location.href=\'http://www.google.com/bookmarks/mark?op=add&bkmk=\'+encodeURIComponent(location.href)+\'&title=\'+encodeURIComponent(document.title);"><img src="http://www.google.co.jp/favicon.ico"; width="16" height="16" style="vertical-align: middle; border: none;" alt="Googleブックマークに登録" title="Googleブックマークに登録"/></a></div>';
				
				}
			
			
			//Yahooブックマーク
			if($configData['Socialbutton']['yahoo_bookmark'] == 1){
			
				$html .= '<div id="yahooBookMarkMini"><a href="javascript:void window.open(\'http://bookmarks.yahoo.co.jp/bookmarklet/showpopup?t=\'+encodeURIComponent(document.title)+\'&u=\'+encodeURIComponent(location.href)+\'&ei=UTF-8\',\'_blank\',\'width=550,height=480,left=100,top=50,scrollbars=1,resizable=1\',0);"><img src="http://i.yimg.jp/images/sicons/ybm16.gif" width="16" height="16" alt="Yahoo!ブックマークに登録" style="border:none;"></a></div>';
				
			}				
			
			//tumblr
			if($configData['Socialbutton']['tumblr'] == 1){
			
				$html .= '<div id="tumblrMini"><a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:20px; height:20px; background:url(\'http://platform.tumblr.com/v1/share_4.png\') top left no-repeat transparent;">Share on Tumblr</a></div>';
			}
			
			//plurk
			if($configData['Socialbutton']['plurk'] == 1){
			
				$html .= '<div id="plurkMini"><a href="javascript: void(window.open(\'http://www.plurk.com/?qualifier=shares&status=\' .concat(encodeURIComponent(location.href)) .concat(\' \') .concat(\'(\') .concat(encodeURIComponent(document.title)) .concat(\')\')));" title="share to plurk"><img src=\'http://statics.plurk.com/b872d9e40dbce69e5cde4787ccb74e60.png\' border="0"/></a></div>';
			}
			
			
			//あとで読む
			if($configData['Socialbutton']['atode'] == 1){
			
				$html .= '<div id="atodeMini"><a href=\'http://atode.cc/\' onclick=\'javascript:(function(){var s=document.createElement("scr"+"ipt");s.charset="UTF-8";s.language="javascr"+"ipt";s.type="text/javascr"+"ipt";var d=new Date;s.src="http://atode.cc/bjs.php?d="+d.getMilliseconds();document.body.appendChild(s)})();return false;\'><img src="http://atode.cc/img/iconnja.gif" alt="あとで読む" border="0" align="absmiddle" width="66" height="20" /></a></div>';
				
			}
			
			//newsing
			if($configData['Socialbutton']['newsing'] == 1){
			
				$html .= '<div id="newsingMini"><a href="javascript:void window.open(\'http://newsing.jp/nbutton?title=\'+encodeURIComponent(document.title)+\'&url=\'+encodeURIComponent(location.href),\'\',\'left=0,top=0,scrollbars=1,resizable=1\');"><img src="http://image.newsing.jp/common/images/newsingit/newsingit_s.gif" alt="newsing it!" height="16" width="16" /></a></div>';
				
			}
			
			//choix
			if($configData['Socialbutton']['choix'] == 1){
			
				$html .= '<div id="choixMini"><a href="javascript:location.href=\'http://www.choix.jp/bloglink/\'+location.href;"><img src="http://www.choix.jp/img/choix_it.gif" width="16" height="16" vspace="3" align="absmiddle" style="border: none;" alt="この記事をChoix！" title="この記事をChoix！" /></a></div>';
				
			}
			
			
			//buzzurl
			if($configData['Socialbutton']['buzzurl'] == 1){
			
				$html .= '<div id="buzzurlMini"><a href="javascript:void window.open(\'http://buzzurl.jp/entry/\'+location.href+\'\',\'\',\'left=0,top=0,scrollbars=1,resizable=1\');" title="Buzzurlにブックマーク"><img src="http://buzzurl.jp/static/image/api/icon/add_icon_mini_08.gif" alt="Buzzurlにブックマーク"></a>
</div>';
				
			}

		}
		
		//DIVタグで出力
		$html = '<div class="socialButtonsMini" class="SBClearfix">'.$html.'</div>';
		$js = '<script type="text/javascript">'."
				$(function() {".$js."});
				</script>";
				
		//javascript＋HTML
		$return = $js.$html;
				
		//結果を返す。
		return $return;

	}
	
	
	
	/*-------------------------------------------
	* @name       getSmallHtml
	* @discript   中サイズのHTMLを取得する。
	* @return     text
	* @params     text
	-------------------------------------------*/
	function getMiddleHtml(){
		
		//インスタンスを生成する。
		$this->bcBaser = new BcBaserHelper();
	
		//html格納変数
		$html = "";
		$js = "";
		
		//DBモデルの利用
		$fairModel = ClassRegistry::init('Socialbutton.Socialbutton');
		
		//各ボタンの利用設定確認とHTML,JSを作成
		$configData = $fairModel->find('first');
		
		if(!empty($configData)){
			
			//twitter
			if($configData['Socialbutton']['twitter'] == 1){
			
				$html .= '<div id="twitterMiddle"></div>';

				$js .= "
					$('#twitterMiddle').socialbutton('twitter', {
					button: 'horizontal'
						});";
			}
			
			//facebook like
			if($configData['Socialbutton']['facebook_like'] == 1){
			
				$html .= '<div id="facebook_likeMiddle"></div>';
				
				$js .= "
					$('#facebook_likeMiddle').socialbutton('facebook_like', {
					button: 'button_count'
					});";
			}
			
			//facebook share
			if($configData['Socialbutton']['facebook_share'] == 1){
			
				$html .= '<div id="facebook_shareMiddle"></div>';
				
				$js .= "
					$('#facebook_shareMiddle').socialbutton('facebook_share', {
					button: 'button'
					});";
			}
			
			//mixi like
			if($configData['Socialbutton']['mixi_like'] == 1){
			
				$html .= '<div id="mixi_likeMiddle"></div>';
				
				$js .= "
					$('#mixi_likeMiddle').socialbutton('mixi_like', {
					key: '".$configData['Socialbutton']['mixi_key']."',
					show_faces: false
					}).width(90);";
			}
			
			//mixi like
			if($configData['Socialbutton']['mixi_check'] == 1){
			
				$html .= '<div id="mixi_checkMiddle"></div>';
				
				$js .= "
					$('#mixi_checkMiddle').socialbutton('mixi_check', {
					key: ' ".$configData['Socialbutton']['mixi_key']."'
					});";
			}
			
			//google +1
			if($configData['Socialbutton']['google_plus'] == 1){
			
				$html .= '<div id="google_plusMiddle"></div>';
				
				$js .= "
					$('#google_plusMiddle').socialbutton('google_plusone', {
					lang: 'ja',
					size: 'medium',
					});";
			}
			
			//gree
			if($configData['Socialbutton']['gree'] == 1){
			
				$html .= '<div id="greeMiddle"></div>';
				
				$js .= "
					$('#greeMiddle').socialbutton('gree_sf', {
					button: 0
					});";
			}
			
			//evernote
			if($configData['Socialbutton']['evernote'] == 1){
			
				$html .= '<div id="evernoteMiddle"></div>';
				
				$js .= "
					$('#evernoteMiddle').socialbutton('evernote', {
			        button: 'article-clipper-jp',
			        styling: 'full'
				    });";
			}
			
			//hatena
			if($configData['Socialbutton']['hatena'] == 1){
			
				$html .= '<div id="hatenaMiddle"></div>';
				
				$js .= "$('#hatenaMiddle').socialbutton('hatena');";
			}
			
			//googleブックマーク
			if($configData['Socialbutton']['google_bookmark'] == 1){
			
				$html .= '<div id="googleBookMarkMiddle"><a href="javascript:location.href=\'http://www.google.com/bookmarks/mark?op=add&bkmk=\'+encodeURIComponent(location.href)+\'&title=\'+encodeURIComponent(document.title);"><img src="http://www.google.co.jp/favicon.ico"; width="16" height="16" style="vertical-align: middle; border: none;" alt="Googleブックマークに登録" title="Googleブックマークに登録"/></a></div>';
				
				}
			
			
			//Yahooブックマーク
			if($configData['Socialbutton']['yahoo_bookmark'] == 1){
			
				$html .= '<div id="yahooBookMarkMiddle"><a href="javascript:void window.open(\'http://bookmarks.yahoo.co.jp/bookmarklet/showpopup?t=\'+encodeURIComponent(document.title)+\'&u=\'+encodeURIComponent(location.href)+\'&ei=UTF-8\',\'_blank\',\'width=550,height=480,left=100,top=50,scrollbars=1,resizable=1\',0);"><img src="http://i.yimg.jp/images/sicons/ybm16.gif" width="16" height="16" alt="Yahoo!ブックマークに登録" style="border:none;"></a></div>';
				
			}				
			
			//tumblr
			if($configData['Socialbutton']['tumblr'] == 1){
			
				$html .= '<div id="tumblrMiddle"><a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:61px; height:20px; background:url(\'http://platform.tumblr.com/v1/share_2.png\') top left no-repeat transparent;">Share on Tumblr</a></div>';
			}
			
			//plurk
			if($configData['Socialbutton']['plurk'] == 1){
			
				$html .= '<div id="plurkMiddle"><a href="javascript: void(window.open(\'http://www.plurk.com/?qualifier=shares&status=\' .concat(encodeURIComponent(location.href)) .concat(\' \') .concat(\'(\') .concat(encodeURIComponent(document.title)) .concat(\')\')));" title="share to plurk"><img src=\'http://statics.plurk.com/b872d9e40dbce69e5cde4787ccb74e60.png\' border="0"/></a></div>';
			}
			
			
			//あとで読む
			if($configData['Socialbutton']['atode'] == 1){
			
				$html .= '<div id="atodeMiddle"><a href=\'http://atode.cc/\' onclick=\'javascript:(function(){var s=document.createElement("scr"+"ipt");s.charset="UTF-8";s.language="javascr"+"ipt";s.type="text/javascr"+"ipt";var d=new Date;s.src="http://atode.cc/bjs.php?d="+d.getMilliseconds();document.body.appendChild(s)})();return false;\'><img src="http://atode.cc/img/iconnja.gif" alt="あとで読む" border="0" align="absmiddle" width="66" height="20" /></a></div>';
				
			}
			
			//newsing
			if($configData['Socialbutton']['newsing'] == 1){
			
				$html .= '<div id="newsingMiddle"><a href="javascript:void window.open(\'http://newsing.jp/nbutton?title=\'+encodeURIComponent(document.title)+\'&url=\'+encodeURIComponent(location.href),\'\',\'left=0,top=0,scrollbars=1,resizable=1\');"><img src="http://image.newsing.jp/common/images/newsingit/newsingit_s.gif" alt="newsing it!" height="16" width="16" /></a></div>';
				
			}
			
			//choix
			if($configData['Socialbutton']['choix'] == 1){
			
				$html .= '<div id="choixMiddle"><a href="javascript:location.href=\'http://www.choix.jp/bloglink/\'+location.href;"><img src="http://www.choix.jp/img/choix_it.gif" width="16" height="16" vspace="3" align="absmiddle" style="border: none;" alt="この記事をChoix！" title="この記事をChoix！" /></a></div>';
				
			}
			
			
			//buzzurl
			if($configData['Socialbutton']['buzzurl'] == 1){
			
				$html .= '<div id="buzzurlMiddle"><a href="javascript:void window.open(\'http://buzzurl.jp/entry/\'+location.href+\'\',\'\',\'left=0,top=0,scrollbars=1,resizable=1\');" title="Buzzurlにブックマーク"><img src="http://buzzurl.jp/static/image/api/icon/add_icon_mini_08.gif" alt="Buzzurlにブックマーク"></a>
</div>';
				
			}
			
			
		}
		
		
		//DIVタグで出力
		$html = '<div class="socialButtonsMiddle" class="SBClearfix">'.$html.'</div>';
		$js = '<script type="text/javascript">'."
				$(function() {".$js."});
				</script>";
		
		
		//javascript＋HTML
		$return = $js.$html;
				
		//結果を返す。
		return $return;
	}




	/*-------------------------------------------
	* @name       getSmallHtml
	* @discript   大サイズのHTMLを取得する。
	* @return     text
	* @params     text
	-------------------------------------------*/
	function getLargeHtml(){
		
		//インスタンスを生成する。
		$this->bcBaser = new BcBaserHelper();
		
		//html格納変数
		$html = "";
		$js = "";
		
		//DBモデルの利用
		$fairModel = ClassRegistry::init('Socialbutton.Socialbutton');
		
		//各ボタンの利用設定確認とHTML,JSを作成
		$configData = $fairModel->find('first');
		
		if(!empty($configData)){
			
			//twitter
			if($configData['Socialbutton']['twitter'] == 1){
			
				$html .= '<div id="twitterLarge"></div>';

				$js .= "
					$('#twitterLarge').socialbutton('twitter', {
					button: 'vertical'
						});";
			}
			
			//facebook like
			if($configData['Socialbutton']['facebook_like'] == 1){
			
				$html .= '<div id="facebook_likeLarge"></div>';
				
				$js .= "
					$('#facebook_likeLarge').socialbutton('facebook_like', {
					button: 'button_count'
					});";
			}
			
			//facebook share
			if($configData['Socialbutton']['facebook_share'] == 1){
			
				$html .= '<div id="facebook_shareLarge"></div>';
				
				$js .= "
					$('#facebook_shareLarge').socialbutton('facebook_share', {
					button: 'box_count'
					});";
			}
			
			//mixi like
			if($configData['Socialbutton']['mixi_like'] == 1){
			
				$html .= '<div id="mixi_likeLarge"></div>';
				
				$js .= "
					$('#mixi_likeLarge').socialbutton('mixi_like', {
					key: '".$configData['Socialbutton']['mixi_key']."',
					show_faces: false
					}).width(90);";
			}
			
			//mixi like
			if($configData['Socialbutton']['mixi_check'] == 1){
			
				$html .= '<div id="mixi_checkLarge"></div>';
				
				$js .= "
					$('#mixi_checkLarge').socialbutton('mixi_check', {
					key: ' ".$configData['Socialbutton']['mixi_key']."'
					});";
			}
			
			//google +1
			if($configData['Socialbutton']['google_plus'] == 1){
			
				$html .= '<div id="google_plusLarge"></div>';
				
				$js .= "
					$('#google_plusLarge').socialbutton('google_plusone', {
					lang: 'ja',
					size: 'tall',
					});";
			}
			
			//gree
			if($configData['Socialbutton']['gree'] == 1){
			
				$html .= '<div id="greeLarge"></div>';
				
				$js .= "
					$('#greeLarge').socialbutton('gree_sf', {
					button: 0
					});";
			}
			
			//evernote
			if($configData['Socialbutton']['evernote'] == 1){
			
				$html .= '<div id="evernoteLarge"></div>';
				
				$js .= "
					$('#evernoteLarge').socialbutton('evernote', {
			        button: 'article-clipper-vert',
			        styling: 'full'
				    });";
			}
			
			//hatena
			if($configData['Socialbutton']['hatena'] == 1){
			
				$html .= '<div id="hatenaLarge"></div>';
				
				$js .= "$('#hatenaLarge').socialbutton('hatena', {
				        button: 'vertical'
					    });
						";
			}
			
			//googleブックマーク
			if($configData['Socialbutton']['google_bookmark'] == 1){
			
				$html .= '<div id="googleBookMarkLarge"><a href="javascript:location.href=\'http://www.google.com/bookmarks/mark?op=add&bkmk=\'+encodeURIComponent(location.href)+\'&title=\'+encodeURIComponent(document.title);"><img src="http://www.google.co.jp/favicon.ico"; width="16" height="16" style="vertical-align: middle; border: none;" alt="Googleブックマークに登録" title="Googleブックマークに登録"/></a></div>';
				
				}
			
			
			//Yahooブックマーク
			if($configData['Socialbutton']['yahoo_bookmark'] == 1){
			
				$html .= '<div id="yahooBookMarkLarge"><a href="javascript:void window.open(\'http://bookmarks.yahoo.co.jp/bookmarklet/showpopup?t=\'+encodeURIComponent(document.title)+\'&u=\'+encodeURIComponent(location.href)+\'&ei=UTF-8\',\'_blank\',\'width=550,height=480,left=100,top=50,scrollbars=1,resizable=1\',0);"><img src="http://i.yimg.jp/images/sicons/ybm16.gif" width="16" height="16" alt="Yahoo!ブックマークに登録" style="border:none;"></a></div>';
				
			}				
			
			//tumblr
			if($configData['Socialbutton']['tumblr'] == 1){
			
				$html .= '<div id="tumblrLarge"><a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; height:20px; background:url(\'http://platform.tumblr.com/v1/share_3.png\') top left no-repeat transparent;">Share on Tumblr</a></div>';
			}
			
			//plurk
			if($configData['Socialbutton']['plurk'] == 1){
			
				$html .= '<div id="plurkLarge"><a href="javascript: void(window.open(\'http://www.plurk.com/?qualifier=shares&status=\' .concat(encodeURIComponent(location.href)) .concat(\' \') .concat(\'(\') .concat(encodeURIComponent(document.title)) .concat(\')\')));" title="share to plurk"><img src=\'http://statics.plurk.com/b872d9e40dbce69e5cde4787ccb74e60.png\' border="0"/></a></div>';
			}
			
			
			//あとで読む
			if($configData['Socialbutton']['atode'] == 1){
			
				$html .= '<div id="atodeLarge"><a href=\'http://atode.cc/\' onclick=\'javascript:(function(){var s=document.createElement("scr"+"ipt");s.charset="UTF-8";s.language="javascr"+"ipt";s.type="text/javascr"+"ipt";var d=new Date;s.src="http://atode.cc/bjs.php?d="+d.getMilliseconds();document.body.appendChild(s)})();return false;\'><img src="http://atode.cc/img/iconnja.gif" alt="あとで読む" border="0" align="absmiddle" width="66" height="20" /></a></div>';
				
			}
			
			//newsing
			if($configData['Socialbutton']['newsing'] == 1){
			
				$html .= '<div id="newsingLarge"><a href="javascript:void window.open(\'http://newsing.jp/nbutton?title=\'+encodeURIComponent(document.title)+\'&url=\'+encodeURIComponent(location.href),\'\',\'left=0,top=0,scrollbars=1,resizable=1\');"><img src="http://image.newsing.jp/common/images/newsingit/newsingit_s.gif" alt="newsing it!" height="16" width="16" /></a></div>';
				
			}
			
			//choix
			if($configData['Socialbutton']['choix'] == 1){
			
				$html .= '<div id="choixLarge"><a href="javascript:location.href=\'http://www.choix.jp/bloglink/\'+location.href;"><img src="http://www.choix.jp/img/choix_it.gif" width="16" height="16" vspace="3" align="absmiddle" style="border: none;" alt="この記事をChoix！" title="この記事をChoix！" /></a></div>';
				
			}
			
			
			//buzzurl
			if($configData['Socialbutton']['buzzurl'] == 1){
			
				$html .= '<div id="buzzurlLarge"><a href="javascript:void window.open(\'http://buzzurl.jp/entry/\'+location.href+\'\',\'\',\'left=0,top=0,scrollbars=1,resizable=1\');" title="Buzzurlにブックマーク"><img src="http://buzzurl.jp/static/image/api/icon/add_icon_mini_08.gif" alt="Buzzurlにブックマーク"></a>
</div>';
				
			}
			
			
		}
		
		//DIVタグで出力
		$html = '<div class="socialButtonsLarge" class="SBClearfix">'.$html.'</div>';
		$js = '<script type="text/javascript">'."
				$(function() {".$js."});
				</script>";
				
		//javascript＋HTML
		$return = $js.$html;
				
		//結果を返す。
		return $return;
	
	}
	
	

	
}
?>