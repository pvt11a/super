<div id="content">
    <div id="content_page">
        <div class="title_box">
			<h1><?php the_category(', '); ?></h1>
        </div>
        <div id="sanpham">
            <div id="product">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                <span id="sp"><?php the_post_thumbnail() ?></span>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h2>
                <div class="clear" style="height: 10px;"></div>
                <div class="tab1 tab1_sg">
                    <a>Thông tin chi tiêt sản phẩm</a>                       
                </div>
                <div id="chitiet_sp">
                    <?php the_content(); ?>
                </div>                               
            </div><!--end  product-->
            <div id="sp_lienquan">
                <div id="sanphamtrongnhom"><h3>Sản phẩm trong nhóm</h3></div>
            <ul>
            <?php $category = get_the_category();
                  $firstCategory = $category[0]->cat_ID; ?>
            <?php 
                $query = new WP_Query( 'cat='.$firstCategory);?>
                <?php while($query->have_posts()) : $query->the_post(); ?>    
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </a>                            
                </li> 
            <?php endwhile; wp_reset_query();?>                             
            </ul>
            </div>
        <?php endwhile; endif; ?> 
        </div><!--end  sanpham-->
    </div><!--end content_page-->
</div><!-- end content-->