<?php get_header(); ?>
<?php
$term = get_queried_object();
$cat_id = $term->term_id; // $term->term_id - это id таксономии или категории

// извлекаем данные наших произвольных полей для категории
$cat_data = get_option("category_$cat_id");
?>
  <article class="article">
    <div class="container">
      <?php echo category_description(); ?>
    </div>
  </article>
<?php if (have_posts()) {?>
  <section class="services">
    <div class="container">
  <?php if (!empty($cat_data['cat_text1'])) {?>
    <h2 class="services__heading">
      <?php echo $cat_data['cat_text1']; ?>
    </h2>
  <?php } ?>
      <div class="row">
      <?php while (have_posts()) : the_post(); ?>
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
      </div>
    </div>
  </section>
<?php }?>
<?php get_footer(); ?>