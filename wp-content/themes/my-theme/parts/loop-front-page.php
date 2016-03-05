<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header c">
			<div class="hero-div  text-center">
				<h1 class="page-title" id="main-title">Mis días en Sodoma</h1>
				<h2><em>Mi viaje en el mundo de la seducción</em></h2>
			</div>


			<div class="newsletter-txt">
				<h2>Recibe un reporte cada semana</h2>
				<span class="">Correo electrónico</span>
				<div class="input-group">
				  <input class="input-group-field" type="email" placeholder="tucorreo@ejemplo.com">
				  <div class="input-group-button">
				    <input type="submit" class="button" value="Suscribe">
				  </div>
				</div>
			</div>

	</header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
	    <?php //the_content(); ?>
	    <?php //wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->



	<?php comments_template(); ?>

</article> <!-- end article -->

<!--Here starts the recentPosts loop-->
<h3 class="text-center">Posts recientes</h3>
<div class="recent-posts-gallery row">
<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=6');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div class="large-4 columns single-post"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
<?php endwhile; ?>

</div>
