<?php get_header(); ?>

<body>
  <?php echo do_shortcode( '[searchandfilter taxonomies="category,post_tag"]' ); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-8 col-md-4">
      <h1>Actualités</h1>
      <div class="underline-title"></div>
    </div>
  </div>
  <div class="row">
        <section class="card-deck">

      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$title = get_the_title();
			  $query = new WP_Query( array(
          'post_type'			=> $title,
          'posts_per_page'	=> 9,
          'orderby'			=> 'date',
          'order'				=> 'DESC',
            'paged' => $paged
        ) );
    ?>

    <?php if ( $query->have_posts() ) : ?>

    <!-- begin loop -->
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <article class="card card-actu">
        <a href="<?php the_permalink()?>"><img class="card-img-top" src="<?php the_field("image_actualite")?>" alt="Card image cap"></a>
        <div class="card-body">
          <h5 class="card-title"><?php the_title()?> </h5>
          <div class="underline-title underline-card"></div>
          <small class="text-muted">Last updated 3 mins ago</small>
          <p class="card-text"><?php the_content()?></p>
        </div>
        <div class="card-footer">
          <a href="<?php the_permalink()?>" class="leftline">VOIR PLUS</a>
        </div>
      </article>

    <?php endwhile; ?>
    <!-- end loop -->




    </section>
  </div>
  <div class="row">
    <div class="actualites-pagination">
        <?php
            echo paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $query->max_num_pages,
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 1,
                'mid_size'     => 0,
                'prev_next'    => true,
                'prev_text'    => sprintf( '<i></i> %1$s', __( 'Précedent', 'text-domain' ) ),
                'next_text'    => sprintf( '%1$s <i></i>', __( 'Suivant', 'text-domain' ) ),
                'add_args'     => false,
                'add_fragment' => '',
            ) );
        ?>
      <?php endif; ?>
    </div>
  </div>
</div>
</body>

<?php get_footer(); ?>
