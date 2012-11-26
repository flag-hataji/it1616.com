<?php
/* BaserCMS用　プラグイン
 *
 * @name            ソーシャルボタン
 *
 * @link			http://mani-lab.com   mani-lab
 * @version			0.9.0
 * @lastmodified	2012-07-09
 */
?>


<?php echo $bcForm->create('Socialbutton',array('type'=>'post','action'=>'admin_index')) ?>

<?php
//idは常に1
echo $bcForm->hidden('Socialbutton.id',array('value'=>'1'));
?>

<div class="section">
	<table cellpadding="0" cellspacing="0" class="form-table">

		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.twitter', 'twitter') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.twitter',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['twitter'] ));
				?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.facebook_like', 'facebook　いいねボタン') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.facebook_like',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['facebook_like']));
				?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.facebook_share', 'facebook　シェアボタン') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.facebook_share',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['facebook_share']));
				?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.mixi_like', 'mixi　いいねボタン') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.mixi_like',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['mixi_like']));
				?>
                <br />
                *利用するには下記のキーが必要です。
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.mixi_check', 'mixi　チェックボタン') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.mixi_check',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['mixi_check']));
				?>
                <br />
                *利用するには下記のキーが必要です。
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.mixi_key', 'mixi Key') ?></th>
			<td class="col-input">
				<?php echo $bcForm->text('Socialbutton.mixi_key',
				array('size' => '20', 'value' => $SBData['Socialbutton']['mixi_key']));
				?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.google_plus', 'Google +1') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.google_plus',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['google_plus']));
				?>
                <br />
                *IE6、7などの旧ブラウザでは表示されない場合があります。
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.gree', 'GREE　いいねボタン') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.gree',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['gree']));
				?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.evernote', 'Evernote') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.evernote',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['evernote']));
				?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.hatena', 'はてなブックマーク') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.hatena',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['hatena']));
				?>
			</td>
		</tr>
        <tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.google_bookmark', 'googleブックマーク') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.google_bookmark',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['google_bookmark']));
				?>
			</td>
		</tr>
        <tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.yahoo_bookmark', 'Yahoo!ブックマーク') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.yahoo_bookmark',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['yahoo_bookmark']));
				?>
			</td>
		</tr>
        <tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.tumblr', 'tumblr') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.tumblr',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['tumblr']));
				?>
			</td>
		</tr>
        <tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.plurk', 'plurk') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.plurk',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['plurk']));
				?>
			</td>
		</tr>
        <tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.atode', 'あとで読む') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.atode',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['atode']));
				?>
			</td>
		</tr>
        <tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.newsing', 'newsing') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.newsing',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['newsing']));
				?>
			</td>
		</tr>
        <tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.choix', 'Choix') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.choix',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['choix']));
				?>
			</td>
		</tr>
        <tr>
			<th class="col-head"><?php echo $bcForm->label('Socialbutton.buzzurl', 'Buzzurl') ?></th>
			<td class="col-input">
				<?php echo $bcForm->radio('Socialbutton.buzzurl',
				array('0' => '使わない', '1' => '使う'),
				array('legend' => false, 'value' => $SBData['Socialbutton']['buzzurl']));
				?>
			</td>
		</tr>
	</table>
</div>
<div class="submit">
	<?php echo $bcForm->submit('更新', array('div' => false, 'class' => 'btn-orange button')) ?>
</div>

<?php echo $bcForm->end() ?>