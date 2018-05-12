<?php
/*
Template Name: actualite
*/
get_header(); ?>
<body>
  <article class="container ctn-single-actualite">
    <div class="row">
      <div class="col-xs-8 col-md-5">
        <h1><?php the_title()?></h1>
        <div class="underline-title"></div>
        <small class="text-muted">Intégrer PHP</small>
      </div>
    </div>
    <div class="row single-actualite">
      <div class="col-md-6">
        <img class="col-md-12" src="<?php the_field("image_actualite")?>" alt="">
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <h5 class="card-title">Intégrer php</h5>
          <div class="underline-title underline-card"></div>
        </div>
        <div class="cold-md-12">
          <?php the_post(); the_content() ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="underline-title underline-card"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <a class="footer-facebook" target="_blank" href="https://www.facebook.com/Tennis-Club-Bouliac-151002651635060/"><i class="fab fa-facebook-f"></i></a>
        <a class="footer-twitter" target="_blank" href="https://twitter.com/TennisBouliac"><i class="fab fa-twitter"></i></a>
      </div>
          </div>
  </article>
  <div class="container-fluid bck-result single-actualite-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-md-5">
          <h1>Actualités récentes</h1>
          <div class="underline-title"></div>
        </div>
      </div>
      <div class="row">
        <section class="card-deck">

          <?php
            $currentID = get_the_ID();
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $query = new WP_Query( array(
              'post__not_in' => array($currentID),
              'post_type'			=> 'actualite',
              'posts_per_page'	=> 3,
              'orderby'			=> 'date',
              'order'				=> 'DESC',
                'paged' => $paged,
            ) );
        ?>

        <?php if ( $query->have_posts() ) : ?>

        <!-- begin loop -->
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <article class="card card-actu card-single-actu">
              <a href="<?php the_permalink()?>"><img class="card-img-top" src="<?php the_field("image_actualite")?>" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title"><?php the_title()?> </h5>
                <div class="underline-title underline-card"></div>
                <small class="text-muted">Intégrer PHP</small>
              </div>
              <div class="card-footer">
                <a href="<?php the_permalink()?>" class="leftline">VOIR PLUS</a>
              </div>
            </article>

        <?php endwhile; ?>
        <?php endif; ?>
      </section>
      </div>
    </div>
  </div>
</body>
<?php get_footer(); ?>
