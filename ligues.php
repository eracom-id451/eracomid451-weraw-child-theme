<?php

function weraw_ligues() {

	$weraw_ligues = array(
    "Appengers" => array(
			array(
        "name" => "Troisdé",
        "image"=>"HEROS-troisde.png",
        "url"=>"super.mariusparisod.ch",
      ),
      array(
        "name" => "Afterburner",
        "image"=>"HEROS-wand.png",
        "url"=>"hero.loannjuillerat.ch",
      ),
    ),
    "Doctype" => array(
      array(
        "name" => "Zindex",
        "image"=>"HEROS-wand.png",
        "url"=>"superheros.diano-dimatteo.ch",
      ),
			array(
        "name" => "Bordercollapse",
        "image"=>"HEROS-BorderCollapse.png",
        "url"=>"weraw.nathantosoni.ch",
      ),
			array(
        "name" => "Opacity",
        "image"=>"HEROS-opacity.png",
        "url"=>"superheros.tenzinlama.ch",
      ),
      array(
        "name" => "Dropshadow",
        "image"=>"HEROS-DropShadow.png",
        "url"=>"weraw.jonas-paul.ch",
      )
    ),
		"Hybrid" => array(
			array(
				"name" => "Eraser",
				"image"=>"HEROS-ereaser.png",
				"url"=>"eraser.tenzinlama.ch",
			),
			array(
				"name" => "Pathfinder",
				"image"=>"HEROS-pathfinder.png",
				"url"=>"superhero.tanguybula.com",
			),
			array(
				"name" => "Wand",
				"image"=>"HEROS-wand.png",
				"url"=>"hero.eduardo-espinoza.ch",
			),
			array(
				"name" => "Lasso",
				"image"=>"HEROS-lasso.png",
				"url"=>"super.ugodalpont.ch",
			)
		),
  );

	return $weraw_ligues;
}

// Ajout d'une classe au "body" en fonction de la ligue actuelle...

add_filter( 'body_class','weraw_bodyclass' );
function weraw_bodyclass( $classes ) {
 	  $weraw_ligues = weraw_ligues();
    foreach ($weraw_ligues as $nom_ligue => $ligue) {

        $key = array_search($_SERVER['HTTP_HOST'], array_column($ligue, 'url'));

        if ( $key === 0 || $key > 0 ) {

          $classes[] = "ligue-".strtolower($nom_ligue);

        }
    }

    return $classes;

}
