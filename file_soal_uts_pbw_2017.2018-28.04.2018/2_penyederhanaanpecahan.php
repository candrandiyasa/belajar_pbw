<form method="POST">
    <input type="text" name="pembilang"><br>
    ------------------------------ <br>
    <input type="text" name="penyebut"><br><br>
    <button name="submit" type="submit">Submit</button>
</form>
<?php 
if(isset($_POST['submit'])){
    $x = $_POST['pembilang'];
    $y = $_POST['penyebut'];
    if(!empty($x) && !empty($y)){
        while($y != 0){
            $r = $x % $y;
            $x = $y;
            $y = $r;
        }   
        $pembilang = $_POST['pembilang'] / $x;
        $penyebut = $_POST['penyebut'] / $x;
        echo "$pembilang / $penyebut";
    }else{
        echo "Notice : tidak boleh kosong";
    }
}
?>