<?php 
    function checkHuruf($input){
        $input = str_replace(' ','', $input); // menghilangkan spasi
        strtolower($input); // merubah semua isi variable menjadi huruf kecil
        $arrayInput = str_split($input); 
        $vocal_array = array("a","i","u","e","o"); // array untuk check huruf vocal
        $hitungHuruf = array(0,0); // variable array untuk menyimpan jumlah huruf
        foreach($arrayInput as $row){
            if(in_array($row, $vocal_array)){
                $hitungHuruf[0] += 1;
            }else{
                $hitungHuruf[1] += 1;
            }
        }
        return $hitungHuruf;
    }
    $set = "My Name"; // masukkan kalimat

    echo "Kalimat yang akan di checking : <b>" . $set . "</b><br><br>";

    $hasil = checkHuruf($set); // inisialisasi variable array
    echo "Jumlah huruf Vocal adalah " . $hasil[0] . "<br><br>";
    echo "Jumlah huruf Konsonan adalah " . $hasil[1];

/* 
    str_replace(find, replace, string, count)
    find --> menentukan nilai yg akan ditemukan (REQUIRED)
    replace --> mengganti nilai yg ditemukan (REQUIRED)
    string --> menentukan dimana string akan di cari (variable) (REQUIRED)
    count --> menentukan jumlah nilai yang akan digantikan (OPTIONANAL)
*/

/*
    fungsi str_split() memecah value dari variable yang di tentukan
    str_split(string, length);
    string : variable string yang mau di pecah (REQUIRED)
    length : jumlah setiap string yang mau di pecah. Default value is 1 (OPTIONAL)
    penulisan bisa seperti :
        str_split(variable) --> mecah string 1 huruf
        str_split(variable, length) --> mecah string string sesuai jumlah nilai length
*/

/* 
    in_arary(search, array, type)
    search --> kata kunci yang akan di cari (REQUIRED)
    array --> nilai yang akan dibandingkan (REQUIRED)
    type --> mencari nilai string type tertentu (OPTIONAL) 
*/
?>


