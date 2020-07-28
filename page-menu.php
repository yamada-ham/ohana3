<?php
/*
Template Name:MENU
*/
?>

<?php get_header("2"); ?>
     <section id="about" class="container content-section text-center">       
 <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
 
<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
  
        <?php the_content(); ?>
    <?php endwhile; ?>

<?php else: ?>
   NOMENU
<?php endif; ?>

<?php /* ?>
 <ul class="img_box">
    <?php $args = array(
        'numberposts' => -1,                //表示（取得）する記事の数
        'post_type' => 'menu'    //投稿タイプの指定
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
        <li><img src="<?php echo catch_that_image(); ?>" alt="" width="" height="" /><?php the_title(); ?></li>
    <?php endforeach; ?>
    <?php else : //記事が無い場合 ?>
        <li><p>記事はまだありません。</p></li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
</ul>
<?php */ ?>
            
					  
			<div class="clear space"></div>
            
            
       </div>
        
	</div>
	<div class="clear space"></div>
    </section>
<?php get_footer(); ?>