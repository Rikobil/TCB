<?php
/*
Template Name: Résultats
*/
get_header(); ?>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-8 col-md-4">
      <h1>Résultats</h1>
      <div class="underline-title"></div>
    </div>
  </div>
  <div class="row row-card-result">
        <section class="card card-resultat col-md-12">

      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array(
          'post_type'			=> 'resultat',
          'posts_per_page'	=> 4,
          'orderby'			=> 'date',
          'order'				=> 'DESC',
            'paged' => $paged
        ) );
    ?>

    <?php if ( $query->have_posts() ) : ?>

    <!-- begin loop -->
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="row resultat-top">
        <div class="col-md-1">
        </div>
        <article class="col-md-10">
          <div class="card-body">
            <h5 class="card-title card-resultat-title"><?php the_field('categorie')?> </h5>
            <div class="underline-title underline-card underline-resultat"></div>
            <small class="text-muted"><?php the_field("division")?> - <?php the_field("poule")?><br></small>
            <small class="text-muted"><?php the_field("date_du_match")?></small>
          </div>
        </article>
        <div class="col-md-1">
        </div>
      </div>
      <div class="row resultat-bot">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
          <h5 class="resultat-equipe"><?php the_field('équipe_1')?></h5>
          <p class="resultat-joueur">Joueur équipe 1</p>
          <p class="resultat-joueur">Joueur équipe 1</p>
          <p class="resultat-score"><?php the_field('resultat_equipe_1')?></p>
        </div>
        <div class="col-md-2">
          <div class=" resultat-line">
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="resultat-equipe"><?php the_field('équipe_2')?></h5>
          <p class="resultat-joueur">Joueur équipe 2</p>
          <p class="resultat-joueur">Joueur équipe 2</p>
          <p class="resultat-score"><?php the_field('resultat_equipe_2')?></p>
        </div>
        <div class="col-md-1">
        </div>
      </div>


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
                'mid_size'     => 1,
                'prev_next'    => true,
                'prev_text'    => sprintf( '<i></i> %1$s', __( '', 'text-domain' ) ),
                'next_text'    => sprintf( '%1$s <i></i>', __( '', 'text-domain' ) ),
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
