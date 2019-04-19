<?php
$from = $to = NULL;
if(isset($_POST['submit'])){
	$col_1 = $_POST['col_1'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$col_2 = 0;
	$hitung = array(
		"cm" => array(
			"cm" => 1,
			"kaki" => 30.48,
			"inci" => 2.54
		),
		"inci" => array(
			"inci" => 1,	
			"cm" => 2.54,
			"kaki" => 2.54/30.48
		),
		"kaki" => array(
			"kaki" => 1,
			"cm" => 30.48,
			"inci" => 30.48/2.54
		)
	);
	$col_2 = $col_1 * $hitung[$from][$to];
}
?>
<form method="POST">
	<input type="text" name="col_1" placeholder="Kolom 1" size="8" value="<?php echo (isset($col_1)) ? $col_1 : ""; ?>" /> = 
	<input type="texp" name="col_2" placeholder="Kolom 2" size="8" value="<?php echo (isset($col_2)) ? $col_2 : ""; ?>" disabled />
	<br><br>
	<select name="from">
		<option value="cm" <?php echo ($from == 'cm') ? 'selected' : ''; ?> >Centimeter</option>
		<option value="kaki" <?php echo ($from == 'kaki') ? 'selected' : ''; ?> >Kaki</option>
		<option value="inci" <?php echo ($from == 'inci') ? 'selected' : ''; ?> >Inchi</option>
	</select>
	<select name="to">
		<option value="cm" <?php echo ($to == 'cm') ? 'selected' : ''; ?> >Centimeter</option>
		<option value="kaki" <?php echo ($to == 'kaki') ? 'selected' : ''; ?> >Kaki</option>
		<option value="inci" <?php echo ($to == 'inci') ? 'selected' : ''; ?> >Inchi</option>
	</select>
	<br><br><input type="submit" name="submit" value="Submit"/>
</form>