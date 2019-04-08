<?php

function weraw_ligues() {

	$weraw_ligues = array(
    "Appengers" => array(
      array(
        "name" => "CaptainMalware", // le nom du personnage
        "image"=>"supermachin.png", // placer l'image dans medias/vignettes, format x sur x.
        "url"=>"supermachin.example.com", // sans le https://
      ),
			array(
        "name" => "Hackerman",
        "image"=>"supermachin3.png",
        "url"=>"supermachin3.example.com",
      ),
      array(
        "name" => "Afterburner",
        "image"=>"supermachin2.png",
        "url"=>"hero.loannjuillerat.ch",
      ),
    ),
    "Doctype" => array(
      array(
        "name" => "Zindex",
        "image"=>"supermachin3.png",
        "url"=>"superheros.diano-dimatteo.ch",
      ),
			array(
        "name" => "Bordercollapse",
        "image"=>"supermachin3.png",
        "url"=>"supermachin3.example.com",
      ),
			array(
        "name" => "Opacity",
        "image"=>"supermachin3.png",
        "url"=>"superheros.tenzinlama.ch",
      ),
      array(
        "name" => "Dropshadow",
        "image"=>"supermachin4.png",
        "url"=>"weraw.jonas-paul.ch",
      )
    ),
		"Hybrid" => array(
			array(
				"name" => "Eraser",
				"image"=>"pathfinder_hero.png",
				"url"=>"eraser.tenzinlama.ch",
			),
			array(
				"name" => "Pathfinder",
				"image"=>"pathfinder_hero.png",
				"url"=>"superhero.tanguybula.com",
			),
			array(
				"name" => "Wand",
				"image"=>"supermachin4.png",
				"url"=>"hero.eduardo-espinoza.ch",
			)
		),
  );

	return $weraw_ligues;
}
