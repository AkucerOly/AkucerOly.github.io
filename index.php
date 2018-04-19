<?php get_header(); ?>
<main id="main" class="site-main" role="main">
<?php
	$sections = apply_filters( 'dw_resume_frontpage_sections_order', array(
		'about', 'skills', 'expertise', 'expierence', 'portfolio', 'testimonials', 'contact', 'cta'
	) );

	foreach ( $sections as $section ) {
		get_template_part('section-parts/section', $section );
	}
?>
</main>
<?php get_footer(); ?>
