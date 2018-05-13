<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<body>

<div class="container-fluid top-carrousel">
  <div class="carrousel-dots">
    <div class="">
      <a class="carousel-control-prev rounded-circle carousel-control-next-home" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rounded-circle"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded-circle"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rounded-circle"></li>
    </ol>
      <a class="carousel-control-next rounded-circle carousel-control-next-home" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
  <div class="carrousel-inner">
    <div class="carrousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-xs- 12 col-md-6">
            <img class="d-block w-100" src="<?php the_field("image_slide_1")?>" alt="First slide">
          </div>
          <div class="col-xs- 12 col-md-6">
            <h1>
              <?php the_field("titre_slide_1")?>
            </h1>
            <div class="underline-title"></div>
            <p class="carrousel-text">
              long truc long truclong truc long truclong truc long truclong truc long truclong truc long truclong truc long truc  long truc long truclong truc long truclong truc long truclong truc long truclong truc long truclong truc long truclong truc long truclong truc long truclong truc long truclong truc long truclong truc long truc
            </p>
            <div class="btn btn-primary carrousel-btn">
              RÉSERVER
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-dots">
    <div class="carousel-nextprev">
      <a class="carousel-control-prev rounded-circle carousel-control-prev-home" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rounded-circle"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded-circle"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rounded-circle"></li>
    </ol>
    <a class="carousel-control-next rounded-circle carousel-control-next-home" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="carousel-img col-xs- 12 col-md-6">
            <img class="d-block w-100" src="<?php the_field("image_slide_1")?>" alt="First slide">
          </div>
          <div class="carousel-text col-xs- 12 col-md-6">
            <h1>
              <?php the_field("titre_slide_1")?>
            </h1>
            <div class="underline-title"></div>
            <p>
              <?php the_field("description_slide_1")?>
            </p>
            <div class="btn btn-primary btn-carousel">
              RÉSERVER
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="carousel-img col-xs- 12 col-md-6">
              <img class="d-block w-100" src="<?php the_field("image_slide_2")?>" alt="First slide">
            </div>
            <div class="carousel-text col-xs- 12 col-md-6">
              <h1>
                <?php the_field("titre_slide_2")?>
              </h1>
              <div class="underline-title"></div>
              <p>
                <?php the_field("description_slide_2")?>
              </p>
              <div class="btn btn-primary btn-carousel">
                RÉSERVER
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="carousel-img col-xs-12 col-md-6">
            <img class="d-block w-100" src="<?php the_field("image_slide_3")?>" alt="First slide">
          </div>
          <div class="carousel-text col-xs-12 col-md-6">
            <h1>
              <?php the_field("titre_slide_3")?>
            </h1>
            <div class="underline-title"></div>
            <p>
              <?php the_field("description_slide_3")?>
            </p>
            <div class="btn btn-primary btn-carousel">
              RÉSERVER
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container-fluid">

  <div class="row">
    <div class="col-1">
    </div>
    <div class="col-10 ctn-booking">
      <div class="container">
        <div class="row row-booking">
          <div class="col-md-2">
            <h3>Réservez </br> votre court</h3>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control" id="exampleFormControlSelect1">
                <option selected>Date</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control" id="exampleFormControlSelect1">
                <option selected>Heure</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <select class="form-control" id="exampleFormControlSelect1">
                <option selected>Court</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <div class="col-md-1">
            <div class="btn btn-primary btn-booking">
              RÉSERVER
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container ctn-actu">
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
          $query = new WP_Query( array(
            'post_type'			=> 'actualite',
            'posts_per_page'	=> 3,
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
      <?php endif; ?>
    </section>
  </div>
  <div class="row">
    <div class="col-12 text-center">
      <a href="" class="btn btn-primary btn-actu">VOIR TOUTES LES ACTUALITÉS</a>
    </div>
  </div>
</div>

<div class="container-fluid bck-result">
  <div class="container ctn-result">
    <div class="row">
      <div class="col-xs-8 col-md-4">
        <h1>Résultats</h1>
        <div class="underline-title"></div>
      </div>
    </div>
    <div class="row">
      <div class="card-deck">
        <section class="card-deck">

          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $query = new WP_Query( array(
              'post_type'			=> 'resultat',
              'posts_per_page'	=> 3,
              'orderby'			=> 'date',
              'order'				=> 'DESC',
                'paged' => $paged
            ) );
        ?>

        <?php if ( $query->have_posts() ) : ?>

        <!-- begin loop -->
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <article class="card card-result">
            <img class="card-img-top" src="http://via.placeholder.com/500x300/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php the_field("categorie")?></h5>
              <div class="underline-title underline-card"></div>
              <small class="text-muted"><?php the_field("division")?> - <?php the_field("poule")?><br></small>
              <small class="text-muted"><?php the_field("date_du_match")?></small>
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
    <div class="row">
      <div class="col-12 text-center">
        <a href="" class="btn btn-primary btn-actu">VOIR TOUTES LES RÉSULTATS</a>
      </div>
    </div>
  </div>
</div>

<div class="container ctn-club">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10 card-club">
      <div class="row">
          <div class="col-xs-12 col-md-6 club-text">
            <div class="row">
              <div class="col-10">
                <h1>Le Club</h1>
                <div class="underline-title"></div>
              </div>
            </div>
            <div class="row">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend dui ac lorem auctor, in tristique nunc consectetur. Mauris hendrerit nunc vitae ullamcorper posuere. Aenean orci leo, scelerisque eget quam quis, vehicula dapibus ligula.</p>
            </div>
            <div class="row">
              <a href="" class="btn btn-primary btn-club">VOIR LE CLUB</a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="row">
              <div class="col-6 ctn-club-img">
                <img class="club-img" src="http://via.placeholder.com/180x180" alt="">
              </div>
              <div class="col-6 ctn-club-img">
                <img class="club-img" src="http://via.placeholder.com/180x180" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-6 ctn-club-img">
                <img class="club-img" src="http://via.placeholder.com/180x180" alt="">
              </div>
              <div class="col-6 ctn-club-img">
                <img class="club-img" src="http://via.placeholder.com/180x180" alt="">
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid text-center my-3">
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-82" role="listbox">
            <div class="carousel-item row active">
                <div class="col-3 float-left"><img class="img-fluid" src="http://placehold.it/150x150/222/fff?text=1"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="http://placehold.it/150x150/444?text=2"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="http://placehold.it/150x150/888?text=3"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="http://placehold.it/150x150/333?text=4"></div>
            </div>
            <div class="carousel-item row ">
                <div class="col-3 float-left"><img class="img-fluid" src="http://placehold.it/150x150?text=5"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="http://placehold.it/150x150/555?text=6"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="http://placehold.it/150x150/333/fff?text=7"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="http://placehold.it/150x150/888?text=8"></div>
            </div>
        </div>
        <a class="carousel-control-prev rounded-circle" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next rounded-circle" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <a href="" class="btn btn-primary btn-partner">VOIR LES PARTENAIRES</a>
      </div>
    </div>
</div>

</div>

</body>
<?php get_footer(); ?>
