<?php
/*
Template Name: Contact
*/
get_header(); ?>
<body>
  <div class="container">
    <div class="row">
      <div class="card card-contact">
        <div class="col-xs-8 col-md-4">
          <h1>Contact</h1>
          <div class="underline-title"></div>
        </div>
        <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="99" title="Contact form 1"]' ); ?>
        </div>
        </div>
    </div>
    <div class="row">
      <div class="col-xs-8 col-md-4">
        <h1>Coordonées</h1>
        <div class="underline-title"></div>
      </div>
    </div>
    <div class="row">
        <h3 class="contact-infos col-md-12">Tennis Club de Bouliac<br>10 bis rue Louis Brochard<br>33270 Bouliac<br>05 56 20 94 01</h3>
    </div>
    <div class="row">
      <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d896.2804204442846!2d-0.5024561928797575!3d44.813693550222354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5525b37da41f7b%3A0xa69bdd44c84346b2!2sRue+Brochard%2C+33270+Bouliac!5e0!3m2!1sfr!2sfr!4v1526170662520" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    </div>
  </div>
</body>


<?php get_footer() ?>
