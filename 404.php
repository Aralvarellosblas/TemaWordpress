<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link 
 *
 * @package WordPress
 * @subpackage twenty-seventeen-child
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! No hemos encontrado lo que buscabas!', 'twenty-seventeen-child' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'Tu busqueda no ha dado resultados. Quizas quieras buscarla de nuevo', 'twenty-seventeen-child' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
