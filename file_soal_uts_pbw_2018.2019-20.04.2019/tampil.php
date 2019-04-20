<?php
$paslon = array(
    "01" => "Jokowi-Maruf",
    "02" => "Prabowo-Sandi"
);
$suara = array(
    "Sumatra" => array(
        "01" => 2350, 
        "02" => 4500
    ), 
    "Jawa" => array(
        "01" => 7500, 
    "02" => 6200
    ),
    "Kalimantan" => array(
        "01" => 1350, 
        "02" => 1400
    ), 
    "Sulawesi" => array(
        "01" => 850, 
        "02" => 750
    ),
    "Maluku" => array(
        "01" => 400, 
        "02" => 600
    ),
    "Papua" => array(
        "01" => 300, 
        "02" => 200
    ),
    "Bali-Nusa" => array(
        "01" => 350, 
        "02" => 250
    )
);
echo "<style>
        td { padding: 10px; }
    </style>";
$provinsi = $_POST['provinsi'];
echo "Perolehan suara Paslon Daerah " . $provinsi . "<br><br>";
echo "<table border='1' cellspacing='0' cellpadding='0'>";
foreach($suara as $row => $val){    
    if($provinsi == $row){
        foreach($val as $no => $val_suara){
            echo "<tr>";
            echo "<td> ( " . $no ." ) " . $paslon[$no] . "</td>";
            echo "<td>" . $val_suara . "</td>";
            echo "</tr>";
        }
    }
}
echo "</table>";
?>

