<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns row" role="main">





				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'front-page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->



		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
