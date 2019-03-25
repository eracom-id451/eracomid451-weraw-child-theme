<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Atomic Blocks
 */
?>

	</div><!-- #content -->
</div><!-- #page .container -->

<footer id="colophon" class="site-footer">


  <section class="interligue">
      <h2>Coéquipier de ligue</h2>
      <ul class="trombi ligue">
        <li>
          <div class="losange">
            <img src="superhero-deux.png" alt="Super hero-UN">
          </div>
          <p>Jean Jaque</p>
        </li>
        <li>
          <div class="losange">
            <img src="superhero-trois.png" alt="Super hero-UN">
          </div>
          <p>Claude vincent</p>
        </li>
        <li>
          <div class="losange">
            <img src="superhero-deux.png" alt="Super hero-UN">
          </div>
          <p>Jean Jaque</p>
        </li>

      </ul>
      <aside>
      <h2>Les autres héros</h2>
      <ul class="trombi autres">
        <li><div class="losange"><img src="superhero-deux.png" alt="coucou"></div></li>
        <li><div class="losange"><img src="superhero-deux.png" alt="coucou"></div></li>
        <li><div class="losange"><img src="superhero-deux.png" alt="coucou"></div></li>
        <li><div class="losange"><img src="superhero-deux.png" alt="coucou"></div></li>
        <li><div class="losange"><img src="superhero-deux.png" alt="coucou"></div></li>
        <li><div class="losange"><img src="superhero-deux.png" alt="coucou"></div></li>
        <li><div class="losange"><img src="superhero-deux.png" alt="coucou"></div></li>
        <li><div class="losange"><img src="superhero-deux.png" alt="coucou"></div></li>

      </ul>
    </aside>

  </section>



	<div class="container">
		<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
			<div class="footer-widgets">
				<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
					<div class="footer-column">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php } ?>

				<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
					<div class="footer-column">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php } ?>

				<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
					<div class="footer-column">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php } ?>
			</div>
		<?php endif; ?>

		<div class="footer-bottom">
			<div class="footer-tagline">
				<div class="site-info">
					<?php echo atomic_blocks_filter_footer_text(); ?>
				</div>
			</div><!-- .footer-tagline -->

			<?php if ( has_nav_menu( 'social' ) ) { ?>
				<nav class="social-navigation">
					<?php wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'fallback_cb'    => false
					) );?>
				</nav><!-- .social-navigation -->
			<?php } ?>
		</div><!-- .footer-bottom -->
	</div><!-- .container -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
