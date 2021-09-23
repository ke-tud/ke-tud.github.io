<?php
  $seite = 'orga';
  require('layout_begin.php');
?>

<?php
  // Wochentage und Startzeiten der Uni-Zeitblöcke
  $days = array('Mo', 'Di', 'Mi', 'Do', 'Fr');
  $times = array('8:00', '9:50', '11:40', '13:30', '14:25', '16:15');

  // Endzeiten der Uni-Zeitblöcke
  $times2 = array('8:00' => '9:30',
                  '8:10' => '9:40',
                  '9:50' => '11:20',
                 '11:40' => '13:10',
                 '13:30' => '15:00',
                 '14:25' => '15:55',
                 '14:30' => '16:00',
                 '16:15' => '17:45');

  // Kürzel (Anker in team.php) und Namen der Tutoren
  $names = array('c_heinig' => 'Christian Heinig',
                 't_hennchen' => 'Tobias Hennchen',
                 'd_hirt' => 'Dominik Hirt',
                 's_hochstetter' => 'Sebastian Hochstetter',
                 'd_kilian' => 'David Kilian',
                 's_kissel' => 'Sebastian Kissel',
                 'd_nussbaum' => 'David Nussbaum',
                 'd_thomas' => 'David Thomas',
                 'a_wahrburg' => 'Arne Wahrburg');

  // Betreuungszeiten: $matrix['TAG']['STARTZEIT'] = 'tutor' bzw. 'tutor1,tutor2';
  // Abweichende Zeiten $matrix['TAG']['STARTZEIT'] = 'h:mm-h:mm';
  // $matrix = array(array());
  // $matrix2 = array(array());
  $matrix['Di']['8:00'] = 'd_kilian';
  $matrix['Di']['11:40'] = 'd_hirt';
  $matrix['Di']['14:25'] = 's_hochstetter';
  $matrix2['Di']['14:25'] = '14:30-16:00';
  $matrix['Di']['16:15'] = 'a_wahrburg';
  $matrix['Mi']['16:15'] = 's_kissel';
  $matrix['Do']['8:00'] = 'd_kilian';
  $matrix['Do']['14:25'] = 'c_heinig,d_nussbaum';
  $matrix2['Do']['14:25'] = '14:30-16:00';
  $matrix['Do']['16:15'] = 'd_hirt,d_nussbaum';
  $matrix['Fr']['8:00'] = 'd_thomas';
  $matrix2['Fr']['8:00'] = '8:10-9:40';
  $matrix['Fr']['9:50'] = 'd_thomas';
  $matrix['Fr']['13:30'] = 't_hennchen';

  // Einzelner Stundenplaneintrag, benutzt von matrix()
  function entry($day, $time) {
    global $times2, $names, $matrix, $matrix2;
    if (isset($matrix[$day][$time])) {
      echo '    <td style="background-color:#a4dbd8; text-align:center; font-size:10pt;">'."\n";
      $counter = 1;
      $who = explode(',', $matrix[$day][$time]); // 'tutor1,tutor2' -> Array
      foreach ($who as $name) {
        echo '      <a href="team.php#'.$name.'"><b>';
        echo $names[$name];
        echo '</b></a>'.($counter<count($who)?',':'')."<br>\n";
        $counter++;
      }
      if (isset($matrix2[$day][$time])) {
        echo '      ('.$matrix2[$day][$time].")\n";
      } else {
        echo '      ('.$time.'-'.$times2[$time].")\n";
      }
      echo "    </td>\n";
    } else echo '    <td align="center">&nbsp;</td>'."\n";
  }

  // Stundenplan ausgeben
  function matrix() {
    global $times, $days;
    foreach($times as $t) { // Zeiten
      echo "  <tr>\n";
      echo '    <td style="background-color:#eeeeee; text-align:center; font-size:10pt; font-weight:bold;"bgcolor="#eeeeee" align="center">'.$t."</td>\n";
      foreach($days as $d) { // Tage
        entry($d, $t);
      }
      echo "  </tr>\n";
    }
  }
?>

<a name="vorlesung"></a>
<h1>Vorlesung</h1>
<blockquote>
Die Vorlesung findet mittwochs von 11:40 bis 13:20 Uhr im Raum S3/06/051 statt.
</blockquote>
<br>


<a name="betreuung"></a>
<h1>Betreuungstermine und Sprechstunden</h1>
<blockquote>

<b>Betreuungstermine:</b><br>
<table width="90%" border="1" bgcolor="#e0f3f2" cellspacing="0" cellpadding="5">
  <!-- Kopfzeile -->
  <tr style="background-color:#eeeeee;">
    <td style="text-align:center; font-size:8pt;">Zeit</td>
    <td style="text-align:center; font-size:10pt; font-weight:bold;">Montag</td>
    <td style="text-align:center; font-size:10pt; font-weight:bold;">Dienstag</td>
    <td style="text-align:center; font-size:10pt; font-weight:bold;">Mittwoch</td>
    <td style="text-align:center; font-size:10pt; font-weight:bold;">Donnerstag</td>
    <td style="text-align:center; font-size:10pt; font-weight:bold;">Freitag</td>
  </tr>
<?php
  matrix();
?>
  <tr bgcolor="#eeeeee">
    <td colspan="6" style="text-align:center; font-size:10pt;">
      Alle Betreuungstermine finden <b>ab 02.05.2007</b>
      auf der linken Seite des Rechnerpools S2/02/C005 im Piloty-Geb&auml;ude (Hochschulstr. 10) statt.
    </td>
  </tr>
</table>
<br>
<b>Wichtig:</b> Sie werden einem Termin fest zugeordnet.<br>
Dazu m&uuml;ssen Sie sich so bald wie m&ouml;glich (allersp&auml;testens bis 28.04.2007 um 23:00 Uhr)
anmelden, indem Sie im Men&uuml; links auf <b>&Uuml;bungsanmeldung</b> klicken - siehe auch die Seite
<a href="uebungen.php">&Uuml;bungen</a>.<br>
<br>

<b>Sprechstunde <a href="team.php#j_fuernkranz">Prof. J. F&uuml;rnkranz</a>:</b><br>
Mittwoch 10:00-11:00 Uhr in S2/02/E303 und nach <a href="team.php#j_fuernkranz">Vereinbarung</a>.<br>

</blockquote>
<br>


<a name="weiterleitung"></a>
<h1>Weiterleitung der Ergebnisse</h1>
<blockquote>
Bei folgenden Studieng&auml;ngen teilen wir erbrachte Pr&uuml;fungsleistungen
direkt dem Pr&uuml;fungssekretariat mit:<br>
<ul>
  <li>ETIT</li>
  <li>IKT</li>
  <li>EPE</li>
  <li>FB Physik, Studiengang &quot;Physik&quot; (Diplom und Bachelor)</li>
</ul>
Bei folgenden Studieng&auml;ngen teilen wir erbrachte Leistungen direkt dem Fachbereich mit:<br>
<ul>
  <li>FB Bauingenieurwesen und Geod&auml;sie, Studiengang &quot;Vermessungswesen&quot;</li>
  <li>FB Humanwissenschaften, Studiengang &quot;Humanwissenschaften&quot;</li>
  <li>FB Humanwissenschaften, Studiengang &quot;Sportwissenschaft mit Schwerpunkt Informatik&quot;</li>
</ul>
Studierende folgender Studieng&auml;nge bekommen im Sekretariat einen Schein
ausgestellt, den sie dort auch abholen m&uuml;ssen:<br>
<ul>
  <li>FB Humanwissenschaften, Studiengang &quot;Studium f&uuml;r das Lehramt an Gynmasien&quot;</li>
  <li>FB Humanwissenschaften, Studiengang &quot;Studium f&uuml;r das Lehramt an beruflichen Schulen&quot;</li>
  <li>FB Gesellschafts- und Geisteswissenschaften, Magisterstudieng&auml;nge</li>
  <li>Mathematik</li>
  <li>MCS</li>
  <li>MSI</li>
</ul>
<b>Diese Angaben sind ohne Gew&auml;hr!!!</b><br>
Studenten nicht aufgef&uuml;hrter Studieng&auml;nge wenden sich bitte an das Pr&uuml;fungssekretariat
ihres Fachbereichs oder an <a href="team.php#g_ploch">unser Sekretariat</a>.
</blockquote>
<br>


<a name="rbgaccount"></a>
<h1>Zugangsberechtigung</h1>
<blockquote>
W&auml;hrend den allgemeinen &Ouml;ffnungszeiten (8:00 bis 18:00 Uhr)
haben Sie Zutritt zum Rechnerpool S2/02/C005. F&uuml;r die Arbeit an
den Rechnern brauchen Sie einen <b>RBG-Account</b> (das ist <b>nicht</b>
der HRZ-Account, den Sie zum Studienbeginn automatisch bekommen haben!).
Im Rahmen dieses Accounts haben Sie einen reservierten, mit Passwort
gesch&uuml;tzten Arbeitsbereich, der von allen Rechnerpools des
Fachbereichs Informatik in der Hochschulstra&szlig;e 10 aus
zug&auml;nglich ist.<br>
<br>
<b>Auch f&uuml;r die Pr&uuml;fungs- und &Uuml;bungsgruppenanmeldung
ben&ouml;tigen Sie zwingend diesen RBG-Account!</b><br>
<br>
Wenn Sie noch keinen RBG-Account haben, beantragen Sie diesen bitte schnellstm&ouml;glich online unter
<a href="http://www.rbg.informatik.tu-darmstadt.de/rbg/beantragen.php">http://www.rbg.informatik.tu-darmstadt.de/rbg/beantragen.php</a>.<br>
<br>
Sollte das nicht funktionieren, gibt es folgende Anlaufstellen:
<ol>
  <li>Unser <a href="team.php#g_ploch">Sekretariat</a></li>
  <li>Die RBG (S2/02/A105 und A106)</li>
  <li>Die Poststelle (S2/02/C119)</li>
</ol>
Sie sollten auf jeden Fall Ihren Studentenausweis und einen Lichtbildausweis
(Personalausweis / Reisepass) mitbringen.
</blockquote>
<br>


<a name="pool"></a>
<h1>Poolbetreuung</h1>
<blockquote>
Anstelle von Kleingruppen&uuml;bungen findet eine Betreuung durch Tutoren
ausschlie&szlig;lich in Form von Betreuungszeiten im Rechnerraum statt.
In den Betreuungszeiten sollen die Studierenden Fragen stellen, die bei
der selbst&auml;ndigen Bearbeitung der &Uuml;bungsaufgaben aufgetreten
sind. Sie sollten unbedingt vorbereitet zur Poolbetreuung kommen, also
vorher schon einmal versucht haben, die Aufgaben zu bearbeiten.<br>
<br>
Die Poolbetreuungszeiten finden Sie <a href="#betreuung">oben</a> auf dieser Seite.
</blockquote>
<br>


<a name="zuhause"></a>
<h1>Arbeit von zu Hause aus</h1>
<blockquote>
Sie k&ouml;nnen Java und BlueJ auch auf Ihrem Rechner zu Hause verwenden.
Einen Link zur Download-Seite der ben&ouml;tigten Java-Version (Java JDK 6) sowie zu BlueJ
finden Sie im Abschnitt <i>&quot;Wichtige / interessante Links&quot;</i> auf der
<a href="material.php#wilinks">Material-Seite</a>.
</blockquote>
<br>

<?php
  require('layout_end.php');
?>