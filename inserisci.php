<?php

include("conn.php");

function echoselect($i_val){
	echo '<select name="val'.$i_val.'"><option value="0">I.E.G.</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option></select>'; 
}

function echotxtarea($i_val){
	echo '<textarea name="txtVal'.$i_val.'"></textarea>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inserisci</title>
	<style>
		body {
			text-align: center;
			background-color: #ffffff;
		}

		table {
			width: 45%;
		}

		td {
			text-align: center;
		}

		textarea {
			width: 100%;
			height: 100%;
		}

		.dis {
			width: 45%
			font-style: italic;
			color: blue;
		}

		.val {
			width: 25%;
		}

		.valfin {
			font-weight: bold;
			font-size: 30px;
		}

		.nota {
			width: 30%;
			font-style: italic;
			color: gray;

		}

		.negativo {
			font-size: 20px;
			background-color: red;
			color: white;
			font-weight: bold;
		}

		.positivo {
			background-color: green;
			font-size: 20px;
			color: white;
			text-decoration-color: white;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<center>
<!-- 


	VALUTAZIONE FINALE -->


	<form action="inserisci.php?action=1" method="post">
		<table border="1">
			<tr><b>INSERIMENTO SCHEDA DI VALUTAZIONE</b></tr>
			<tr><td colspan="3"><i>ANAGRAFICA UTENTE</i></td></tr>
			<tr><td colspan="2">Cognome e nome:</td><td><input type="text" name="trainee"></td></tr>
			<tr><td colspan="2">Numero training:</td><td><input type="text" name="n_training"></td></tr>
			<tr><td colspan="3"><i>CONOSCENZE TEORICHE</i></td></tr>
			<tr>
				<td class="dis">TEORIA</td>
				<td class="val">
					<?php echoselect(1); ?>
				</td>
				<td class="nota"> <?php echotxtarea(1); ?> </td>
			</tr>
			<tr>
				<td class="dis">TEORIA APPLICATA ALLA PRATICA</td>
				<td class="val">
					<?php echoselect(2); ?>
				</td>
				<td class="nota"> <?php echotxtarea(2); ?> </td>
			</tr>
			<tr><td colspan="3"><i>ABILITA' PRATICHE</i></td></tr>
			<tr>
				<td class="dis">CORRETTO UTILIZZO DI IVAC</td>
				<td class="val">
					<?php echoselect(3); ?>
				</td>
				<td class="nota"> <?php echotxtarea(3); ?> </td>
			</tr>
			<tr>
				<td class="dis">CORRETTA VERIFICA DEI PIANI DI VOLO</td>
				<td class="val">
					<?php echoselect(4); ?>
				</td>
				<td class="nota"> <?php echotxtarea(4); ?> </td>
			</tr>
			<tr>
				<td class="dis">CORRETTA COMPILAZIONE DELLE STRIP</td>
				<td class="val">
					<?php echoselect(5); ?>
				</td>
				<td class="nota"> <?php echotxtarea(5); ?> </td>
			</tr>
			<tr>
				<td class="dis">FRASEOLOGIA</td>
				<td class="val">
					<?php echoselect(6); ?>
				</td>
				<td class="nota"> <?php echotxtarea(6); ?> </td>
			</tr>
			<tr>
				<td class="dis">LINGUA INGLESE</td>
				<td class="val">
					<?php echoselect(7); ?>
				</td>
				<td class="nota"> <?php echotxtarea(7); ?> </td>
			</tr>
			<tr>
				<td class="dis">PRIORITA' DELLE COMUNICAZIONI</td>
				<td class="val">
					<?php echoselect(8); ?>
				</td>
				<td class="nota"> <?php echotxtarea(8); ?> </td>
			</tr>
			<tr>
				<td class="dis">ABILITA' DI AUTORIZZAZIONE IFR DI ROTTA</td>
				<td class="val">
					<?php echoselect(9); ?>
				</td>
				<td class="nota"> <?php echotxtarea(9); ?> </td>
			</tr>
			<tr>
				<td class="dis">ABILITA' DI AUTORIZZAZIONE AL DECOLLO</td>
				<td class="val">
					<?php echoselect(10); ?>
				</td>
				<td class="nota"> <?php echotxtarea(10); ?> </td>
			</tr>
			<tr>
				<td class="dis">ABILITA' DI AUTORIZZAZIONE ALL'ATTERRAGGIO</td>
				<td class="val">
					<?php echoselect(11); ?>
				</td>
				<td class="nota"> <?php echotxtarea(11); ?> </td>
			</tr>
			<tr>
				<td class="dis">ABILITA' DI GESTIONE DELLO SPAZIO FRA PARTENZE ED ARRIVI</td>
				<td class="val">
					<?php echoselect(12); ?>
				</td>
				<td class="nota"> <?php echotxtarea(12); ?> </td>
			</tr>
			<tr>
				<td class="dis">ABILITA' DI GESTIONE DEI MANCATI AVVICINAMENTI</td>
				<td class="val">
					<?php echoselect(13); ?>
				</td>
				<td class="nota"> <?php echotxtarea(13); ?> </td>
			</tr>
			<tr>
				<td class="dis">COMPLESSO DI ABILITA' DI GESTIONE DELLO SPAZIO DI PROPRIA COMPETENZA</td>
				<td class="val">
					<?php echoselect(14); ?>
				</td>
				<td class="nota"> <?php echotxtarea(14); ?> </td>
			</tr>
			<tr>
				<td class="dis">ABILITA' DI GESTIONE DI SITUAZIONI SPECIALI</td>
				<td class="val">
					<?php echoselect(15); ?>
				</td>
				<td class="nota"> <?php echotxtarea(15); ?> </td>
			</tr>
			<tr>
				<td class="dis">CHIAREZZA DELLE COMUNICAZIONI DATE AGLI AEROMOBILI</td>
				<td class="val">
					<?php echoselect(16); ?>
				</td>
				<td class="nota"> <?php echotxtarea(16); ?> </td>
			</tr>
			<tr>
				<td class="dis">COMPETENZE DI COMUNICAZIONE CON ENTI ADIACENTI</td>
				<td class="val">
					<?php echoselect(17); ?>
				</td>
				<td class="nota"> <?php echotxtarea(17); ?> </td>
			</tr>
			<tr><td colspan="3"><i>COMPORTAMENTO</i></td></tr>
			<tr>
				<td class="dis">COMPORTAMENTO</td>
				<td class="val">
					<?php echoselect(18); ?>
				</td>
				<td class="nota"> <?php echotxtarea(18); ?> </td>
			</tr>
			<tr><td colspan="3" class="valfin">VALUTAZIONE FINALE: <?php echoselect("finale"); ?></td></tr>
			<tr><td colspan="3"><input type="submit" value="CONFERMA"></td></tr>
		</table>

	</form>

</center>

<?php
	if (isset($_GET['action'])){
			//assegnazione in post
		$trainee = $_POST['trainee'];
		$n_training = $_POST['n_training'];
		$val1 = $_POST['val1'];
		$nota1 = $_POST['txtVal1'];
		$val2 = $_POST['val2'];
		$nota2 = $_POST['txtVal2'];
		$val3 = $_POST['val3'];
		$nota3 = $_POST['txtVal3'];
		$val4 = $_POST['val4'];
		$nota4 = $_POST['txtVal4'];
		$val5 = $_POST['val5'];
		$nota5 =$_POST['txtVal5'];
		$val6 = $_POST['val6'];
		$nota6 = $_POST['txtVal6'];
		$val7 = $_POST['val7'];
		$nota7 =$_POST['txtVal7'];
		$val8 = $_POST['val8'];
		$nota8 = $_POST['txtVal8'];
		$val9 = $_POST['val9'];
		$nota9 = $_POST['txtVal9'];
		$val10 = $_POST['val10'];
		$nota10 = $_POST['txtVal10'];
		$val11 = $_POST['val11'];
		$nota11 = $_POST['txtVal11'];
		$val12 =  $_POST['val12'];
		$nota12 = $_POST['txtVal12'];
		$val13 = $_POST['val13'];
		$nota13 = $_POST['txtVal13'];
		$val14 = $_POST['val14'];
		$nota14 =$_POST['txtVal14'];
		$val15 = $_POST['val15'];
		$nota15 = $_POST['txtVal15'];
		$val16 = $_POST['val16'];
		$nota16 = $_POST['txtVal16'];
		$val17 = $_POST['val17'];
		$nota17 = $_POST['txtVal17'];
		$val18 = $_POST['val18'];
		$nota18 = $_POST['txtVal18'];
		$val_finale = $_POST['valfinale'];

		//query
		$sql_dettaglio = "INSERT INTO dettaglio (trainee, n_training, val1, val2, val3, val4, val5, val6, val7, val8, val9, val10, val11, val12, val13, val14, val15, val16, val17, val18, finale) VALUES ('$trainee', $n_training, $val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9, $val10, $val11, $val12, $val13, $val14, $val15, $val16, $val17, $val18, $val_finale); ";

		$sql_annot = "INSERT INTO annotazioni (trainee, n_training, nota1, nota2, nota3, nota4, nota5, nota6, nota7, nota8, nota9, nota10, nota11, nota12, nota13, nota14, nota15, nota16, nota17, nota18) VALUES ('$trainee', $n_training, '$nota1', '$nota2', '$nota3', '$nota4', '$nota5', '$nota6', '$nota7', '$nota8', '$nota9', '$nota10', '$nota11', '$nota12', '$nota13', '$nota14', '$nota15', '$nota16', '$nota17', '$nota18')";

		if ($conn->query($sql_dettaglio) === TRUE) {
			echo "VALUTAZIONI INSERITE CON SUCCESSO<br>";
		} else {
			echo "Error: " . $sql_dettaglio . "<br>" . $conn->error;
		}
		if ($conn->query($sql_annot) === TRUE) {
			echo "DESCRIZIONI INSERITE CON SUCCESSO";
		} else {
			echo "Error: " . $sql_annot . "<br>" . $conn->error;
		}

		$conn->close();
	}
?>

</body>
</html>