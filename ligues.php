<?php

function weraw_ligues() {

	$weraw_ligues = array(
    "Appengers" => array(
      array(
        "name" => "SuperPerso", // le nom du personnage
        "image"=>"supermachin.png", // placer l'image dans medias/vignettes, format x sur x.
        "url"=>"supermachin.example.com", // sans le https://
      ),
      array(
        "name" => "SuperPerso2",
        "image"=>"supermachin2.png",
        "url"=>"supermachin2.example.com",
      ),
    ),
    "Doctype" => array(
      array(
        "name" => "SuperPerso3",
        "image"=>"supermachin3.png",
        "url"=>"supermachin3.example.com",
      ),
      array(
        "name" => "SuperPerso4",
        "image"=>"supermachin4.png",
        "url"=>"ms-studio:8888",
      )
    ),
		"Hybrid" => array(
			array(
				"name" => "Pathfinder",
				"image"=>"pathfinder_hero.png",
				"url"=>"superhero.tanguybula.com",
			),
			array(
				"name" => "SuperPerso4",
				"image"=>"supermachin4.png",
				"url"=>"ms-studio:8888",
			)
		),
  );

	return $weraw_ligues;
}