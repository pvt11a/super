<div id="content">
    <div id="content_page">
        <div class="title_box">
			<h1><a href="#">Sản phẩm</a></h1>
        </div>
        <a id="name_cat" href="#"><?php single_cat_title(); ?></a>
        <div id="box_sp">
            <ul>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>       
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?>
                    <p><a href="#"><?php the_title() ?></a></p>
                    </a>                            
                </li>
           <?php endwhile; else : ?>
            <h2>Không có sản phẩm nào trong danh mục này</h2>
           <?php endif; ?>     
            </ul>
        </div><!--end box_sp-->
    </div><!--end content_page-->
</div><!-- end content-->
