<?php if ( is_active_sidebar( 'sidebar-company' ) ): ?>
  <section id="schedule" class="container content-section-schedule text-center">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/img/company.png" alt="会社概要"></h2>
              <?php dynamic_sidebar( 'sidebar-company' ); ?>
              
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.899387107979!2d139.83901481581148!3d35.72869288018325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188f446826e5fd%3A0xaac80876ac2a47ab!2z44CSMTI0LTAwMTQg5p2x5Lqs6YO96JGb6aO-5Yy65p2x5Zub44Gk5pyo77yR5LiB55uu77yR77yZ4oiS77yU!5e0!3m2!1sja!2sjp!4v1497324353419" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
      </div>
  </section>


<?php endif; ?>
