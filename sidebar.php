<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
  <section id="about" class="container content-section text-center">

      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/img/sns.png" alt="sns"></h2>
              <div class="sns">
              <a class="twitter-timeline" data-width="100%" data-height="800" href="https://twitter.com/OHANA_DONMARU_S">Tweets by OHANA_DONMARU_S</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
  </div>
  </section>
<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
<aside>
  <div class="clear"></div>
  <section id="menu" class="container content-section-1 text-center">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
  <h2><img src="<?php echo get_template_directory_uri(); ?>/img/oshina.png" alt="お品がき"></h2>
<?php echo do_shortcode('[metaslider id=11373]'); ?>

<p>各店舗によりメニューが異なります。メニュー写真は、掲載しておりませんので各店の店頭メニューにて、ご確認お願い致します。</p>
          </div>
      </div>
  </section>
<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside>
<?php endif; ?>
