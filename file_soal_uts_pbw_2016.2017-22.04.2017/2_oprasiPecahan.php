<?php 
    function operMulDiv($satu, $dua, $tiga, $empat, $ket){
        $pembilangHasil = $satu * $dua;
        $penyebutHasil = $tiga * $empat;
        return "Hasil " . $ket . " adalah <br>" . $pembilangHasil ." / " . $penyebutHasil;
    }
    if(isset($_POST['submit'])){
        $bil1 = $_POST['pembilang_1'];
        $bil2 = $_POST['penyebut_2'];
        $bil3 = $_POST['pembilang_3'];
        $bil4 = $_POST['penyebut_4'];
        $operator = $_POST['operasi'];
        $pembilangHasil = $penyebutHasil = 0;
        $pen = $kur = $kali = $bagi = NULL; 
        $hasil = NULL;
        if(empty($bil1) || empty($bil2) || empty($bil3) || empty($bil4)){
            $hasil = "Notice : Nilai tidak boleh kosong";
        }else{
            if($operator == "summation"){
                $pen = TRUE;
                $pembilangHasil = ( $bil1 * $bil4 ) + ( $bil3 * $bil2);
                $penyebutHasil = $bil2 * $bil4;
                $hasil = "Hasil Penjumlahan adalah <br>" . $pembilangHasil ." / " . $penyebutHasil;
            }elseif($operator == "subtraction"){
                $kur = TRUE;
                $pembilangHasil = ( $bil1 * $bil4 ) - ( $bil3 * $bil2);
                $penyebutHasil = $bil2 * $bil4;
                $hasil = "Hasil Pengurangan adalah <br>" . $pembilangHasil ." / " . $penyebutHasil;
            }elseif($operator == "multiplication"){
                $kali = TRUE;
                $hasil = operMulDiv($bil1, $bil3, $bil2, $bil4, "Perkalian");
            }elseif($operator == "division"){
                $bagi = TRUE;
                $hasil = operMulDiv($bil1, $bil4, $bil2, $bil3, "Pembagian");
            }
        }
    }
?>
<form method="POST" style="padding: 20px; text-align: center;">
    <h2>OPERASI BILANGAN PECAHAN</h2>
    <label>Masukkan bilangan pecahan pertama : </label>
    <input type="text" name="pembilang_1" size="5" value="<?php echo(isset($_POST['pembilang_1'])) ? $_POST['pembilang_1'] : ''; ?>"> / 
    <input type="text" name="penyebut_2" size="5" value="<?php echo(isset($_POST['penyebut_2'])) ? $_POST['penyebut_2'] : ''; ?>"><br><br>
    <label>Pilih Operasi</label>
    <select name="operasi">
        <option value="summation" <?php echo(isset($pen)) ? 'selected' : ''; ?> >+</option>
        <option value="subtraction" <?php echo(isset($kur)) ? 'selected' : ''; ?> >-</option>
        <option value="multiplication" <?php echo(isset($kali)) ? 'selected' : ''; ?> >*</option>
        <option value="division" <?php echo(isset($bagi)) ? 'selected' : ''; ?> >/</option>
    </select><br><br>
    <label>Masukkan bilangan pecahan kedua : </label>
    <input type="text" name="pembilang_3" size="5" value="<?php echo(isset($_POST['pembilang_3'])) ? $_POST['pembilang_3'] : ''; ?>"> / 
    <input type="text" name="penyebut_4" size="5" value="<?php echo(isset($_POST['penyebut_4'])) ? $_POST['penyebut_4'] : ''; ?>"><br><br>
    <input type="submit" name="submit" value="Hitung !"><br><br>
    <?php echo(isset($hasil)) ? $hasil : ''; ?>
</form>

