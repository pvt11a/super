<?php get_header(); ?>
<div id="main">
<?php get_sidebar(); ?>
<section>
<?php $cur_cat_id = get_cat_id( single_cat_title("",false) );
if($cur_cat_id == 13){
    include (TEMPLATEPATH . '/inc/congtrinh.php' );
    
}elseif($cur_cat_id == 14){
    include (TEMPLATEPATH . '/inc/tintuc.php' );
} elseif($cur_cat_id == 15){
    include (TEMPLATEPATH . '/inc/sanpham.php' );
}else{
    include (TEMPLATEPATH . '/inc/content-category.php' );
}?>
<div class="clear"></div>
</section>
</div><!--end main-->

<?php get_footer(); ?>