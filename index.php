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

 $numbers = [];
 $callSteps = [];

 $someArray = json_decode($data, true);

 $from = $someArray['from'];
 $toList = $someArray['toList'];

//echo "<br/> from".$from;

foreach ($toList as $number) {
	$numero = $number;

}
foreach ($someArray['callSteps'] as $d) {

	$type = $d['type'];
	$text = $d['text'];
	$voice = $d['voice'];
	$sourceType = $d['sourceType'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title style="text-align: center">Llamadas</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="index.css">

	</head>
	<body>

		<div id="app-container">
			<header>
				<h1 style="text-align: center">Llamadas</h1>
			</header>
			<section id="app-body">
				<table border="1">
					<thead>
						<tr>
							<th>Numeros</th>
						</tr>
						<tr>
							<th>Caracteristicas</th>
						</tr>
					</thead>
					<tbody>
					<?php
						foreach ($toList as $number) {
					?>
						<tr>
							<td><?php echo $number ?></td>
						</tr>
					<?php } ?>
					<?php
						foreach ($someArray['callSteps'] as $d) {
					?>
						<tr>
							<td><?php echo $d['type'] ?></td>
							<td><?php echo $d['text'] ?></td>
							<td><?php echo $d['voice'] ?></td>
							<td><?php echo $d['sourceType'] ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</section>
			<footer id="app-footer">
				<p>Hecho con &lt;3 por los alumnos de platzi </p>
			</footer>
		</div>
		<meta charset="UTF-8">
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="index.js"></script>

	</body>
</html