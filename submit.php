<?php
include 'ewc_generator.class.php';


$text_input = $_POST['text_input'] ?? null;

if ($text_input) {
  $EWCGenerator = new EWCGenerator();

$gen = $EWCGenerator->create([
    "file_name" => "default_ewc_generator",
    "extension" => "doc",
    "hasHTML" => true,
    "document" => $text_input
  ]);

if (!$gen) {
  echo $gen;
}
}
?>