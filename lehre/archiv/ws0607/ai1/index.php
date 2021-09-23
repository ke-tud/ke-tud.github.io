<?php
  $seite = 'index';
  require('layout_begin.php');
?>


<h1>Aktuelle Informationen zur Veranstaltung</h1>
<blockquote>

<?php
  $fullname = array('j' => 'Johannes F&uuml;rnkranz', 'c' => 'Christian Heinig', 't' => 'Tobias Hennchen');
  $avatar = array('j' => 'j_fuernkranz.jpg', 'c' => 'c_heinig.jpg', 't' => 't_hennchen.jpg');
  $alias = array('j' => 'fuernkranz', 'c' => 'christian.heinig', 't' => 'tobias.hennchen');
  $host = array('j' => 'informatik.tu-darmstadt.de', 'c' => 'ke.informatik.tu-darmstadt.de', 't' => 'ke.informatik.tu-darmstadt.de');

  $data = null; // Noch keine Dateien eingelesen
  $anz = 0; // Anzahl der News-Dateien

  $path = './news'; // Pfad zum News-Verzeichnis
  $handle = opendir($path); // Verzeichnis öffnen
  while ($file = readdir($handle)) { // Solange es noch nicht eingelesene Dateien gibt...
    if ($file != '.' && $file != '..' && !is_dir($path.'/'.$file)) { // ...die kein Verzeichnis sind
      if (ereg("(20[0-9][0-9])-([0-1][0-9])-([0-3][0-9])", $file, $regs)) {
        $year = $regs[1];
        $month = $regs[2];
        $day = $regs[3];
        if (ereg("([0-2][0-9])-([0-5][0-9])-([0-5][0-9])", $file, $regs2)) {
          $hour = $regs2[1];
          $minute = $regs2[2];
          $second = $regs2[3];
        } else $hour = $minute = $second = 0;
        $data['date'][$anz] = mktime($hour, $minute, $second, $month, $day, $year);
      } else $data['date'][$anz] = filemtime($path.'/'.$file); // Dateiänderungsdatum ermitteln

      $data['poster'][$anz] = strtolower(substr($file, 0, 1)); // Erstes Zeichen des Dateinamens = Poster
      $f = fopen($path.'/'.$file, 'r'); // Datei öffnen
      $data['title'][$anz] = trim(fgets($f, 1024)); // Newstitel einlesen
      $data['text'][$anz] = '';
      while (!feof($f)) $data['text'][$anz] .= trim(fgets($f, 1024)).'<br>'; // Text einlesen
      fclose($f); // Datei schließen
      $anz++; // Anzahl der eingelesenen Dateien inkrementieren
    } // if ($file != ...
  } // while ($file = ...
  @closedir($handle); // Verzeichnis schließen

  // News nach Datum sortieren
  if ($data != null) array_multisort($data['date'], SORT_DESC, $data['poster'], $data['title'], $data['text']);

  // Anzahl der angezeigten News festlegen
  if (isset($_GET['showallnews']) || $anz < 10) $show = $anz;
  else $show = 10;

  // News ausgeben
  for ($i = 0; $i < $show; $i++) {
?>
<table width="90%" border="0" cellpadding="5" cellspacing="0">
<?php /* Posting-Titelzeile */ ?>
  <tr><td colspan="3" style="background-color:#e0f3f2; font-size:13pt; font-weight:bold;">
    <?php echo $data['title'][$i]."\n"; ?>
  </td></tr>
<?php /* Posting-Inhalt */ ?>
  <tr>
    <td style="width:16px; background-color:#e0f3f2; text-align:center;">
      &nbsp;
    </td>
    <td style="background-color:#a4dbd8; font-size:12pt; text-align:left; vertical-align:top;">
      <?php echo $data['text'][$i]."\n"; ?>
    </td>
    <td style="width:72px; background-color:#e0f3f2; text-align:right; vertical-align:bottom;">
      <img src="bilder/avatare_klein/<?php echo $avatar[$data['poster'][$i]]; ?>" alt="<?php echo $fullname[$data['poster'][$i]]; ?>" width="72" height="100">
    </td>
  </tr>
<?php /* Posting-Fußzeile */ ?>
  <tr>
    <td colspan="3" style="background-color:#e0f3f2; font-size:8pt; text-align:right;">
      Geschrieben
      <?php echo 'am '.date('d.m.Y', $data['date'][$i])."\n"; ?>
<?php /* echo 'um '.date('H:i', $data['date'][$i]).' Uhr'."\n"; */ ?>
      von
      <span style="font-size:10pt; font-weight:bold;">
        <a href="javascript:email('<?php echo $alias[$data['poster'][$i]]; ?>','<?php echo $host[$data['poster'][$i]]; ?>')">
          <?php echo $fullname[$data['poster'][$i]]."\n"; ?>
        </a>
      </span>
    </td>
  </tr>
</table>
<br>

<?php
  }

  if ($anz == 0) echo "<b>Keine News vorhanden!</b><br><br>\n";
?>
</blockquote>
<br>

<?php
  if ($show < $anz && $anz > 10) {
?>
<div align="center">
  <font size="3" face="Arial, Helvetica, sans-serif">
    <a href="index.php?showallnews">
      Alle <?php echo $anz; ?> News anzeigen...
    </a>
  </font>
</div>
<?php } ?>

<?php
  require('layout_end.php');
?>