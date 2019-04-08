<?php

function weraw_ligues() {

	$weraw_ligues = array(
    "Appengers" => array(
      array(
        "name" => "CaptainMalware", // le nom du personnage
        "image"=>"HEROS-malwear.png", // placer l'image dans medias/vignettes, format x sur x.
        "url"=>"supermachin.example.com", // sans le https://
      ),
			array(
        "name" => "Hackerman",
        "image"=>"HEROS-hackerman.png",
        "url"=>"supermachin3.example.com",
      ),
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
        "url"=>"supermachin3.example.com",
      ),
			array(
        "name" => "Opacity",
        "image"=>"HEROS-opacity.png",
        "url"=>"superheros.tenzinlama.ch",
      ),
      array(
        "name" => "Dropshadow",
        "image"=>"HEROS-wand.png",
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
			)
		),
  );

	return $weraw_ligues;
}

// Ajout d'une classe au "body" en fonction de la ligue actuelle...

add_filter( 'body_class','weraw_bodyclass' );
function weraw_bodyclass( $classes ) {
 
    foreach ($weraw_ligues as $nom_ligue => $ligue) {

        $key = array_search($_SERVER['HTTP_HOST'], array_column($ligue, 'url'));

        if ( $key === 0 || $key > 0 ) {

          $classes[] = "ligue-".strtolower($nom_ligue);

        }
    }
     
    return $classes;
     
}
