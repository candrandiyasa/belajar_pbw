<?php
function polindrom($input){
    $panjang = strlen($input);
    $reverse = "";
    for($x = $panjang; $x >= 0; $x--){
        $reverse .= substr($input, $x, 1);
    }
    return ($reverse == $input) ? TRUE : FALSE;
}
echo "Apakah kalimat ini polindrom ? ";
$input = "HAMAH";
echo "<b> $input </b><br>";

if(polindrom(strtoupper($input))){
    echo "TRUE - Kalimat Polindrom";
}else{
    echo "FALSE - Kalimat bukan Polindrom";
}

echo "<br><br><br><br><br>";
echo "dibawah ini hanya menggunakan IF <br><br>"

?>
<?php 
// PHP code to check for Palindrome string in PHP 
// Recursive way using substr() 
function Palindrome($string){ 
    // Base codition to end the recursive process 
    if ((strlen($string) == 1) || (strlen($string) == 0)){ 
        echo "Palindrome"; 
    }else{  
        // First character is compared with the last one 
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)){ 
            
            // Checked letters are discarded and passed for next call          
            return Palindrome(substr($string,1,strlen($string) -2)); 
        }else{  
            echo " Not a Palindrome"; } 
    } 
}  
$string = "MALAYALAM"; 
echo "Apakah kalimat ini polindrom ? <b>" . $string . "</b><br>";
Palindrome($string); 
?> 