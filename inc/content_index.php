<div id="content">
    <div id="slider">
        <div class="slider-wrapper theme-default">
            <div id="slider_img" class="nivoSlider">
                <?php 
                    $query = new WP_Query( 'cat=17');?>
                    <?php while($query->have_posts()) : $query->the_post(); ?>    
                    <?php the_post_thumbnail() ?>
                <?php endwhile; wp_reset_query();?> 
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>        
    </div><!--end #slider-->
    <div id="content_page">
        <div class="title_box">
			<h1><a href="#">Sản phẩm tiêu biểu</a></h1>
        </div>
        <div id="box_sp">
            <ul>               
                <li>
                    <?php $cat = 3 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>
                <li>
                    <?php $cat =4 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>  
                <li>
                    <?php $cat = 5 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>  
                <li>
                    <?php $cat = 6 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>  
                <li>
                    <?php $cat = 7 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>  
                <li>
                    <?php $cat = 8 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>  
                <li>
                    <?php $cat = 9 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>  
                <li>
                    <?php $cat = 11 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>  
                <li>
                    <?php $cat = 10 ?>
                    <a href="<?php echo get_category_link( $cat ); ?> "><?php the_category_thumbnail($cat); ?>
                    <p><?php echo get_cat_name( $cat ) ?></p>
                    </a>                            
                </li>                 
            </ul>
        </div><!--end box_sp-->
    </div><!--end content_page-->
    <div id="box_news">
        <div class="tab1" style="position: relative;">
        <span id="icon"><img src="<?php echo bloginfo('template_directory'); ?>/images/iconNew copy.jpg" /></span>
        <a>Tin tức</a>
        </div>
        <div class="news_detail">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/giaykhen" />
            <h4><a href="#">Công ty Thái Dương.</p>
            <ul id="tinlienquan">
                <?php 
                    $query = new WP_Query( 'showposts=3&cat=14');?>
                    <?php while($query->have_posts()) : $query->the_post(); ?>    
                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li> 
                <?php endwhile; wp_reset_query();?>           
            </ul>
        </div><!--end news_detail-->
    </div><!--end box_news-->
</div><!-- end content-->