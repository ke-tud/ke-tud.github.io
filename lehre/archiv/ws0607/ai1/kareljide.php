<?php

  $error = false;
  if (isset($_POST['download'])) {
    if (isset($_POST['matrikel']) && isset($_POST['rbg']) && isset($_POST['athome'])
        && $_POST['matrikel']!='' && ereg("[1-9][0-9]{5,6}", $_POST['matrikel']) && $_POST['rbg']!='' && $_POST['athome']!='') {
      if (isset($_POST['matrikel2']) && ereg("[1-9][0-9]{5,6}", $_POST['matrikel'])) {
        $group = $_POST['matrikel'].'_'.$_POST['matrikel2'];
      } else $group = $_POST['matrikel'];
      header('Content-Type: text/plain;');
      header('Content-Disposition: attachment; filename="sumbission.properties"');
      echo "mail.to.address=allginf@gmx.de\r\n";
      echo 'group.name='.$group."\r\n";
      echo 'mail.from.address='.$_POST['rbg']."@rbg.informatik.tu-darmstadt.de\r\n";
      echo "smtp.host.name=mail.rbg.informatik.tu-darmstadt.de\r\n";
      echo 'no.internet='.$_POST['athome']."\r\n";
      die();
    } else {
      $error = true;
    }
  }

  $seite = 'uebungen';
  require('layout_begin.php');
?>

<h1>KarelJIDE - Abgabeeinstellungsassistent</h1>
<blockquote>

Dieser Assistent soll Ihnen helfen, die KarelJIDE so zu konfigurieren,
dass Ihre Programmierprojekt-Abgabe auch bei uns ankommt.<br>
<br>

<?php
  if ($error) {
?>
<span style="color:red;"><b>Sie m&uuml;ssen alle Felder korrekt ausf&uuml;llen!</b></span><br><br>
<?php
  }
?>

<form action="kareljide.php" method="post">

<table width="90%" border="0" cellspacing="0" cellpadding="5">

<tr style="background-color:#e0f3f2;"><td>
Ihre Matrikelnummer (z.B. 987654 oder 1234567):
</td><td>
<input type="text" name="matrikel" size="8" maxlength="7">
</td></tr><tr style="background-color:#e0f3f2;"><td>
Nur Zweiergruppen: Die Matrikelnummer Ihres Gruppenpartners:
</td><td>
<input type="text" name="matrikel2" size="8" maxlength="7">
</td></tr>

<tr style="background-color:#a4dbd8;"><td>
Ihr RBG-Loginname (z.B. heinig oder ab1001):
</td><td>
<input type="text" name="rbg" size="8" maxlength="8">
</td></tr>

<tr style="background-color:#e0f3f2;"><td colspan="2">
Wo arbeiten Sie an den &Uuml;bungen bzw. von wo schicken Sie das Programmierprojekt ein?
</td></tr>
<tr style="background-color:#e0f3f2;"><td colspan="2">
<input type="radio" name="athome" value="false" checked="checked">RBG-Rechnerpool
</td></tr>
<tr style="background-color:#e0f3f2;"><td colspan="2">
<input type="radio" name="athome" value="true"> zu Hause
</td></tr>

<tr style="background-color:#a4dbd8;"><td colspan="2">
<input type="submit" name="download" value="Download">
</td></tr>
<tr style="background-color:#e0f3f2;"><td colspan="2">
<ol>
<li><b>Beenden Sie die KarelJIDE, falls sie gestartet ist.</b></li>
<li>Geben Sie Ihre Daten ein.</li>
<li>Klicken Sie auf &quot;Download&quot;.<br>
Speichern Sie die Datei <b>sumbission.properties</b> (kein Tippfehler!)
in Ihr Home-Verzeichnis im Poolraum bzw. in Ihr KarelJIDE-Verzeichnis
zu Hause. Wenn die Datei schon existiert: &uuml;berschreiben Sie sie.</li>
<li>Kontrollieren Sie die Einstellungen, indem Sie in der KarelJIDE
auf &quot;Settings&quot; klicken.</li>
</ol>
</td></tr>

</table>

</form>
<br>

<b>Sie bekommen bei Abgabe des Programmierprojekts mittels der
&quot;Submit&quot;-Funktion in der KarelJIDE automatisch eine
Empfangsbest&auml;tigung an Ihre RBG-E-Mail-Adresse.</b><br>
<br>
Wenn der Download der Datei nicht funktioniert, k&ouml;nnen Sie die
Daten auch manuell eintragen. Klicken Sie dazu in der KarelJIDE auf
&quot;Settings&quot; und geben folgende Daten ein:<br>
<ul>
  <li>SMTP Host Name: <b>mail.rbg.informatik.tu-darmstadt.de</b></li>
  <li>Tutor's Email Address: <b>allginf@gmx.de</b></li>
  <li>Your Email Address: <b><span style="color:red;">&lt;Ihr RBG-Loginname&gt;</span>@rbg.informatik.tu-darmstadt.de</b></li>
  <li>No Internet Connection: <b>Kein Haken</b> (Arbeit im Pool) / <b>Haken</b> (Arbeit zu Hause)</li>
  <li>Your Group Name (Gruppe hat ein Mitglied): <b><span style="color:red;">&lt;Ihre Matrikelnummer&gt;</span></b></li>
  <li>Your Group Name (Gruppe hat zwei Mitglieder): <b><span style="color:red;">&lt;Ihre Matrikelnummer&gt;</span>_<span style="color:red;">&lt;Partner-Matrikelnummer&gt;</span></b></li>
</ul>
Klicken Sie dann auf &quot;Ok&quot;.<br>
<br>

<b>Wenn Sie von zu Hause aus arbeiten, erstellt KarelJIDE beim Klick auf &quot;Submit&quot;
ein ZIP-Archiv mit dem Namen
&quot;Exercise_1_1_Group_<span style="color:red;">&lt;IhreMatrikelnummer&gt;</span>_<span style="color:red;">&lt;PartnerMatrikelnummer&gt;</span>.zip&quot;.
Dieses m&uuml;ssen Sie mit dem Betreff
<code>[KarelJ&nbsp;Exercise_1_1_Group_<span style="color:red;">&lt;IhreMatrikelnummer&gt;</span>_<span style="color:red;">&lt;PartnerMatrikelnummer&gt;</span>]</code>
an die E-Mail-Adresse allginf@gmx.de schicken. Halten Sie sich genau an das vorgegebene
Format f&uuml;r den Betreff und vergessen Sie auch die eckigen Klammern und Unterstriche
( _ ) nicht!

</blockquote>
<br>

<?php
  require('layout_end.php');
?>