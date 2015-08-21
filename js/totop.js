$(document).ready(function(){
    //tạo nút quay len dau trang
           //Check to see if the window is top if not then display button
    	$(window).scroll(function(){
    		if ($(this).scrollTop() > 100) {
    			$('.ToTop').fadeIn();
    		} else {
    			$('.ToTop').fadeOut();
    		}
    	});

    	//Click event to scroll to top
    	$('.ToTop').click(function(){
    		$('html, body').animate({scrollTop : 0},800);
    		return false;
     	});
});