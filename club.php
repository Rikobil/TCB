<?php
/*
Template Name: Club
*/
get_header(); ?>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="club-bck-img"></div>
      </div>
    </div>
  </div>

  <div class="container ctn-club-pres">
      <div class="row">
        <div class="col-xs-8 col-md-4">
          <h1>Le Club</h1>
          <div class="underline-title"></div>
        </div>
        <div class="col-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend dui ac lorem auctor, in tristique nunc consectetur. Mauris hendrerit nunc vitae ullamcorper posuere.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. </br></br> Mauris eleifend dui ac lorem auctor, in tristique nunc consectetur. Mauris hendrerit nunc vitae ullamcorper posuere.  </p>
        </div>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rounded-circle"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded-circle"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rounded-circle"></li>
        </ol>
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
        <div class="carousel-control-ctn">
          <a class="carousel-control-prev rounded-circle carousel-control-prev-home" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next rounded-circle carousel-control-next-home" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
  </div>

  <div class="container-fluid horaire">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-md-4 horaire-title">
          <h1>Le Club</h1>
          <div class="underline-title"></div>
        </div>
      </div>
      <div class="row">
        <div class="d-flex flex-row justify-content-center flex-wrap">
          <div class="p-5">
            <h2>Lundi</h2>
            <p><?php the_field('ouverture_lundi') ?> - <?php the_field('fermeture_lundi') ?></p>
          </div>
          <div class="p-5">
            <h2>Mardi</h2>
            <p><?php the_field('ouverture_mardi') ?> - <?php the_field('fermeture_mardi') ?></p>
          </div>
          <div class="p-5">
            <h2>Mercredi</h2>
            <p><?php the_field('ouverture_mercredi') ?> - <?php the_field('fermeture_mercredi') ?></p>
          </div>
          <div class="p-5">
            <h2>Jeudi</h2>
            <p><?php the_field('ouverture_jeudi') ?> - <?php the_field('fermeture_jeudi') ?></p>
          </div>
          <div class="p-5">
            <h2>Vendredi</h2>
            <p><?php the_field('ouverture_vendredi') ?> - <?php the_field('fermeture_vendredi') ?></p>
          </div>
          <div class="p-5">
            <h2>Samedi</h2>
            <p><?php the_field('ouverture_samedi') ?> - <?php the_field('fermeture_samedi') ?></p>
          </div>
          <div class="p-5">
            <h2>Dimanche</h2>
            <p><?php the_field('ouverture_dimanche') ?> - <?php the_field('fermeture_dimanche') ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container club-house">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10 card-club">
        <div class="row">
            <div class="col-xs-12 col-md-6 club-text">
              <div class="row">
                <div class="col-10">
                  <h1>Le Club House</h1>
                  <div class="underline-title"></div>
                </div>
              </div>
              <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend dui ac lorem auctor, in tristique nunc consectetur. Mauris hendrerit nunc vitae ullamcorper posuere. Aenean orci leo, scelerisque eget quam quis, vehicula dapibus ligula.</p>
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
    <div class="row">
      <div class="col-12 text-center">
        <a href="" class="btn btn-primary btn-club-house">S'INSCRIRE</a>
      </div>
    </div>
  </div>

</body>

<?php get_footer() ?>
