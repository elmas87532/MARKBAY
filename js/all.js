function openIMG(pro_name) {
	var pro_name=pro_name;
	var pro_path="img/"+pro_name+".png";
    window.open(pro_path, config='height=500,width=500');
}
$(function(){
	
	var $login = $('#login'),
		_top = $login.offset().top;
 
	// 當網頁捲軸捲動時
	var $win = $(window).scroll(function(){
		// 如果現在的 scrollTop 大於原本 #login 的 top 時
		if($win.scrollTop() >= _top){
			// 如果 $login 的座標系統不是 fixed 的話
			if($login.css('position')!='fixed'){
				// 設定 #login 的座標系統為 fixed
				$login.css({
					position: 'fixed',
					top: 0
				});
			}
		}else{
			// 還原 #login 的座標系統為 absolute
			$login.css({
				position: 'absolute',
				top:10
			});
		}
	});
});