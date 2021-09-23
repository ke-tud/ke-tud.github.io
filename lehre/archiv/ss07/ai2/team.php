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
                '<b>Sprechstunde:</b><br>Mi 10:00-11:00',
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

  <?php person2('c_heinig', true, 'Christian Heinig', 'Do 14:30-16:00',
                'christian.heinig', 'ke.informatik.tu-darmstadt.de', 'Owyn'); ?>
  <?php person2('t_hennchen', true, 'Tobias Hennchen', 'Fr 13:30-15:00',
                'tobias.hennchen', 'ke.informatik.tu-darmstadt.de', 'Hennchen'); ?>
  <?php person2('d_thomas', true, 'David Thomas', 'Fr 8:10-9:40 + Fr 9:50-11:20',
                'david.thomas', 'ke.informatik.tu-darmstadt.de', 'Luftholen'); ?>

</table>

<br>

<table width="90%" border="0" cellpadding="3" cellspacing="0">
  <tr><td style="background-color:#e0f3f2; text-align:center; font-size:10pt; font-weight:bold;">
    Tutoren
  </td></tr>

  <?php person2('d_hirt', true, 'Dominik Hirt', 'Di 11:40-13:10 + Do 16:15-17:45',
                'dominik.hirt', 'ke.informatik.tu-darmstadt.de', 'Hirt'); ?>
  <?php person2('s_hochstetter', true, 'Sebastian Hochstetter', 'Di 14:30-16:00',
                'sebastian.hochstetter', 'ke.informatik.tu-darmstadt.de', 'hochi'); ?>
  <?php person2('d_kilian', true, 'David Kilian', 'Di 8:00-9:30 + Do 8:00-9:30',
                'david.kilian', 'ke.informatik.tu-darmstadt.de', 'dk'); ?>
  <?php person2('s_kissel', true, 'Sebastian Kissel', 'Mi 16:15-17:45',
                'sebastian.kissel', 'ke.informatik.tu-darmstadt.de', 'TUTOR_Sebastian'); ?>
  <?php person2('d_nussbaum', true, 'David Nussbaum', 'Do 14:30-16:00 + Do 16:15-17:45',
                'david.nussbaum', 'ke.informatik.tu-darmstadt.de', 'MrBadGuy'); ?>
  <?php person2('a_wahrburg', true, 'Arne Wahrburg', 'Di 16:15-17:45',
                'arne.wahrburg', 'ke.informatik.tu-darmstadt.de', 'ArneW.'); ?>

</table>

</blockquote>
<br>

<?php
  require('layout_end.php');
?>