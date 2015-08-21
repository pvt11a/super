<?php get_header(); ?>
<div id="main">
<?php get_sidebar(); ?>
<div id="content">
    <div id="content_page">
        <div class="title_box">
			<h1><a href="#"><?php the_title();?></a></h1>
        </div>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
<?php the_content(); ?>
</section>
</article>
<?php endwhile; endif; ?>
</section>
</div>
</div>
<div class="clear"></div>

</div><!--end main-->
<?php get_footer(); ?>