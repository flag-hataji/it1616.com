<?php
/*
*　ソーシャルボタンプラグイン
*
* @link			http://mani-lab.com   mani-lab
* @version		0.9.6
* @lastmodified	2012-10-04
*/

?>
<p>利用するボタンを選択してください</p>
<ul>
	<li>ボタンは大中小の３種類選べます。（ただし用意されていない大きさがあるボタンもあります）</li>
	<li>利用するにはボタンを表示した場所で以下のように記述します</li>
</ul>

<pre>
&lt;?php
//小サイズ
echo $bcBaser->getSocialButtons('small');
//中サイズ
echo $bcBaser->getSocialButtons('middle');
//大サイズ
echo $bcBaser->getSocialButtons('large');
?&gt;
</pre>