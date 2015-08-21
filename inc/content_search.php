<div id="content">
    <div id="content_page">
        <div class="title_box">
			<h1><a href="#">Kết quả tìm kiếm</a></h1>
        </div>
        <?php if ( have_posts() ) : ?>
        <p style="font-size: 15px;"> Tìm thấy <?php  
            $allsearch = &new WP_Query("s=$s&showposts=-1"); 
                $key = wp_specialchars($s, 1); 
                $count = $allsearch->post_count; 
                echo $count . ' ';  
            wp_reset_query(); ?> kết quả cho từ khóa <span style="font-style: italic; font-weight: bold;">&#8216; <?php echo get_search_query() ?> &#8217;</span> </p>
        
        <div id="box_sp">
            <ul>
             <?php while ( have_posts() ) : the_post(); ?>       
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?>
                    <p><a href="#"><?php the_title() ?></a></p>
                    </a>                            
                </li>
           <?php endwhile; else : ?>
            <h2>Không tìm thấy kết quả phù hợp</h2>
           <?php endif; ?>     
            </ul>
        </div><!--end box_sp-->
    </div><!--end content_page-->
</div><!-- end content-->
