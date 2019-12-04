    <footer class="footer" role="contentinfo">
        <div class="container">
	        <small class="copytext">
	        	&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?>.</a> 
				<?php echo get_the_privacy_policy_link( $before = ' <span class="separator">|</span> ' ); ?>
			</small>
	    </div>
    </footer>
</div> <?php // end wrapper ?>

<?php wp_footer(); ?>

</body>
</html>
