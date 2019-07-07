<?php  

include '../ewc_generator.class.php';

$EWCGenerator = new EWCGenerator();

$gen = $EWCGenerator->create([
		"file_name" => "default_ewc_generator",
		"extension" => "doc",
		"hasHTML" => false,
		"document" => "../../applications.html",
		"title" => [
			"content"=>"pagetitle",
			"align" => "center"
		]
	]);

if (!$gen) {
	echo $gen;
}
?>