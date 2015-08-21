<div id="content">
    <div id="content_page">
        <div class="title_box">
			<h1><a href="#">Sản phẩm</a></h1>
        </div>
    <div id="cat_sanpham">
        <ul id="cat_par">
            <li><?php $cat = 3 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
            <li><?php $cat = 4 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
            <li><?php $cat = 5 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
            <li><?php $cat = 6 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
            <li><?php $cat = 7 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
            <li><?php $cat = 8 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
            <li><?php $cat = 9 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
            <li><?php $cat = 10 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
            <li><?php $cat = 11 ?>
            <h2><a href="<?php echo get_category_link( $cat ); ?>"><?php echo get_cat_name( $cat ) ?></a></h2>
                <ul>
                    <?php 
                        $query = new WP_Query( 'showposts=9&cat='.$cat);?>
                        <?php while($query->have_posts()) : $query->the_post(); ?>    
                        <li><a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail() ?>
                                <p><?php the_title() ?></p>
                            </a></li>
                    <?php endwhile; wp_reset_query();?>             
                </ul>
            </li>
        </ul>
    </div>
    </div><!--end content_page-->
</div><!-- end content-->
