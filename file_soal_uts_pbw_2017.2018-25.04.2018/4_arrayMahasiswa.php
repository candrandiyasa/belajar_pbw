<?php 

function checkArray($check){
    echo "<pre>";
    echo var_dump($check);
    echo "</pre>";
}

$data = array(
    "VB" => array(
                    "Nia" => 60,
                    "Tomo" => 89,
                    "Rina" => 78
                ),
    "PHP" => array(
                    "Nia" => 70,
                    "Tomo" => 76,
                    "Rina" => 48
                ),
    "Algoritma" => array(
                    "Nia" => 78,
                    "Tomo" => 65,
                    "Rina" => 77
                ),
    "Java" => array(
                    "Nia" => 67,
                    "Tomo" => 55,
                    "Rina" => 78
                ),
    "Matematika" => array(
                    "Nia" => 75,
                    "Tomo" => 80,
                    "Rina" => 67
                )
);

checkArray($data);
$namaMahasiswa = array("Nia", "Tomo", "Rina");
$arrayMatKul = $arrayNia = $arrayTomo = $arrayRina = array();

$total = $count = 0;

echo '( 4a ) Menampilkan data setiap Mahasiswa dari array $data : <br>';

foreach($namaMahasiswa as $row_nama){
    echo "Nilai " . $row_nama . " adalah <br>";
    echo "<ul>";
    foreach($data as $row => $val){
        foreach($val as $val_row => $val_row_val){
            if($val_row == $row_nama){
                echo "<li> Nilai " . $row . " : " . $val_row_val . "</li>";
                $total += $val_row_val;
                $count += 1;
            }
        }
    }
    echo "<li> Nilai Rata-Rata " . $row_nama . " adalah " . $total / $count . " </li> ";
    echo "</ul> <br>";
}

echo '( 4b ) Menghitung rata-rata nilai setiap mata kuliah : <br>';
foreach($data as $row => $val){
    $total = $count = 0;
    foreach($val as $val_row => $val_row_val){
        $total += $val_row_val;
        $count += 1;
    }
    echo "Rata-Rata " . $row ." adalah " . $total/$count . "<br>";
}

?>