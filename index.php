<?php 

// Hotels array
$hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => "Sorge su uno splendido tratto della costa adriatica, in cui all’orizzonte cielo e mare si toccano a formare sfumature uniche. Questo è Hotel Belvedere, uno dei più esclusivi e rinomati hotel nel Salento che, dall’alto della sua suggestiva location, è pronto ad accogliervi e farvi sentire a casa. Benvenuti quindi nella vostra vacanza.",
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => "L'Hotel Futuro si trova nel centro di Aversa, a 5 minuti d'auto dalla stazione, è facilmente raggiungibile dall'autostrada A1 e propone camere climatizzate con TV LCD, la connessione Wi-Fi gratuita nell'intera struttura e una colazione dolce tutte le mattine. Il Plaza Hotel vanta una sala TV, una sala riunioni, un internet point e un parcheggio custodito. La sala colazioni è fornita di una TV a grande schermo con canali Sky.",
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => "Situato direttamente sul lungomare, l'Hotel Rivamare dispone di un parcheggio gratuito e di un'ampia terrazza con vista sul mare, dove ogni mattina viene servita la prima colazione. Confortevoli e molto pulite, le camere del Rivamare sono dotate di connessione Wi-Fi gratuita e in alcuni casi possiedono un balcone o una terrazza privata con vista. L'Hotel Rivamare si trova nelle vicinanze del centro di Ischia e di una spiaggia convenzionata, a poche centinaia di metri dai negozi, ristoranti, pub e bar della via principale.",
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => "Nella rinnovata struttura, al centro di Cavalese, Hotel Bellavista si rivela un ambiente accogliente, moderno e nello stesso tempo informale e curato, Ideale per il Vostro soggiorno nella Valle di Fiemme, da scoprire: I boschi dell’abete rosso, dei cervi, i profumi dei prati in fiore, con i colori della montagna pura, i freschi alpeggi rigogliosi, sono solo una parte della natura, che insegna. Elementi che singolarmente o tutti insieme, contribuiranno a farvi percepire l’unicità della nostra Valle, nel cuore delle Dolomiti, Patrimonio dell’Unesco.",
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => "Situato nel centro storico di Verona, a soli 50 metri dall'Arena di Verona, l'Hotel Milano offre camere e appartamenti, il WiFi gratuito, un centro spa e benessere, e una ricca colazione a buffet con cappuccino italiano e prodotti da forno freschi. Le moderne camere sono dotate di arredi eleganti, colori caldi, aria condizionata e TV con canali satellitari e pay per view. Gli appartamenti sono ubicati in un edificio separato, a 800 metri dall'hotel. Su richiesta potrete prenotare servizi al centro benessere, attrezzato con bagno di vapore, sauna e zona relax. In loco è presente anche una terrazza solarium panoramica con vasca idromassaggio e viste sull'Arena.",
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
   <div class="container mt-5">
    <div class="text-center my-5">
        <h1>Scegli il tuo hotel!</h1>
    </div>

    <table class="table">
    <!-- Table head with all the hotel's name -->
    <thead>
        <?php foreach($hotels as $hotel) {?>
        <th>
            <h3>
                <?php echo $hotel['name'] ?>
            </h3>
        </th>
        <?php } ?>
    </thead>


    <!-- Table body with all the hotel's info -->
    <tbody>
            <!-- Table row with hotel's description -->
        <tr>
            <?php foreach($hotels as $hotelDesc) { ?>
            <td>
                <?php echo $hotelDesc['description'] ?>
            </td>
            <?php } ?>
        </tr>

        <!-- Table row with parking info -->
        <tr>
            <?php foreach($hotels as $hotelPark) { ?>
            <td>
                <?php if($hotelPark['parking']): ?>
                     <i class="bi bi-p-circle-fill text-success fs-2"></i>
                <?php else: ?>
                    <i class="bi bi-sign-no-parking-fill text-danger fs-2"></i>
                <?php endif;?>
            </td>
            <?php } ?>
             
        </tr>


        <!-- Table row with rating in star icons -->
        <tr>
            <?php foreach($hotels as $hotelRate) { ?>
            <td>
                <?php for($i = 0; $i < 5; $i++){ ?>
                    <?php if($i < $hotelRate['vote']): ?>
                        <i class="bi bi-star-fill "></i>
                    <?php else:?>
                        <i class="bi bi-star"></i>
                    <?php endif; ?>
                <?php };?>
            </td>
            <?php } ?>
        </tr>
    </tbody>

   </table>
   </div>
</body>
</html>