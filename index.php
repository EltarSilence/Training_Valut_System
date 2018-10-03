<?php

include("conn.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>TVS 1.0</title>
	<style>
	body {
		text-align: center;
		background-color: #ffffff;
	}

	table {
		width: 55%;
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
		width: 10%;
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

	.ieg {

		background-color: gray;
		font-size: 20px;
		color: white;
		text-decoration-color: white;
		font-weight: bold;

	}
</style>
</head>
<body>
	<a href="inserisci.php" target="_blank">Inserisci</a>
<!-- 	<a id="show_id" onclick="document.getElementById('spoiler_id').style.display=''; document.getElementById('show_id').style.display='none';" class="link">[Apri]</a><span id="spoiler_id" style="display: none"><a onclick="document.getElementById('spoiler_id').style.display='none'; document.getElementById('show_id').style.display='';" class="link">[Chiudi]</a><br>
                </span>
            </p> -->

            <center>
            	<b>SCHEDE DI VALUTAZIONE</b><br>
            	<?php

            	$sql = "SELECT * FROM dettaglio";
            	$sql_note = "SELECT * FROM annotazioni";

            	$result = mysqli_query($conn, $sql);
            	$result_note = mysqli_query($conn, $sql_note);

            	$trainings = mysqli_num_rows($result);
            	echo 'Sono presenti '.$trainings.' schede.<br><br>';

            	for ($cnt=0; $cnt<$trainings; $cnt++){		
            		$row = mysqli_fetch_assoc($result);
            		$row_note = mysqli_fetch_assoc($result_note);
            		echo '<a id="show_id'.$cnt.'" onclick="document.getElementById(\'spoiler_id'.$cnt.'\').style.display=\'\'; 
            		document.getElementById(\'show_id'.$cnt.'\').style.display=\'none\';" 
            		class="link">[TRAINING N.'.$row['n_training'].' di '.$row['trainee'].']</a><span id="spoiler_id'.$cnt.'" style="display: none"><a onclick="document.getElementById(\'spoiler_id'.$cnt.'\').style.display=\'none\'; document.getElementById(\'show_id'.$cnt.'\').style.display=\'\';" class="link">[Chiudi]</a><br>
            		<table border="1">
            		<tr><td colspan="3"><b>TRAINING N.'.$row['n_training'].' di '.$row['trainee'].'</b></td></tr>
            		<tr><td colspan="3"><i>CONOSCENZE TEORICHE</i></td></tr>
            		<tr>
            		<td class="dis">TEORIA</td>';
            		if ($row['val1'] >= 6){
            			echo '<td class="val positivo">'.$row['val1'].'</td>';
            		}
            		else if ($row['val1'] < 6 && $row['val1'] > 0) echo '<td class="val negativo">'.$row['val1'].'</td>';
            		else if ($row['val1'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota1'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">TEORIA APPLICATA ALLA PRATICA</td>';
            		if ($row['val2'] >= 6){
            			echo '<td class="val positivo">'.$row['val2'].'</td>';
            		}
            		else if ($row['val2'] < 6 && $row['val2'] > 0) echo '<td class="val negativo">'.$row['val2'].'</td>';
            		else if ($row['val2'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota2'].'</td>
            		</tr>
            		<tr><td colspan="3"><i>ABILITA\' PRATICHE</i></td></tr>
            		<tr>
            		<td class="dis">CORRETTO UTILIZZO DI IVAC</td>';
            		if ($row['val3'] >= 6){
            			echo '<td class="val positivo">'.$row['val1'].'</td>';
            		}
            		else if ($row['val3'] < 6 && $row['val3'] > 0) echo '<td class="val negativo">'.$row['val3'].'</td>';
            		else if ($row['val3'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota3'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">CORRETTA VERIFICA DEI PIANI DI VOLO</td>';
            		if ($row['val4'] >= 6){
            			echo '<td class="val positivo">'.$row['val4'].'</td>';
            		}
            		else if ($row['val4'] < 6 && $row['val4'] > 0) echo '<td class="val negativo">'.$row['val4'].'</td>';
            		else if ($row['val4'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota4'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">CORRETTA COMPILAZIONE DELLE STRIP</td>';
            		if ($row['val5'] >= 6){
            			echo '<td class="val positivo">'.$row['val5'].'</td>';
            		}
            		else if ($row['val5'] < 6 && $row['val5'] > 0) echo '<td class="val negativo">'.$row['val5'].'</td>';
            		else if ($row['val5'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota5'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">FRASEOLOGIA</td>';
            		if ($row['val6'] >= 6){
            			echo '<td class="val positivo">'.$row['val6'].'</td>';
            		}
            		else if ($row['val6'] < 6 && $row['val6'] > 0) echo '<td class="val negativo">'.$row['val6'].'</td>';
            		else if ($row['val6'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota6'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">LINGUA INGLESE</td>';
            		if ($row['val7'] >= 6){
            			echo '<td class="val positivo">'.$row['val7'].'</td>';
            		}
            		else if ($row['val7'] < 6 && $row['val7'] > 0) echo '<td class="val negativo">'.$row['val7'].'</td>';
            		else if ($row['val7'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota7'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">PRIORITA\' DELLE COMUNICAZIONI</td>';
            		if ($row['val8'] >= 6){
            			echo '<td class="val positivo">'.$row['val8'].'</td>';
            		}
            		else if ($row['val8'] < 6 && $row['val8'] > 0) echo '<td class="val negativo">'.$row['val8'].'</td>';
            		else if ($row['val8'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota8'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">ABILITA\' DI AUTORIZZAZIONE IFR DI ROTTA</td>';
            		if ($row['val9'] >= 6){
            			echo '<td class="val positivo">'.$row['val9'].'</td>';
            		}
            		else if ($row['val9'] < 6 && $row['val9'] > 0) echo '<td class="val negativo">'.$row['val9'].'</td>';
            		else if ($row['val9'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota9'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">ABILITA\' DI AUTORIZZAZIONE AL DECOLLO</td>';
            		if ($row['val10'] >= 6){
            			echo '<td class="val positivo">'.$row['val10'].'</td>';
            		}
            		else if ($row['val10'] < 6 && $row['val10'] > 0) echo '<td class="val negativo">'.$row['val10'].'</td>';
            		else if ($row['val10'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota10'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">ABILITA\' DI AUTORIZZAZIONE ALL\'ATTERRAGGIO</td>';
            		if ($row['val11'] >= 6){
            			echo '<td class="val positivo">'.$row['val11'].'</td>';
            		}
            		else if ($row['val11'] < 6 && $row['val11'] > 0) echo '<td class="val negativo">'.$row['val11'].'</td>';
            		else if ($row['val11'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota11'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">ABILITA\' DI GESTIONE DELLO SPAZIO FRA PARTENZE ED ARRIVI</td>';
            		if ($row['val12'] >= 6){
            			echo '<td class="val positivo">'.$row['val12'].'</td>';
            		}
            		else if ($row['val12'] < 6 && $row['val12'] > 0) echo '<td class="val negativo">'.$row['val12'].'</td>';
            		else if ($row['val12'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota12'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">ABILITA\' DI GESTIONE DEI MANCATI AVVICINAMENTI</td>';
            		if ($row['val13'] >= 6){
            			echo '<td class="val positivo">'.$row['val13'].'</td>';
            		}
            		else if ($row['val13'] < 6 && $row['val13'] > 0) echo '<td class="val negativo">'.$row['val13'].'</td>';
            		else if ($row['val13'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota13'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">COMPLESSO DI ABILITA\' DI GESTIONE DELLO SPAZIO DI PROPRIA COMPETENZA</td>';
            		if ($row['val14'] >= 6){
            			echo '<td class="val positivo">'.$row['val14'].'</td>';
            		}
            		else if ($row['val14'] < 6 && $row['val14'] > 0) echo '<td class="val negativo">'.$row['val14'].'</td>';
            		else if ($row['val14'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota14'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">ABILITA\' DI GESTIONE DI SITUAZIONI SPECIALI</td>';
            		if ($row['val15'] >= 6){
            			echo '<td class="val positivo">'.$row['val15'].'</td>';
            		}
            		else if ($row['val15'] < 6 && $row['val15'] > 0) echo '<td class="val negativo">'.$row['val15'].'</td>';
            		else if ($row['val15'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota15'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">CHIAREZZA DELLE COMUNICAZIONI DATE AGLI AEROMOBILI</td>';
            		if ($row['val16'] >= 6){
            			echo '<td class="val positivo">'.$row['val16'].'</td>';
            		}
            		else if ($row['val16'] < 6 && $row['val16'] > 0) echo '<td class="val negativo">'.$row['val16'].'</td>';
            		else if ($row['val16'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota16'].'</td>
            		</tr>
            		<tr>
            		<td class="dis">COMPETENZE DI COMUNICAZIONE CON ENTI ADIACENTI</td>';
            		if ($row['val17'] >= 6){
            			echo '<td class="val positivo">'.$row['val17'].'</td>';
            		}
            		else if ($row['val17'] < 6 && $row['val17'] > 0) echo '<td class="val negativo">'.$row['val17'].'</td>';
            		else if ($row['val17'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota17'].'</td>
            		</tr>
            		<tr><td colspan="3"><i>COMPORTAMENTO</i></td></tr>
            		<tr>
            		<td class="dis">COMPORTAMENTO</td>';
            		if ($row['val18'] >= 6){
            			echo '<td class="val positivo">'.$row['val18'].'</td>';
            		}
            		else if ($row['val18'] < 6 && $row['val18'] > 0) echo '<td class="val negativo">'.$row['val18'].'</td>';
            		else if ($row['val18'] == 0) echo '<td class="val ieg">I.E.G.</td>';

            		echo '
            		<td class="nota">'.$row_note['nota18'].'</td>
            		</tr>
            		<tr><td colspan="3" class="valfin">VALUTAZIONE FINALE: '.$row['finale'].'</td></tr>

            		</table>
            		</span>
            		</p>';

            	}

            	?>
            </center>

        </body>
        </html>