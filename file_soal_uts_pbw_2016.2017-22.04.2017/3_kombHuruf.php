<?php 
function kombHuruf($input){
    $input = str_replace(" ", "", $input);
    $input = strtoupper($input);
    $arrayInput = str_split($input);
    $arrayCombi = array();
    for($x = 0; $x < count($arrayInput); $x++){
        for($i = $x + 1; $i <= count($arrayInput)-1; $i++){
           $arrayCombi[] = $arrayInput[$x].$arrayInput[$i];
        }
    }
    return $arrayCombi;
} 
$input = "abcde";
echo "Kalimat yang akan di check : " . $input . "<br><br>";
$hasil = join(', ',kombHuruf($input));
echo "Kombinasi 2 Huruf dari kalimat : <br><b>" . $hasil . "</b>";
?>