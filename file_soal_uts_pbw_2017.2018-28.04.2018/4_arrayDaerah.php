<?php 
$data = array(
    "A" => array(
        "Laki" => 55,
        "Perempuan" => 45
    ),
    "B" => array(
        "Laki" => 90,
        "Perempuan" => 56
    ),
    "C" => array(
        "Laki" => 75,
        "Perempuan" => 89
    ),
    "D" => array(
        "Laki" => 40,
        "Perempuan" => 32
    ),
    "E" => array(
        "Laki" => 75,
        "Perempuan" => 45
    ),
);
echo "Total penderita penyakit di masing-masing daerah : <br>";
echo "<ul>";
$arr_max = $arr_daerah = array();
foreach($data as $row => $val){
    $total = 0;
    foreach($val as $val_row => $val_row_val){
        $total += $val_row_val;
    }
    $arr_max[] = $total;
    $arr_daerah[] = $row;
    echo "<li> Daerah " . $row . " : " . $total . "</li>";
}
echo "</ul><br>";
echo "Total penderita laki-laki dan perempuan : <br>";
$total_arr = array("Laki" => 0, "Perempuan" => 0);
foreach($data as $row => $val){
    foreach($val as $val_row => $val_row_val){
        ($val_row == "Laki") ? $total_arr['Laki'] += $val_row_val : $total_arr['Perempuan'] += $val_row_val ;
    }
}
echo "<ul>";
echo "<li> Penderita Laki-Laki : " . $total_arr['Laki'] . "</li>";
echo "<li> Penderita Perempuan : " . $total_arr['Perempuan'] . "</li>";
echo "</ul><br>";
echo "Total penderita penyakit : " . array_sum($total_arr) . "<br>";
$max = 0;
$daerah = '';
for($x = 0; $x < count($arr_max); $x++){
    if($arr_max[$x] > $max){
        $max = $arr_max[$x];
        $daerah = $arr_daerah[$x];
    }
}
echo "Daerah dengan penderita penyakit paling banyak adalah daerah " . $daerah . " : " . $max;
?>