<?php require_once dirname(__FILE__) .'/../config.php';?>

<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>


	<!-- First Section -->
	<section id="first" class="main special">
								Kalkulator kredytowy
	<div>
	<form action="<?php print(_APP_URL);?>/app/calc_kredyt.php" method="get">
		<label for="id_kwota">	Kwota: </label>
		<input id="id_kwota" type="text" name="kwota" value="<?php if (isset ($kwota))print($kwota); ?>" />
		<br />
		<label for="id_lata">Liczba lat: </label>
		<input id="id_lata" type="text" name="lata" value="<?php if (isset ($lata))print($lata); ?>" />
		<br />
		<label for="id_oprocentowanie">Oprocentowanie: </label>
		<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php if (isset ($oprocentowanie))print($oprocentowanie); ?>" />
		<br />
		<br />
		<input type="submit" value="Oblicz" />
	</form>	
	</div>
							</section>
<!-- Get Started -->
							<section id="cta" class="main special">
							
								<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
		echo "<h1>Błedy:</h1>";
		echo '<ol>';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div>
<?php echo 'Miesięczna rata: '.round($result,2); ?> złotych
</div>
<?php } ?>
							</section>

						


<?php 
include _ROOT_PATH.'/templates/bottom.php';
?>