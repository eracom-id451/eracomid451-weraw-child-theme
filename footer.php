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

  <?php

  // définir les ligues

  $weraw_ligues = weraw_ligues();

  ?>

  <section class="interligue">

      <?php

      // Coéquipier de ligue

      // obtenir le nom de domaine du serveur actuel avec $_SERVER['HTTP_HOST']
      // vérifier s'il est dans une des ligues.
      // si oui, produire la liste des AUTRES personnages

      foreach ($weraw_ligues as $nom_ligue => $ligue) {

        $key = array_search($_SERVER['HTTP_HOST'], array_column($ligue, 'url'));
        $bypass[] = $_SERVER['HTTP_HOST'];

        if ( $key === 0 || $key > 0 ) {

          // echo '<h2>'. $nom_ligue .':</h2>';
          ?>
          <h2 class="coequipier">Coéquipier de ligue</h2>
          <ul class="trombi ligue">
          <?php

          foreach ($ligue as $i => $perso) {
							if($perso["url"] != $_SERVER['HTTP_HOST']){
								echo '<li>
		            <a href="https://'.$perso["url"].'">
		              <div class="losange">
		                <img src="'. get_stylesheet_directory_uri().'/medias/heros/'.$perso["image"].'" alt="Super hero-UN">
		              </div>
		              <p>'.$perso["name"].'</p>
		            </a>
		          </li>';
              $bypass[] = $perso["url"];
							}
          }

          echo '</ul>';

        } // fin ligue

      } // fin coéquipiers

        ?>

      <aside>
      <h2 class="lesautres">Les autres héros</h2>
      <?php

      // afficher tous les autres...
      // combiner
      $all_heroes = array();

      foreach ($weraw_ligues as $nom_ligue => $ligue) {
        if ( is_array( $ligue ) ) {
          $all_heroes = array_merge($all_heroes, $ligue);
        }
      }
      if ( is_array( $all_heroes ) ) {
        echo ' <ul class="trombi autres">';
        foreach ($all_heroes as $i => $perso) {

            if( !in_array( $perso["url"], $bypass ) ) {
                echo '<li class="ligue-'.strtolower($nom_ligue).'">
                <a href="https://'.$perso["url"].'">
                  <div class="losange">
                    <img src="'. get_stylesheet_directory_uri().'/medias/heros/'.$perso["image"].'" alt="Super hero-UN">
                  </div>
                  <p>'.$perso["name"].'</p>
                </a>
              </li>';
              }
            }

        echo '</ul>';
      }

      ?>
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
