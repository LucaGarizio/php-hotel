<!-- ## Todo
Partiamo da questo array di hotel: 
```php

```
Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

### Bonus
1. Aggiungere un form ad inizio pagina che tramite una richiesta `GET` permetta di filtrare gli hotel che hanno un parcheggio
2. Aggiungere un secondo campo al `form` che permetta di filtrare gli hotel per voto (es. inserisco 3 e ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

> [!note] NOTA
> Deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
> Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	





<?php
$hotels = [

	[
		'name' => 'Hotel Belvedere',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	],

];


echo '<div class="container">';
echo '<div class="row">';
foreach ($hotels as $hotel) {
    echo '<div class="col-4">'; 
    echo "<h1>" . $hotel['name'] . "</h1>";
    echo "<p>Description: " . $hotel['description'] . "</p>";
    echo "<p>Parking: " . ($hotel['parking'] ? 'Yes' : 'No') . "</p>";
    echo "<p>Vote: " . $hotel['vote'] . "</p>";
    echo "<p>Distance to Center: " . $hotel['distance_to_center'] . " km</p>";
    echo "</div>";
}
echo "</div>";
echo "</div>";
?>
</body>
</html>
