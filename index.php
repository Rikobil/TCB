<?php
/*
Template Name: Homepage
*/
get_header(); ?>

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
            <img class="d-block w-100" src="http://via.placeholder.com/500x300" alt="First slide">
          </div>
          <div class="carousel-text col-xs- 12 col-md-6">
            <h1>
              Réservez </br> votre cours
            </h1>
            <div class="underline-title"></div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend dui ac lorem auctor, in tristique nunc consectetur. Mauris hendrerit nunc vitae ullamcorper posuere.
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
              <img class="d-block w-100" src="http://via.placeholder.com/500x300" alt="First slide">
            </div>
            <div class="carousel-text col-xs- 12 col-md-6">
              <h1>
                Réservez </br> votre cours
              </h1>
              <div class="underline-title"></div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend dui ac lorem auctor, in tristique nunc consectetur. Mauris hendrerit nunc vitae ullamcorper posuere.
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
          <div class="carousel-img col-xs- 12 col-md-6">
            <img class="d-block w-100" src="http://via.placeholder.com/500x300" alt="First slide">
          </div>
          <div class="carousel-text col-xs- 12 col-md-6">
            <h1>
              Réservez </br> votre cours
            </h1>
            <div class="underline-title"></div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend dui ac lorem auctor, in tristique nunc consectetur. Mauris hendrerit nunc vitae ullamcorper posuere.
            </p>
            <div class="btn btn-primary btn-carousel">
              RÉSERVER
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev rounded-circle" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next rounded-circle" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php get_footer(); ?>
