<?php
  $seite = 'uebungen';
  require('layout_begin.php');
?>

<h1>&Uuml;bungsorganisation</h1>
<blockquote>
Siehe <a href="#orga">unten auf dieser Seite</a>.
</blockquote>
<br>


<a name="projekt"></a>
<h1>Programmierprojekt</h1>
<blockquote>

<b>Organisatorisches <span style="color:red;">(unbedingt gut durchlesen!)</span></b><br>
<ul>
<li>Das Programmierprojekt ist <b>in der Gruppe</b> zu bearbeiten, in der Sie sich zu
Beginn des Semesters angemeldet haben (also ein oder zwei Gruppenmitglieder).</li>
<li>Dieses Programmierprojekt ist mit <b>20 Punkten</b> angesetzt. Dies entspricht
20% ihrer Endnote im Fach Allgemeine Informatik 1. Die Abschlussklausur wird die
restlichen 80% ausmachen.</li>
<li>Verwenden Sie als Vorlage unbedingt die <a href="uebungen/programmierprojekt.task">Vorgabe-Datei</a>,
die Sie auch noch mal weiter unten finden, und erweitern Sie diese. Fangen Sie keine neue Datei an!</li>
<li>Tragen Sie als erstes in die Datei Name, Matrikelnummer und
RBG-Login von <b>allen</b> Gruppenmitgliedern ein.</li>
<li>Die &Uuml;bung wird per KarelJIDE-Submit-Funktion an uns gesendet (in der KarelJIDE auf
&quot;Submit&quot; klicken), wobei für &quot;Exercise sheet&quot; und &quot;Exercise number&quot;
jeweils &quot;1&quot; angegeben werden muss. <b>Vorher</b> ist allerdings unbedingt der
<a href="kareljide.php" target="_blank">Einstellungsassistent</a> zu benutzen!</li>
<li>Bei Zweiergruppen schickt nur eines der Mitglieder das Projekt ein, nicht beide.</li>
<li>Abgabeschluss ist sp&auml;testens der <b>13. Januar 2007</b>.</li>
<li>Bitte kommentieren Sie ihren Quellcode hinreichend.</li>
<li><b>Wichtig:</b><br> &quot;Der Fachbereich Informatik misst der Einhaltung der Grundregeln der
wissenschaftlichen Ethik gro&szlig;en Wert bei. Zu diesen geh&ouml;rt auch die strikte Verfolgung von
Plagiarismus. Mit der Abgabe ihrer L&ouml;sung best&auml;tigen Sie, dass Sie der alleinige Autor /
die alleinigen Autoren des gesamten Materials sind. Bei Unklarheiten zu diesem Thema finden Sie
weiterf&uuml;hrende Informationen auf <a href="http://www.informatik.tu-darmstadt.de/Plagiarism/" target="_blank">
http://www.informatik.tu-darmstadt.de/Plagiarism</a> oder sprechen Sie Ihren Betreuer an.&quot;</li>
</ul>

<b>Bewertungsschema:</b><br>
Wenn Ihr Projekt gar nicht ausf&uuml;hrbar ist (z.B. durch Syntaxfehler), gibt es insgesamt 0 Punkte auf Ihre Abgabe.
Achten Sie also darauf, dass die KarelJIDE beim Klick auf &quot;Execute&quot; keine Fehlermeldungen anzeigt.<br>
Wir behalten uns vor, das Programmierprojekt mit 0 Punkten zu bewerten, wenn die unter &quot;Organisation&quot; genannten
Punkte missachtet werden.<br>
<table border="1" cellspacing="0" cellpadding="3">
  <tr><td>Aufgabe 1:</td><td>2 Punkte</td></tr>
  <tr><td>Aufgabe 2:</td><td>2 Punkte</td></tr>
  <tr><td>Aufgabe 3:</td><td>4 Punkte</td></tr>
  <tr><td>Aufgabe 4:</td><td>5 Punkte</td></tr>
  <tr><td>Aufgabe 5:</td><td>5 Punkte</td></tr>
  <tr><td>Formatierung + Kommentierung:</td><td>2 Punkte</td></tr>
  <tr><td>Gesamt:</td><td>20 Punkte</td></tr>
</table>
<i>Zur Formatierung:</i><br>
R&uuml;cken Sie alles, was zwischen geschweiften Klammern steht,um mindestens zwei Leerzeichen ein und schreiben Sie
im Allgemeinen jeden Befehl in eine eigene Zeile. Ausnahme: Schleifen, die nur eine Anweisung wiederholen, k&ouml;nnen
gerne in der Form &quot;while (frontIsClear()) move();&quot; geschrieben werden. Es ist sinnvoll, logisch zusammengeh&ouml;rige
Code-Bl&ouml;cke durch Leerzeilen voneinander zu trennen. Vergeben Sie m&ouml;glichst &quot;sprechende&quot; /
selbsterkl&auml;rende Variablennamen.<br>
<i>Zur Kommentierung:</i><br>
Kommentieren Sie kurz jede Methode (Was macht sie? Wie macht sie es?) und Programmabschnitte, die Ihrer Meinung nach
erkl&auml;rungsbed&uuml;rftig sind (z.B., weil Sie selbst etwas dar&uuml;ber nachdenken mussten). Also beispielsweise
Schleifen (insbesondere verschachtelte), komplexere if-Bedingungen und &auml;hnliches. Kommentieren Sie lieber einen Block mit
&quot;Der Roboter geht bis zur n&auml;chsten Mauer und legt auf jede besuchte Kreuzung zwei Beeper&quot; als jede einzelne
Anweisung mit &quot;Der Roboter geht einen Schritt nach vorne&quot;. Versuchen Sie, einen Mittelweg zwischen
&quot;zu wenig&quot; und &quot;zu viel&quot; zu finden. Die Kommentare dienen dem Zweck, anderen die Funktion Ihres Codes zu
erkl&auml;ren (wobei vorausgesetzt werden kann, dass diese anderen halbwegs in KarelJ bewandert sind), sollen aber auch Ihnen
selbst helfen, Ihren Code nach einiger Zeit noch zu durchschauen. Wenn Sie daran denken, k&ouml;nnen Sie eigentlich nicht viel
falsch machen.<br>
<br>

<a href="uebungen/programmierprojekt.pdf">Aufgabenstellung</a><br>
<b><span style="color:red;">Achtung:</span> neue Version vom 22.11.2006.</b>
&Auml;nderungen seit der Ursprungsversion:
<ul>
<li>helfer startet in Aufgabe 5 auf (9, 5) statt (9, 2)</li>
<li>katrin in Aufgabe 4 auf (6, 1) statt (8, 1).</li>
<li>Die Klasse ModifiedAdder in Aufgabe 4 erbt von Adder, nicht von ExtendedRobot.</li>
</ul>

<a href="uebungen/programmierprojekt.task">Vorgabe-Datei</a>,
<a href="kareljide.php" target="_blank">KarelJIDE-Einstellungsassistent</a>,
<a href="http://www.informatik.tu-darmstadt.de/Plagiarism/" target="_blank">Plagiat-Infos</a><br>
<br>

<b><a href="uebungen/programmierprojekt_loesung.task">Musterl&ouml;sung</a></b>

</blockquote>
<br>


<a name="uebungen"></a>
<h1>&Uuml;bungsaufgaben und Musterl&ouml;sungen</h1>
<blockquote>
Zum Ansehen der &Uuml;bungen ben&ouml;tigen Sie den kostenlosen Adobe Reader,
der auf den Poolrechnern schon installiert ist (<code>acroread</code>), zum
Entpacken der Musterl&ouml;sungen ein ZIP-Programm (z.B. WinRAR oder WinZIP,
im Poolraum: <code>unzip <b>loesungXX.zip</b></code>).<br>
Falls sie den Adobe Reader oder WinRAR nicht haben, finden Sie auf der
<a href="material.php#wilinks">Material-Seite</a> im Abschnitt
<i>&quot;Wichtige / interessante Links&quot;</i> entsprechende Verweise.<br>
<br>

<?php

function pad($nr) { // Gibt Zahlen kleiner 10 mit führender 0 zurück
  if ($nr < 10) return '0'.$nr;
   else return $nr;
}

function ext($fn) { // Gibt für einen Dateinamen eine Erweiterung zurück.
  $ret = 'task';
  $ex = strrchr($fn, '.');
  if ($ex == '.txt') $ret = 'txt';
  if ($ex == '.pdf') $ret = 'pdf';
  if ($ex == '.zip') $ret = 'zip';
  return $ret;
}

$keineuebung = true;

for ($i=20; $i > 0; $i--) {
  $nr = pad($i);
  $txtfile = 'uebungen/uebung'.$nr.'/uebung'.$nr.'.txt';
  $zipfile = 'uebungen/uebung'.$nr.'/loesung'.$nr.'.zip';
  if (file_exists($txtfile)) {
    $keineuebung = false;
    // Übungsdaten einlesen
    $file = fopen($txtfile, 'r');
    $titel = trim(fgets($file, 512));
    if ($titel == '') $titel = '&nbsp;';
    $von = trim(fgets($file, 256));
    if ($von == '') $von = '-';
    $bis = trim(fgets($file, 256));
    if ($bis == '') $bis = '-';
    $desc = trim(fgets($file, 1024));
    if ($desc == '') $desc = '&nbsp;';
    $anzahl = trim(fgets($file, 256));
    for ($j = 1; $j <= $anzahl; $j++) {
      $teil[$j] = trim(fgets($file, 512));
      if ($teil[$j] == '') $teil[$j] = 'Teil '.$j;
      $datei[$j] = trim(fgets($file, 256));
      if ($datei[$j] == '') $datei[$j] = 'surelynotexistantfile';
       else $datei[$j] = 'uebungen/uebung'.$nr.'/'.$datei[$j];
    }
    fclose($file);

?>

<table width="90%" border="0" cellpadding="5" cellspacing="0">
<?php /* Übungs-Titelzeile */ ?>
  <tr><td colspan="2" style="background-color:#e0f3f2; font-size:13pt; font-weight:bold;">
    <a name="u<?php echo $nr; ?>"></a>
    <?php echo '&Uuml;bung '.$i."\n" ?>
  </td></tr>
<?php /* Übungs-Titel und Links */ ?>
  <tr>
    <td align="left" style="background-color:#a4dbd8; vertical-align:top;">
      <br>
      <span style="font-size:13pt; font-weight:bold; font-style:italic;">
        <?php echo $titel."\n"; ?>
      </span><br>
      <br>
      <span style="font-size:10pt;">
        Bearbeitungszeitraum:
        <?php echo $von; ?>
        bis
        <?php echo $bis; ?>
      </span>
    </td>
    <td align="right" style="background-color:#a4dbd8; vertical-align:top;">
      <?php for ($j = 1; $j <= $anzahl; $j++) {
        if (file_exists($datei[$j])) { ?>
      <table border="0"><tr><td style="font-size:10pt;">
        <?php echo $teil[$j].':'; ?>
      </td><td>
        <a href="<?php echo $datei[$j]; ?>">
          <img src="bilder/<?php echo ext($datei[$j]); ?>.gif" border="0" alt="" style="vertical-align:middle">
        </a>
      </td></tr></table>
      <?php }
      } ?>
      <?php if (file_exists($zipfile)) { ?>
      <br>
      <table border="0"><tr><td style="font-size:10pt;">
        Musterl&ouml;sung:
      </td><td>
        <a href="<?php echo $zipfile; ?>">
          <img src="bilder/<?php echo ext($zipfile); ?>.gif" border="0" alt="" style="vertical-align:middle">
        </a>
      </td></tr></table>
      <?php } ?>
    </td>
  </tr>
<?php /* Übungs-Kommentar */ ?>
  <tr><td colspan="2" style="background-color:#e0f3f2; font-size:8pt;">
    <?php echo $desc."\n"; ?>
  </td></tr>
</table>
<br>

<?php
  }
}

if ($keineuebung) echo '<b>Es sind noch keine &Uuml;bungen online!</b><br>';

?>

</blockquote>
<br>


<a name="orga"></a>
<h1>&Uuml;bungsorganisation</h1>
<blockquote>
Ab 23.10.2006 finden w&ouml;chentlich Poolraumbetreuungen statt (die Termine
finden Sie auf der Seite <a href="orga.php">Organisation</a>). Die &Uuml;bungen
werden immer am Tag der Vorlesung <a href="#uebungen">ver&ouml;ffentlicht</a>
(die erste am 24.10.2006). Sie haben dann bis mindestens Sonntag der selben Woche
Zeit, die &Uuml;bung selbst&auml;ndig zu bearbeiten (der Poolraum steht Ihnen
daf&uuml;r nat&uuml;rlich offen), bei Ihrem Poolbetreuungstermin der folgenden
Woche k&ouml;nnen Sie dann Fragen stellen, die bei der Bearbeitung der
&Uuml;bungsaufgaben aufgetreten sind (oder <b>notfalls</b> auch dort Ihre
&Uuml;bungsaufgaben erledigen).<br>
<br>
F&uuml;r die Poolraumbetreuung m&uuml;ssen Sie sich <b>anmelden</b> (nur f&uuml;r die
Termine bis einschlie&szlig;lich 01.11.2006 m&uuml;ssen Sie noch nicht angemeldet sein -
beachten Sie aber bitte, dass die Poolr&auml;ume gerade zu den beliebteren Terminen
sehr voll sein k&ouml;nnen).
Sie geben bis zu drei Wunschtermine an, sowie bis zu zwei Termine, an denen Sie absolut
keine Zeit haben (Sie m&uuml;ssen allerdings Gr&uuml;nde angeben) und werden dann
einem Betreuungstermin fest zugeteilt. Sie k&ouml;nnen bei der Anmeldung auch eine
weitere Matrikelnummern angeben, wenn Sie w&auml;hrend der Poolraumbetreuung gerne
mit einem Bekannten zusammen arbeiten. Dieser Student wird dadurch automatisch mit
angemeldet und der selben Gruppe zugeteilt.<br>
<br>
Den Link zur Anmeldung finden Sie links im Men&uuml; unter dem Punkt
<b>&Uuml;bungsanmeldung</b>. Sie ben&ouml;tigen f&uuml;r die Anmeldung
(wie auch f&uuml;r das Arbeiten im Poolraum) zwingend einen RBG-Account
(siehe <a href="orga.php#rbgaccount">Organisation</a>, Abschnitt &quot;Zugangsberechtigung&quot;).<br>
<br>
Anmeldeschluss war Donnerstag, der 02.11.2006 um 23:00 Uhr, die Zuteilung der Gruppen
zu den Terminen steht seit 06.11.2006 im Netz. Ihre Zuteilung k&ouml;nnen Sie auf der
&quot;&Uuml;bungsanmeldung&quot;-Seite erfahren.<br>
<br>
<b><span style="color:red;">Wichtig:</span><br>
Die Anmeldung f&uuml;r die Poolbetreuung ist gleichzeitig die Anmeldung zum
<a href="klausur.php#leist">Programmierprojekt</a>, mit dem Sie 20% der
Gesamtpunkte erreichen k&ouml;nnen. Sie bearbeiten dieses Projekt in der
gleichen Gruppe, in der Sie sich f&uuml;r die Poolraumbetreuung anmelden
(also alleine oder mit einem Partner). Selbst wenn Sie nicht vorhaben,
die Poolraumbetreuungstermine zu besuchen, m&uuml;ssen Sie sich daf&uuml;r
anmelden, wenn Sie das Programmierprojekt bearbeiten wollen!
</b>
<br>
</blockquote>
<br>

<?php
  require('layout_end.php');
?>
