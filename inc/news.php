<div id="content">
    <div id="content_page">
        <div class="title_box">
			<h1><?php the_category(', '); ?></h1>
        </div>
        <div id="sanpham">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>             
                <h2 style="color: #0260A8;font-size: 23px;font-weight: normal;padding:20px 0px 10px 0px"><?php the_title(); ?></h2>
                <p><?php the_content();; ?></p>
                <div class="clear" style="height: 10px;"></div>                          
            
        <?php endwhile; endif; ?> 
        </div><!--end  sanpham-->
    </div><!--end content_page-->
</div><!-- end content-->