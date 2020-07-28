<?php get_header(); ?>
    <!-- Intro Header -->
    <header class="">
        <div class="">
          <!-- id=11287 -->
      <?php echo do_shortcode('[metaslider id=75]'); ?>
        </div>
    </header>
    <!-- About Section -->
    <section id="about" class="container content-section text-center">

        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <h2><img src="<?php echo get_template_directory_uri(); ?>/img/sns.png" alt="sns"></h2>
            <div class="sns">
              <a class="twitter-timeline" data-width="100%" data-height="800" href="https://twitter.com/OHANA_DONMARU_S">Tweets by OHANA_DONMARU_S</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
       		</div>
		    </div>
        <?php get_sidebar('notice'); ?>
    </section>

	<div class="clear"></div>
	<section id="menu" class="container content-section-1 text-center">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
		    <h2><img src="<?php echo get_template_directory_uri(); ?>/img/oshina.png" alt="お品がき"></h2>
        <?php echo do_shortcode('[metaslider id=188]'); ?>
        <!-- <ul class="img_box">
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/kaisen.png">おはな海鮮丼</li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/donmaru.png">丼丸丼</li>
				</ul>
			     <a href="<?php bloginfo('url'); ?>/menu"><div class="menu_link">メニュー一覧</div></a> -->
          </div>
        </div>
      <?php get_sidebar('food'); ?>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center black_back">
        <div class="download-section">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/img/shop.png" alt="店舗情報"></h2>
                <ul class="img_box">

          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <li><a href="<?php the_permalink(); ?>">
              <p class="tenpo"><strong>
                <?php the_title(); ?>
              </strong><br>
              〒<?php echo post_custom('postal'); ?><br>
              <?php echo post_custom('adress'); ?><br>
              電話番号：<?php echo post_custom('tel'); ?><br>
              <?php if(post_custom('other') !== ''){
                echo post_custom('other');
              }?>
            </p>
            <?php if( has_post_thumbnail() ): ?>
              <div><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>"></div>
            <?php endif; ?>
            </a></li>
          <?php endwhile; endif; ?>
          </ul>
            </div>
        </div>
      </section>

<!-- Schedule Section -->
<?php get_sidebar('company'); ?>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center contact">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="コンタクト"></h2>


                <div class="formbox">

				<div id="form" class="clearfix">

          <!-- <?php echo do_shortcode('[contact-form-7 id="11318" title="mail1"]'); ?> -->
          <?php echo do_shortcode('[contact-form-7 id="192" title="コンタクトフォーム2"]'); ?>



                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->

<?php get_footer(); ?>
