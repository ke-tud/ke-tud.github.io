<?php
  $seite = 'team';
  require('layout_begin.php');
?>

<?php
  function person1($id, $bild, $name, $ort, $zeit, $mail1, $mail2, $forum) {
    echo '
  <tr><td style="background-color:#a4dbd8"><a name="'.$id.'"></a>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="width:155px; text-align:left;">
          <img src="bilder/avatare/'.($bild?$id:'_empty').'.jpg" width="145" height="201" alt="">
        </td>
        <td style="text-align:left; vertical-align:middle;">
          <p style="font-size:12pt; font-weight:bold;">
            '.$name.'
          </p>
          <p style="font-size:10pt;">
            '.$ort.'
          </p>
          <p style="font-size:10pt;">
            '.$zeit.'
          </p>
          <p style="font-size:10pt;">
            <a href="javascript:email(\''.$mail1.'\',\''.$mail2.'\')" style="font-size:8pt; text-decoration:none;">
              <img src="bilder/brief.gif" width="14" height="11" border="0" alt="" style="vertical-align:middle">
              '.$mail1.'<img src="bilder/at2.gif" border="0" alt="">'.$mail2.'
            </a>
          </p>
          <p style="font-size:10pt;">
            <b>Forumsname:</b> '.($forum?$forum:'-').'
          </p>
        </td>
      </tr>
    </table>
  </td></tr>
    ';
  }

  function person2($id, $bild, $name, $pool, $mail1, $mail2, $forum) {
    echo '
  <tr><td style="background-color:#a4dbd8"><a name="'.$id.'"></a>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="width:155px; text-align:left;">
          <img src="bilder/avatare/'.($bild?$id:'_empty').'.jpg" width="145" height="201" alt="">
        </td>
        <td style="text-align:left; vertical-align:middle;">
          <p style="font-size:12pt; font-weight:bold;">
            '.$name.'
          </p>
          <p style="font-size:10pt;">
            <b>Betreuungszeiten:</b><br>
            '.$pool.'
          </p>
          <p style="font-size:10pt;">
            <a href="javascript:email(\''.$mail1.'\',\''.$mail2.'\')" style="font-size:8pt; text-decoration:none;">
              <img src="bilder/brief.gif" width="14" height="11" border="0" alt="" style="vertical-align:middle">
              '.$mail1.'<img src="bilder/at2.gif" border="0" alt="">'.$mail2.'
            </a>
          </p>
          <p style="font-size:10pt;">
            <b>Forumsname:</b> '.($forum?$forum:'-').'
          </p>
        </td>
      </tr>
    </table>
  </td></tr>
    ';
  }

?>


<h1>Die Verantwortlichen</h1>
<blockquote>

<table width="90%" border="0" cellpadding="3" cellspacing="0">
  <tr><td style="background-color:#e0f3f2; text-align:center; font-size:10pt; font-weight:bold;">
    Dozent
  </td></tr>

  <?php person1('j_fuernkranz', true, 'Prof. Dr. Johannes F&uuml;rnkranz',
                'S2/02/E303 (Hochschulstr. 10)<br>Tel. (06151) 16 - 6238<br>',
                '<b>Sprechstunde:</b><br>Mi 11:00-12:00',
                'fuernkranz', 'informatik.tu-darmstadt.de', 'juffi'); ?>

</table>

<br>

<table width="90%" border="0" cellpadding="3" cellspacing="0">
  <tr><td style="background-color:#e0f3f2; text-align:center; font-size:10pt; font-weight:bold;">
    Sekretariat
  </td></tr>

  <?php person1('g_ploch', false, 'Gabriele Ploch',
                'S2/02/E304 (Hochschulstr. 10)<br>Tel. (06151) 16 - 5409<br>',
                '<b>Sekretariatszeiten:</b><br>Mo-Fr 9:00-12:00',
                'gploch', 'informatik.tu-darmstadt.de', ''); ?>

</table>

<br>

<table width="90%" border="0" cellpadding="3" cellspacing="0">
  <tr><td style="background-color:#e0f3f2; text-align:center; font-size:10pt; font-weight:bold;">
    Organisation
  </td></tr>

  <?php person2('c_heinig', true, 'Christian Heinig', 'Mi 8:00-9:40',
                'christian.heinig', 'ke.informatik.tu-darmstadt.de', 'Owyn'); ?>
  <?php person2('t_hennchen', true, 'Tobias Hennchen', 'Mi 16:15-17:55',
                'tobias.hennchen', 'ke.informatik.tu-darmstadt.de', 'Hennchen'); ?>

</table>

<br>

<table width="90%" border="0" cellpadding="3" cellspacing="0">
  <tr><td style="background-color:#e0f3f2; text-align:center; font-size:10pt; font-weight:bold;">
    Hilfskr&auml;fte / Tutoren
  </td></tr>

  <?php person2('s_hochstetter', true, 'Sebastian Hochstetter', 'Mi 14:25-16:05',
                'sebastian.hochstetter', 'ke.informatik.tu-darmstadt.de', 'hochi'); ?>
  <?php person2('a_juling', true, 'Alexander Juling', 'Mo 14:25-16:05 + Mo 16:15-17:55',
                'alexander.juling', 'ke.informatik.tu-darmstadt.de', 'AlexJ'); ?>
  <?php person2('s_kissel', true, 'Sebastian Kissel', 'Mi 14:25-16:05 + Mi 16:15-17:55',
                'sebastian.kissel', 'ke.informatik.tu-darmstadt.de', 'TUTOR_Sebastian'); ?>
  <?php person2('s_schmidt', true, 'Stefan Schmidt', 'Di 8:00-9:40',
                'stefan.schmidt', 'ke.informatik.tu-darmstadt.de', 'Stefan S'); ?>
  <?php person2('i_smyrnova', true, 'Iryna Smyrnova', 'Mi 8:00-9:40',
                'iryna.smyrnova', 'ke.informatik.tu-darmstadt.de', 'Iryna'); ?>
  <?php person2('d_thomas', true, 'David Thomas', 'Mo 14:25-16:05 + Mo 16:15-17:55',
                'david.thomas', 'ke.informatik.tu-darmstadt.de', 'Luftholen'); ?>
  <?php person2('a_wahrburg', true, 'Arne Wahrburg', 'Mi 11:40-13:20',
                'arne.wahrburg', 'ke.informatik.tu-darmstadt.de', 'ArneW.'); ?>

</table>

</blockquote>
<br>

<?php
  require('layout_end.php');
?>