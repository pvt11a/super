<div id="content">
    <div id="content_page">
        <div class="title_box">
			<h1><a href="#"><?php single_cat_title(); ?></a></h1>
        </div>
       <ul>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                <p><?php the_title() ?></p>
                <p style="font-size:14px ; font-weight: normal;padding-top:0px"><?php the_content_rss('',true,'',40); ?></p> 
            </a></li>
        <?php endwhile; endif; ?>
       </ul>
    </div><!--end content_page-->
</div><!-- end content-->
<style type="text/css">
    #content_page{}
    #content_page ul{list-style-type: none;}
    #content_page ul li{border-bottom: 1px dashed #CCC;padding: 5px 0px;}
    #content_page ul li:last-child{border-bottom:none;}
    #content_page ul li a{overflow: hidden;}
    #content_page li img{width: 25%;height: 100px;float: left;margin: 10px 10px 10px 0px;}
    #content_page li p{font-size: 18px;font-weight: bold;color: #5c5c5c;padding-top:10px}
</style>