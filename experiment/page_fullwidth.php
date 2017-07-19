<?php
/**
 * Template Name: Full Width Page Template
 *
 * This is the template that displays Full Width pages.
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Experiment
 */

 get_header(); ?>

 <div id="primary" class="content-area col-md-12">
 <main id="main" class="site-main" role="main">

 <?php
 while( have_posts()) : the_post();
 get_template_part('template-parts/content','page');
 endwhile;
 ?>
 	
 </main>
 	</div> 
 	<?php
 	get_footer();