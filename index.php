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
<body style="background-color: #0090ed; color:#333;">

<section class="bg-dark">
<div class="container">
	<div class="row py-3 justify-content-start">
		<div class="col-12 px-0 d-flex ">
			<form>
				<label for="parking"></label>
				<select style="width: 200px" class="p-2 rounded-0 border-0" name="parking" id="parking" >
					<option value="">Tutti gli Hotel </option>
					<option value="yes">Con Parcheggio</option>	
				</select>
				<label for="vote"></label>
				<select style="width: 200px" class="p-2 rounded-0 border-0 ms-3" name="vote" id="vote" >
					<option value="">Valutazione</option>
					<option value="1">1 stella</option>
					<option value="2">2 stella</option>	
					<option value="3">3 stella</option>	
					<option value="4">4 stella</option>	
					<option value="5">5 stella</option>		
				</select>
				<button class="p-1 ms-3 rounded-0 border-0" style="width: 100px" type="submit">Filtra</button>
			</form>
		</div>
	</div>
</div>
</section>

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

// controlla se un'opzione è stata selezionata per il parcheggio
if (isset($_GET['parking'])) {
	$parkingSearch = $_GET['parking'];
} else {
	$parkingSearch = '';
}

//  controlla se un'opzione è stata selezionata per il voto
if (isset($_GET['vote'])) {
	$vote = $_GET['vote'];
} else {
	$vote = '';
}

echo '<div class="container">';
echo '<div class="row justify-content-between py-5 gy-4">';

// cicla l'arrey e estrapola e stampa tutti gli elementi all'interno
foreach ($hotels as $hotel) {
	// controllo se un'opzione  è stata selezionata e se l'hotel non ha un parcheggio
	if ($parkingSearch === 'yes' && !$hotel['parking']) {
        continue;
	}

	// controlla se un'opzione è stata selezionata e se la valutazione dell'hotel ha una valutazione diversa da quella scelta dall'utente
	if ($vote !== '' && $hotel['vote'] != $vote) {
        continue;
	}

	
    echo '<div class="col-5 p-3 border" style="background-color:white;">'; 
    echo "<h2>" . $hotel['name'] . "</h2>";
    echo "<p>Descrizione: " . $hotel['description'] . "</p>";
    echo "<p>Parcheggio: ";
		if ($hotel['parking'] === true) {
   		 echo 'Yes';
		} else {
    	echo 'No';
		}
echo "</p>";
    echo "<p>Votazione: " . $hotel['vote'] . "</p>";
    echo "<p>Distanza dal centro: " . $hotel['distance_to_center'] . " km</p>";
    echo "</div>";
}
echo "</div>";
echo "</div>";

?>
</body>

<style>
	.col-5{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
            0 6px 12px 0 rgba(0, 0, 0, 0.19);
	}
</style>
</html>
