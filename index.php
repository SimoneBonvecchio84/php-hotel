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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Link Bootstrap -->
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($hotels as $cur_hotel) { ?>
            <li>
                <?php echo $cur_hotel["name"] ?>
                <ul>
                    <li>
                        Descrizione:
                        <?php echo $cur_hotel["description"]?>
                    </li>
                    <li>
                        Parcheggio:
                        <?php echo $cur_hotel["parking"]?>
                    </li>
                    <li>
                        Voto:
                        <?php echo $cur_hotel["vote"]?>
                    </li>
                    <li>
                        Distanza dal centro:
                        <?php echo $cur_hotel["distance_to_center"]?>
                    </li>
                </ul>
            </li>
        <?php } ?>
    </ul>