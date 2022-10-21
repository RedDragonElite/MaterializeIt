/*	
	AdBlocks
	- https://gist.github.com/6174/6062387
	- https://www.detectadblock.com/
	- https://yuukithemes.com/
*/
var ykrd1=Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
var ykrd2=Math.random().toString(36).substring(2, 7);
var e=document.getElementById("digitaldragon-adblockdetection");e.setAttribute("id", ykrd1);e.classList.add("ykwrp_"+ykrd2);
if(!window.showAds){document.getElementById(ykrd1).style.display='block';}