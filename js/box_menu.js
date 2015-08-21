$(document).ready(function(){
        $tt = "open";
        $("img#img_btn").click(function(){
            if($tt == "open"){          
                $("nav#tm_box_menu").animate({left: '0px'}, "150");
                $tt = "close";
            }else{               
                $("nav#tm_box_menu").animate({left: '-270px'}, "150");
                $tt = "open";
            }
        });
});