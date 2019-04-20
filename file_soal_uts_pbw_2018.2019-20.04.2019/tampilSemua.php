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
        td, th { padding: 5px; text-align: center;}
    </style>";
echo "Rekapitulasi Perolehan suara Paslon <br><br>";
echo "<table border='1' cellspacing='0' cellpadding='0'>
        <tr>
            <th>Paslon</th>
            <th>Sum</th>
            <th>Jawa</th>
            <th>Kal</th>
            <th>Sul</th>
            <th>Mal</th>
            <th>Papua</th>
            <th>Bali</th>
            <th>Total</th>
        </tr>
    ";
foreach($paslon as $no => $nama){    
    $total = 0;
    echo "<tr>";
    echo "<td> (" . $no . ") " . $nama . "</td>";
    foreach($suara as $prov => $no_array){
        foreach($no_array as $no_urut => $suara_val){
            if($no == $no_urut){
                echo "<td>" . $suara_val . "</td>";
                $total += $suara_val;
            }
        }
    }
    echo "<td>" . $total . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

