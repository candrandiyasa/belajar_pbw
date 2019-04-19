<?php 
$data = array(
    "TPS1" => array(
        "Ahok" => 220, 
        "Anies" => 312
    ), 
    "TPS2" => array(
        "Ahok" => 150, 
        "Anies" => 250
    ), 
    "TPS3" => array(
        "Ahok" => 100, 
        "Anies" => 135
    ), 
    "TPS4" => array(
        "Ahok" => 200, 
        "Anies" => 225
    ), 
    "TPS5" => array(
        "Ahok" => 75, 
        "Anies" => 125
    )
); 
$paslon = array("Ahok" => 0, "Anies" => 0);
echo "REKAP PEROLEHAN SUARA MASING-MASING CALON : <br>";
foreach($paslon as $nama => $nama_val){
    echo "Rekap Suara Paslon " . $nama . " adalah <br>";
    echo "<ul>";
    foreach($data as $row => $val){
        foreach($val as $val_row => $val_row_val){
            if($val_row == $nama){
                echo "<li>" . $row . " : " . $val_row_val . "</li>";
                $paslon[$nama] += $val_row_val;
            }
        }
    }
    echo "</ul>";
    echo "Total Perolehan Suara " . $nama . " : " . $paslon[$nama] . "<br><br>";
}
echo "PRESENTASE PEROLEHAN SUARA MASING-MASING CALON : <br>";
$total = $paslon['Ahok'] + $paslon['Anies'];
foreach($paslon as $nama => $val){
    echo "Presentase " . $nama . " : " . ($val/$total)*100 ." % <br>";
}
?>