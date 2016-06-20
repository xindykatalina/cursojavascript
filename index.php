<?php

$numeros = ["3184716161", "3166814711", "1398764550", "31576543245"];
$name = "Cindy";

$data ='{
  "from": "12345",
  "toList": ["'.implode('","', $numeros).'"],
  "callSteps": [
    {
      "type": "SAY",
      "text": "hola bienvenida '.$name.', presiuona 1 ventas 2 para soporte",
      "voice": "CARLOS",
      "sourceType":"STANDARD"
    }
  ]
}';


//["573188061583","573184716161"]
 $numbers = [];
 $callSteps = [];

 $someArray = json_decode($data, true);

 $from = $someArray['from'];
 $toList = $someArray['toList'];

//echo "<br/> from".$from;

foreach ($toList as $number) {
	/*$object = new \stdClass();
	$object->numero = $number;
	$numbers[] = $object;
	$object->text = $d['text'];*/

	//echo "<br/> number ".$number;



}
foreach ($someArray['callSteps'] as $d) {

	$object = new \stdClass();
	$object->type = $d['type'];
	$object->text = $d['text'];
	$object->voice = $d['voice'];
	$object->sourceType = $d['sourceType'];
	$callSteps[] = $object;

	/*echo "<br/> type ".$d['type'];
	echo "<br/> text ".$d['text'];
	echo "<br/> voice ".$d['voice'];
	echo "<br/> sourceType ".$d['sourceType'];*/
}
var_dump($callSteps);
die();
?>