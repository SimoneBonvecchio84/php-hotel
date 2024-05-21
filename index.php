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
    ]
];

$hotel_filtrati = [];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Link Bootstrap -->
    
    <!-- Link Font-awesome -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <!-- /Link Font-awesome -->
    <title>Document</title>
</head>

<body>
    <h1 class="text-center py-5">Lista Hotel</h1>
    <div class="container">

        <form action="index.php" method="GET">
            <div class="mb-3">
                <label for="hotel-parking" class="form-label">Controlla se l'Hotel che hai scelto ha il parcheggio</label>
                <input type="text" class="form-control" name="hotel-parking" id="hotel-parking">
                <div id="hotel-parking" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="vote" class="form-label">Verifica se l'Hotel ha un voto uguale o superiore ha 3 Stelle</label>
                <input type="number" class="form-control" name="vote" id="vote">
            </div>
            <button type="submit" class="btn btn-primary">FILTRA</button>
        </form>
    </div>

    <div class="container">
        <div class="py-5">
            <h3>
                <?php
                if (empty($_GET["hotel-parking"]) || empty($GET["vote"])) {
                    echo "Non hai inserito filtri";
                }
                ?>
            </h3>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lista Hotel</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza Dal centro</th>
                </tr>
            </thead>
            <?php foreach ($hotels as $index => $cur_hotel) { ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $index + 1; ?></th>
                        <td><?php echo $cur_hotel["name"] ?></td>
                        <td><?php echo $cur_hotel["description"] ?></td>
                       
                        <td>
                            <?php 
                            if($_GET["hotel-parking"] = $cur_hotel["parking"]) { ?>
                                <?php echo "Con Parcheggio" ?> 
                            <?php } else { ?> 
                                <?php echo "Senza Parcheggio" ?>
                            <?php }?> 
                        </td>
                        
                        <td><?php echo $cur_hotel["vote"] ?></td>
                        <td><?php echo $cur_hotel["distance_to_center"] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>

    </div>