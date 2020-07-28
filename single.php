<?php get_header("2"); ?>

    <section id="single" class="container content-section text-center">
        <div class="row">
         <div class="single_content">
            <div class="col-lg-8 floatleft">
               
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                
                <?php the_post_thumbnail('size1'); ?>

<div class="imagezone">                
<?php
//サイズの定義
$size = 'thumbnail';
//エントリーに属しているアタッチメントIDを取得する
$postCustomMulti = post_custom('image');

if($postCustomMulti) {
?>
<?php
//アタッチメントIDの配列から画像を取得する
foreach($postCustomMulti as $var) {
$postImg = wp_get_attachment_image($var, $size);
$file = wp_get_attachment_url($var);
?>
<div class="postImg"><a href="<?php echo clean_url($file); ?>" rel="lightbox"><?php echo $postImg; ?></a></div>
<?php } //foreach ?>
<?php } //if ?>
</div>                
				
				
                </div>

		<div class="col-lg-4 floatleft">
		<table id="dataTable">
			<tbody><tr>
			<th>店舗名</th>
			<td><?php the_title(); ?></td>
			</tr>
			
			<tr>
			<th>住所</th>
			<td><?php echo post_custom('adress'); ?></td>
			<tr>
			
			<tr>
			<th>アクセス</th>
			<td><?php echo post_custom('access'); ?></td>
			</tr>

			<tr>
			<th>電話番号</th>
			<td><?php echo post_custom('tel'); ?></td>
			</tr>

			<tr>
			<th>営業時間</th>
			<td><?php echo post_custom('time'); ?></td>
			</tr>
			
			<tr>
			<th>定休日</th>
			<td><?php echo post_custom('holiday'); ?></td>
			</tr>
			
			<tr>
			<th>お店から一言</th>
			<td><?php the_content(); ?></td>
			</tr>
		</tbody></table>
		</div>
		
		<div class="clear"></div>
		
		<div class="col-lg-12">
		<?php if ( post_custom('adress') ) : ?>
		<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.jp/maps?q=<?php echo post_custom('adress'); ?>&z=15&output=embed"></iframe>
<?php endif; ?>
		</div>
		<?php endwhile; endif; ?>

		
        </div>
    </section>
    
<?php get_footer(); ?>