<?php 
    $taux_bourse = [
        [
            "name" => "BNP Paribas",
            "Cours" => "37.80€",
            "Variation" => "+ 3.60%",
            "Ouverture" => "36.90€",
            "+ Haut" => "38.01€",
            "+ Bas" => "36.51€",
            "Volume" => "5 621 171"
        ],
        [
            "name" => "Bank Root",
            "Cours" => "26.36€",
            "Variation" => "+2.09%",
            "Ouverture" => "26.10€",
            "+ Haut" => "26.54€",
            "+ Bas" => "25.68€",
            "Volume" => "1 394 919"
        ],
        [
            "name" => "Société Générale",
            "Cours" => "14.15€",
            "Variation" => "+3.09%",
            "Ouverture" => "13.84€",
            "+ Haut" => "14.20€",
            "+ Bas" => "13.72€",
            "Volume" => "6 348 084"
        ],
        [
            "name" => "Crédit Agricole",
            "Cours" => "8.89€",
            "Variation" => "+3.25%",
            "Ouverture" => "8.71€",
            "+ Haut" => "8.93€",
            "+ Bas" => "8.66€",
            "Volume" => "7 499 955"
        ],
        [
            "name" => "Natixis",
            "Cours" => "2.45€",
            "Variation" => "1.74%",
            "Ouverture" => "2.43€",
            "+ Haut" => "2.47€",
            "+ Bas" => "2.39€",
            "Volume" => "6 691 603"
        ]
    ];
    foreach ($taux_bourse as $key => $value) {
        echo "<td>" .  " ". $value["name"] ." ". $value["Cours"] ." ". $value["Variation"] ." ". $value ["Ouverture"] ." ". $value["+ Haut"] ." ". $value["+ Bas"] ." ". $value["Volume"] . "<br>" . "</td>";
    }
?>