<?php
  $seite = 'uebungen';
  require('layout_begin.php');
?>

<a name="projekt"></a>
<h1>Programmierprojekt</h1>
<blockquote>
<b>Organisatorisches <span style="color:red;">(unbedingt gut durchlesen!)</span></b><br>
<ul>
<li>Sie mussten sich f&uuml;r das Programmierprojekt <b>anmelden</b>.
  Sie k&ouml;nnen das Projekt in Gruppen bis zu drei Personen bearbeiten - dazu geben Sie bei der
  Anmeldung die zus&auml;tzlichen RBG-Loginnamen mit ein. Anmeldeschluss war der 17. Juni 2007.</li>
<li>Abgabeschluss ist Freitag, der 13. Juli 2007.</li>
<li>Die Bewertung der Abgaben geschieht durch <b>Testate</b> in der letzten Vorlesungswoche
  (16. bis 20. Juli 2007).
  <ul>
  <li>Bitte beachten Sie Ihre <a href="zuteilung_testate.pdf">feste Zuteilung zu einem Testattermin</a>!</li>
  <li>Wenn Sie ein Problem mit Ihrem Termin haben, schreiben Sie
    <a href="javascript:email('tobias.hennchen', 'ke.informatik.tu-darmstadt.de?subject=AI2-Testattermin')">Tobias Hennchen</a>
    bis 08.07.2007 eine Mail. Sie k&ouml;nnen allerdings nur in einen Termin wechseln, an dem mindestens
    ein Gruppenmitglied seinen &Uuml;bungstermin hat.</li>
  <li>Im Poolraum liegt zum Testattermin eine Liste aus, in die Sie sich eintragen. In der Reihenfolge dieser Liste
    werden die Testate abgenommen.</li>
  <li>Es kann nat&uuml;rlich sein, dass wir f&uuml;r die Testate mehr als 90 Minuten brauchen -
    kommen Sie aber bitte trotzdem p&uuml;nktlich!</li>
  <li>&quot;Testat&quot; bedeutet: Ihre Gruppe f&uuml;hrt einem Tutor das Programm vor und beantwortet Fragen dazu.</li>
  <li>Alle Gruppenmitglieder m&uuml;ssen die Fragen beantworten k&ouml;nnen (also das Programm verstehen).
    Wer das Projekt nicht verstanden hat, bekommt 0 Punkte.</li>
  <li>Wer nicht anwesend ist, bekommt ebenfalls 0 Punkte. Wenn ein Attest nachgereicht wird, ist nat&uuml;rlich eine
    Nachpr&uuml;fung m&ouml;glich.</li>
  <li>Bringen Sie unbedingt Studenten- und Lichtbildausweis mit!</li>
  </ul>
<li>Jedes Gruppenmitglied kann mit dem Programmierprojekt bis zu 20 Punkte erreichen, die 20% der
Endnote der Veranstaltung Allgemeine Informatik 2 ausmachen. Die restlichen 80% kommen durch die
Abschlussklausur im September zusammen.</li>
<li>Vor dem Testat wird Ihre Abgabe nach folgendem Schema bewertet.
  Die dabei erreichte Punktzahl ist die Maximalpunktzahl im Testat.
  <table border="1" cellspacing="0" cellpadding="3">
    <tr><td>Nicht kompilierbar:</td><td>insgesamt 0 Punkte</td></tr>
    <tr><td>Klasse Num:</td><td>1 Punkt</td></tr>
    <tr><td>Klasse Op:</td><td>3 Punkte (eval 1, *fix 1, nodes+depth 1)</td></tr>
    <tr><td>Tokenizer:</td><td>5 Punkte (Bracket 1, Op 1, Num 3)</td></tr>
    <tr><td>Parser:</td><td>9 Punkte (pre-, in-, postfix je 3)</td></tr>
    <tr><td>JavaDoc-Kommentierung und Formatierung:</td><td>2 Punkte</td></tr>
  </table></li>
<li><b>Wichtig:</b><br> &quot;Der Fachbereich Informatik misst der Einhaltung der Grundregeln der
wissenschaftlichen Ethik gro&szlig;en Wert bei. Zu diesen geh&ouml;rt auch die strikte Verfolgung von
Plagiarismus. Mit der Abgabe ihrer L&ouml;sung best&auml;tigen Sie, dass Sie der alleinige Autor /
die alleinigen Autoren des gesamten Materials sind. Bei Unklarheiten zu diesem Thema finden Sie
weiterf&uuml;hrende Informationen auf <a href="http://www.informatik.tu-darmstadt.de/Plagiarism/" target="_blank">
http://www.informatik.tu-darmstadt.de/Plagiarism</a> oder sprechen Sie Ihren Betreuer an.&quot;</li>
</ul>
<br>

<b><a href="uebungen/propro.pdf">Aufgabenstellung</a></b>
<span style="color:#cc0000;">(Version 5 vom 30.06.2007)<br>
Es gibt nat&uuml;rlich keine &Auml;nderungen in der Aufgabenstellung, allerdings sind einige Abschnitte,
z.B. &uuml;ber das Konstrukt <code><b>Vector&lt;Token&gt;</b></code> besser erkl&auml;rt und kleinere
Fehler beseitigt.</span><br>
<br>
<b>Erg&auml;nzende Hinweise zur Aufgabenstellung:</b>
<ul>
<li>Den Prefix-Parser k&ouml;nnen Sie auch ohne while-Schleife programmieren.</li>
<li>Um Fehlererkennung brauchen Sie sich keine Gedanken zu machen: im Tokenizer sollen Sie ung&uuml;ltige Zeichen
  im Eingabestring einfach ignorieren, bei nicht wohlgeformten Eingabestrings darf das Programm ruhig abst&uuml;rzen.</li>
</ul>
<br>
<b><a href="uebungen/propro.zip">Vorgabe: propro.zip</a></b>
<span style="color:#cc0000;">(Version 2 vom 10.06.2007)<br>
Es gibt nat&uuml;rlich keine &Auml;nderungen in der Aufgabenstellung, allerdings wurde der
Deutlichkeit halber in der Klasse <code><b>Num</b></code> ein leerer Standard-Konstruktor hinzugef&uuml;gt.</span><br>
</blockquote>
<br>


<a name="orga"></a>
<h1>&Uuml;bungsorganisation</h1>
<blockquote>
Ab 02.05.2007 finden w&ouml;chentlich Poolraumbetreuungen statt (die Termine
finden Sie auf der Seite <a href="orga.php">Organisation</a>). Die &Uuml;bungen
werden immer am Tag der Vorlesung <a href="#uebungen">ver&ouml;ffentlicht</a>.
Die Poolraumbetreuung zu dieser &Uuml;bung findet dann bis zum jeweils folgenden
Dienstag statt.<br>
<br>
<?php /*
F&uuml;r die Poolraumbetreuung m&uuml;ssen Sie sich <b>anmelden</b>!<br>
Sie geben bis zu drei Wunschtermine an, sowie bis zu zwei Termine, an denen Sie absolut
keine Zeit haben (Sie m&uuml;ssen allerdings Gr&uuml;nde angeben) und werden dann
einem Betreuungstermin <b>fest zugeteilt</b>. Sie k&ouml;nnen bei der Anmeldung auch eine
weitere Matrikelnummern angeben, wenn Sie w&auml;hrend der Poolraumbetreuung gerne
mit einem Bekannten zusammen arbeiten. Dieser Student wird dadurch automatisch mit
angemeldet und der selben Gruppe zugeteilt.<br>
<br>
Den Link zur Anmeldung finden Sie links im Men&uuml; unter dem Punkt
<b>&Uuml;bungsanmeldung</b>. Sie ben&ouml;tigen f&uuml;r die Anmeldung
(wie auch f&uuml;r das Arbeiten im Poolraum) zwingend einen RBG-Account
(siehe <a href="orga.php#rbgaccount">Organisation</a>, Abschnitt &quot;Zugangsberechtigung&quot;).<br>
<br>
Anmeldeschluss ist Samstag, der 28.04.2007 um 23:00 Uhr, die Zuteilung der Gruppen
zu den Terminen steht dann ab Sonntag oder Montag im Netz. Ihre Zuteilung k&ouml;nnen Sie auf der
&quot;&Uuml;bungsanmeldung&quot;-Seite erfahren.<br>
<br>
<b><span style="color:red;">Wichtig:</span></b><br>
Die Anmeldung f&uuml;r die Poolbetreuung ist diesmal <b>nicht</b>
gleichzeitig die Anmeldung zum <a href="klausur.php#leist">Programmierprojekt</a>.
F&uuml;r dieses wird es eine gesonderte Anmeldung geben.<br>
*/ ?>
Durch Ihre Anmeldung zu den &Uuml;bungen sind Sie einem Termin fest zugeteilt. Diese Zuteilung
k&ouml;nnen Sie auf der &quot;&Uuml;bungsanmeldung&quot;-Seite erfahren.<br>
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


<?php
  require('layout_end.php');
?>