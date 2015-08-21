$(document).ready(function() {
    //so sánh url nếu trùng thì thêm class trong category.php
    var url = document.location.href;
    $('nav ul li a').each(function(){
        if($(this).attr('href') == url) {
            $(this).addClass('active');
        }
    });
});
