<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
  <article class="article">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; ?>
<?php endif; ?>
  <section class="services">
    <div class="container">
      <h2 class="services__heading">
        Помощь адвоката юридическим лицам
      </h2>
      <div class="row">
        <?php
        $id = 3;
        $helpUL = new WP_Query([
          'cat' => $id,
          'order' => 'DESC',
          'posts_per_page' => 50
        ]);
        ?>
        <?php if ($helpUL->have_posts()) {?>
          <?php while ($helpUL->have_posts()) : $helpUL->the_post(); ?>
          <div class="col-md-4">
            <a href="<?php the_permalink(); ?>">
              <div class="services__item">
                <div class="services__item-top">
                  <div class="services__item-icon">
                    <span class="mercury-icon-briefcase"></span>
                  </div>
                  <div class="services__item-heading">
                    <h5><?php the_title();?></h5>
                  </div>
                </div>
                <div class="services__item-divider"></div>
                <div class="services__item-body">
                  <p><?php the_excerpt();?></p>
                </div>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
        <?php } ?>
      </div>
      <h2 class="services__heading">
        Помощь адвоката физическим лицам
      </h2>
      <div class="row">
        <?php
        $id = 1;
        $helpFL = new WP_Query([
          'cat' => $id,
          'order' => 'DESC',
          'posts_per_page' => 50
        ]);
        ?>
        <?php if ($helpFL->have_posts()) {?>
          <?php while ($helpFL->have_posts()) : $helpFL->the_post(); ?>
            <div class="col-md-4">
              <a href="<?php the_permalink(); ?>">
                <div class="services__item">
                  <div class="services__item-top">
                    <div class="services__item-icon">
                      <span class="mercury-icon-briefcase"></span>
                    </div>
                    <div class="services__item-heading">
                      <h5><?php the_title();?></h5>
                    </div>
                  </div>
                  <div class="services__item-divider"></div>
                  <div class="services__item-body">
                    <p><?php the_excerpt();?></p>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        <?php } ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>