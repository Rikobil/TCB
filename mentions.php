<?php
/*
Template Name: Mentions
*/
get_header(); ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-md-4">
				<h1>Mentions légales</h1>
				<div class="underline-title"></div>
			</div>
		</div>
		<div class="row mentions">
			<?php the_post();the_content() ?>
		</div>
	</div>
</body>
<?php get_footer() ?>
