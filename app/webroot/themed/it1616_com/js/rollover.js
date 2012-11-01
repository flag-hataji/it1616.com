function setRollOver() {
	var loadedImg = new Array();
	if (!document.getElementsByTagName) return false;
	var ovrImgList = document.getElementsByTagName('img');
	for (var i = 0; i < ovrImgList.length; i++) {
		if (ovrImgList[i].src.match(/_off\./i)) {
			loadedImg[i] = new Image();
			loadedImg[i].src = ovrImgList[i].src.replace(/_off\./i, '_over.');
			ovrImgList[i].onmouseover = function() { // マウスオーバー
				this.src = this.src.replace(/_off\./i, '_over.');
			}
			ovrImgList[i].onmouseout = function() { // マウスアウト
				this.src = this.src.replace(/_over\./i, '_off.');
			}
			if (navigator.userAgent.indexOf('MSIE') < 0) ovrImgList[i].onmouseup = function() { // クリック後のロールオーバー解除
				this.src = this.src.replace(/_over\./i, '_off.');
			}
		}
	}
	return true;
}
if (window.addEventListener) window.addEventListener('load', setRollOver, false);
if (window.attachEvent) window.attachEvent('onload', setRollOver);
