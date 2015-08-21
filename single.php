<?php get_header(); ?>
<div id="main">
<?php get_sidebar(); ?>
<section>
<?php $category = get_the_category(); 
      $check_id = $category[0]->cat_ID;
if($check_id == 13 or $check_id ==14){
    include (TEMPLATEPATH . '/inc/news.php' );
}else{include (TEMPLATEPATH . '/inc/content_single.php' );}  ?>
<div class="clear"></div>
</section>
</div><!--end main-->
<?php get_footer(); ?>
