	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="site-footer-logo col-sm-4 col-md-6">
					<?php $footer_image = dw_resume_get_theme_option('footer_image'); ?>
					<?php if( $footer_image ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $footer_image ); ?>" title="<?php bloginfo('name'); ?>"></a>
					<?php endif; ?>
				</div>
				<div class="site-info col-sm-8 col-md-6">
				<?php $footer_copyright = dw_resume_get_theme_option('footer_copyright'); ?>
				<?php if( $footer_copyright ) : ?>
				<?php echo $footer_copyright; ?>
				<?php else: ?>
				<?php printf( __( 'Copyright &copy; %1$s by %2$s.', 'dw-resume' ), esc_attr( date( 'Y' ) ), '<a href="' . home_url() . '" rel="designer">' . get_bloginfo( 'name' ) . '</a>' ); ?>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'dw-resume' ), '<a href="http://sc.chinaz.com/moban/">ChinaZ</a>', '<a href="http://sc.chinaz.com/moban/" rel="designer">DesignWall</a>' ); ?><br>
				<a href="<?php echo esc_url( __( 'http://sc.chinaz.com/moban/', 'dw-resume' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'dw-resume' ), 'WordPress' ); ?></a>
				<?php endif; ?>
				</div>
			</div>

		</div>
	</footer>
</div>
<a href="#page" class="back-to-top smooth-scroll" data-spy="affix" data-offset-top="200"><i class="ti-arrow-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>
