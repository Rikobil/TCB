<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<body>
<div class="container-fluid">
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
    <div class="card-deck card-deck-actu">
      <div class="card card-actu">
        <img class="card-img-top" src="http://via.placeholder.com/500x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Tournoi de Noël</h5>
          <div class="underline-title underline-card"></div>
          <small class="text-muted">Last updated 3 mins ago</small>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="leftline">VOIR PLUS</a>
        </div>
      </div>
      <div class="card card-actu">
        <img class="card-img-top" src="http://via.placeholder.com/500x300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Tournoi de Noël</h5>
          <div class="underline-title underline-card"></div>
          <small class="text-muted">Last updated 3 mins ago</small>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="leftline">VOIR PLUS</a>
        </div>
      </div>
      <div class="card card-actu">
        <img class="card-img-top" src="http://via.placeholder.com/500x300/" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Tournoi de Noël</h5>
          <div class="underline-title underline-card"></div>
          <small class="text-muted">Last updated 3 mins ago</small>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="leftline">VOIR PLUS</a>
        </div>
      </div>
    </div>
  </div>
</div>



</div>

</body>
<?php get_footer(); ?>
