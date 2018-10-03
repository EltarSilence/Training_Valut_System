<?php
$trainings = 8;
for ($i=0; $i<$trainings; $i++){
								echo '<a id="show_id'.$i.'" onclick="document.getElementById(\'spoiler_id'.$i.'\').style.display=\'\'; 
																	document.getElementById(\'show_id'.$i.'\').style.display=\'none\';" 
							class="link">[Apri]</a><span id="spoiler_id'.$i.'" style="display: none"><a onclick="document.getElementById(\'spoiler_id'.$i.'\').style.display=\'none\'; document.getElementById(\'show_id'.$i.'\').style.display=\'\';" class="link">[Chiudi]</a><br>
	                				
	                				<table border="1">
	                				<tr><td colspan="3"><i>CONOSCENZE TEORICHE</i></td></tr>
							<tr>
								<td class="dis">TEORIA</td>
								<td class="val positivo">6</td>
								<td class="nota">Annotazione riguardante la teoria bla bla bla bla sei bravo eccetera eccetera</td>
							</tr>
							<tr>
								<td class="dis">TEORIA APPLICATA ALLA PRATICA</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr><td colspan="3"><i>ABILITA\' PRATICHE</i></td></tr>
							<tr>
								<td class="dis">CORRETTO UTILIZZO DI IVAC</td>
								<td class="val negativo">5</td>
								<td class="nota">Mancata conoscenza di alcune parti fondamentali</td>
							</tr>
							<tr>
								<td class="dis">CORRETTA VERIFICA DEI PIANI DI VOLO</td>
								<td class="val positivo">7</td>
								<td class="nota">annotazione</td>
							</tr>
							<tr>
								<td class="dis">CORRETTA COMPILAZIONE DELLE STRIP</td>
								<td class="val positivo">7</td>
								<td class="nota">annotazione</td>
							</tr>
							<tr>
								<td class="dis">FRASEOLOGIA</td>
								<td class="val positivo">8</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">LINGUA INGLESE</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">PRIORITA\' DELLE COMUNICAZIONI</td>
								<td class="val negativo">4</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">ABILITA\' DI AUTORIZZAZIONE IFR DI ROTTA</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">ABILITA\' DI AUTORIZZAZIONE AL DECOLLO</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">ABILITA\' DI AUTORIZZAZIONE ALL\'ATTERRAGGIO</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">ABILITA\' DI GESTIONE DELLO SPAZIO FRA PARTENZE ED ARRIVI</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">ABILITA\' DI GESTIONE DEI MANCATI AVVICINAMENTI</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">COMPLESSO DI ABILITA\' DI GESTIONE DELLO SPAZIO DI PROPRIA COMPETENZA</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">ABILITA\' DI GESTIONE DI SITUAZIONI SPECIALI</td>
								<td class="val positivo">6</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">COMPLESSO DI ABILITA\' DI GESTIONE DELLO SPAZIO DI PROPRIA COMPETENZA</td>
								<td class="val positivo">9</td>
								<td class="nota"></td>
							</tr>
							<tr>
								<td class="dis">COMPETENZE DI COMUNICAZIONE CON ENTI ADIACENTI</td>
								<td class="val negativo">5</td>
								<td class="nota">Scarsa</td>
							</tr>
							<tr><td colspan="3"><i>COMPORTAMENTO</i></td></tr>
							<tr>
								<td class="dis">COMPORTAMENTO</td>
								<td class="val positivo">9</td>
								<td class="nota">descrizione</td>
							</tr>
							<tr><td colspan="3" class="valfin">VALUTAZIONE FINALE: 8</td></tr>

						</table>
	                				</span>
	        			</p>';
						}
						?>