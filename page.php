<?php get_header(); ?>

<?php
$paged = get_query_var('paged'); //現在のページ番号
$num = 1; //表示件数
query_posts('posts_per_page='.$num.'&paged='.$paged); ?>
 
<?php while ( have_posts() ) : the_post(); ?>
 
<?php get_template_part( 'content', get_post_format() ); ?>
 
//以下、表示の例文
 <nav class="nav-single">
 <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
 <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
 <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
 </nav><!-- .nav-single -->
//表示の例文ここまで
 
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>