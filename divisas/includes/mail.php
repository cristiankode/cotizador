<?php
function correo($destino, $asunto, $mensaje){
	$mensaje .= "<br><br><br>
		<table width='90%' border='0' cellspacing='0' cellpadding='0'>
			<tr>
				<td colspan='3' style='color:#910000' >Por favor, <br>
					NO responda a este mensaje,	<br>
					es un envío automático. <br><br>
				</td> 
			</tr>
		</table>";
	require ($_SERVER["DOCUMENT_ROOT"].'/php/PHPMailerAutoload.php');
	
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'xbloq.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'laxmegatravel';//'sistemas3@megatravel.com.mx';                 // SMTP username
	$mail->Password = 'V?#uFcXzGRBc';//'51k3+0@*A5tn';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                   // TCP port to connect to
	$mail->setFrom('noreply@megatravel.com.mx', 'Notificacion');

	$correos = explode(';', $destino);
	foreach ($correos as $diremail){
		if($diremail != ''){
			$mail->addAddress($diremail);     // Add a recipient
		}
	} 

	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $asunto;
	$mail->Body    = $mensaje;
	$mail->CharSet = 'UTF-8';
	$mail->AltBody = 'El mensaje enviado viene en formato HTML para visualizarlo abra el archivo adjunto.';
	
	if(!$mail->send()) {
		$datoserror	= (date('Y-m-d H:i:s')."|Envio de correo|".$_SERVER['REQUEST_URI']."|");
 		$modulo	= "mail";
		$msgerror = $mail->ErrorInfo;
		$m_error = $datoserror.$msgerror;
		$ruta = $_SERVER['DOCUMENT_ROOT']."/logs/".$modulo.".txt";
		$archivo = fopen($ruta,"a");
		$m_error .= PHP_EOL;
		fwrite($archivo, $m_error);
		fclose($archivo);
	} 	
}



function correoBCC($destino, $bcc, $asunto, $mensaje){
	$mensaje .= "<br><br><br>
		<table width='90%' border='0' cellspacing='0' cellpadding='0'>
			<tr>
				<td colspan='3' style='color:#910000' >Por favor, <br>
					NO responda a este mensaje,	<br>
					es un envío automático. <br><br>
				</td>
			</tr>
		</table>";
	require ($_SERVER["DOCUMENT_ROOT"].'/php/PHPMailerAutoload.php');
	
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'xbloq.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'laxmegatravel';//'sistemas3@megatravel.com.mx';                 // SMTP username
	$mail->Password = 'V?#uFcXzGRBc';//'51k3+0@*A5tn';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                   // TCP port to connect to
	$mail->setFrom('noreply@megatravel.com.mx', 'Notificacion');

	$correos = explode(';', $destino);
	foreach ($correos as $diremail){
		if($diremail != ''){
			$mail->addAddress($diremail);     // Add a recipient
		}
	}

	$correosbcc = explode(';', $bcc);
	foreach ($correosbcc as $mailbcc){
		if($mailbcc != ''){
			$mail->addBCC($mailbcc);     // Add a recipient
		}
	}

	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $asunto;
	$mail->Body    = $mensaje;
	$mail->CharSet = 'UTF-8';
	$mail->AltBody = 'El mensaje enviado viene en formato HTML para visualizarlo abra el archivo adjunto.';
	
	if(!$mail->send()) {
		$datoserror	= (date('Y-m-d H:i:s')."|Envio de correo|".$_SERVER['REQUEST_URI']."|");
 		$modulo	= "mail";
		$msgerror = $mail->ErrorInfo;
		$m_error = $datoserror.$msgerror;
		$ruta = $_SERVER['DOCUMENT_ROOT']."/logs/".$modulo.".txt";
		$archivo = fopen($ruta,"a");
		$m_error .= PHP_EOL;
		fwrite($archivo, $m_error);
		fclose($archivo);
	}
}

function correoBCC_sa($destino, $bcc, $asunto, $mensaje, $mailsalida, $titulo){
	$mensaje .= "<br><br><br>
		<table width='100%' border='0' cellspacing='0' cellpadding='0'>
			<tr>
				<td colspan='3' style='font-size:10px;color:#eaeaea' >Por favor, <br>
					NO responda a este mensaje,	<br>
					es un envío automático. <br><br>
				</td>
			</tr>
		</table>";
	require ($_SERVER["DOCUMENT_ROOT"].'/php/PHPMailerAutoload.php');
	
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'xbloq.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'laxmegatravel';//'sistemas3@megatravel.com.mx';                 // SMTP username
	$mail->Password = 'V?#uFcXzGRBc';//'51k3+0@*A5tn';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                   // TCP port to connect to
	$mail->setFrom($mailsalida, $titulo);

	$correos = explode(';', $destino);
	foreach ($correos as $diremail){
		if($diremail != ''){
			$mail->addAddress($diremail);     // Add a recipient
		}
	}

	$correosbcc = explode(';', $bcc);
	foreach ($correosbcc as $mailbcc){
		if($mailbcc != ''){
			$mail->addBCC($mailbcc);     // Add a recipient
		}
	}

	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $asunto;
	$mail->Body    = $mensaje;
	$mail->CharSet = 'UTF-8';
	$mail->AltBody = 'El mensaje enviado viene en formato HTML para visualizarlo abra el archivo adjunto.';
	
	if(!$mail->send()) {
		$datoserror	= (date('Y-m-d H:i:s')."|Envio de correo|".$_SERVER['REQUEST_URI']."|");
 		$modulo	= "mail";
		$msgerror = $mail->ErrorInfo;
		$m_error = $datoserror.$msgerror;
		$ruta = $_SERVER['DOCUMENT_ROOT']."/logs/".$modulo.".txt";
		$archivo = fopen($ruta,"a");
		$m_error .= PHP_EOL;
		fwrite($archivo, $m_error);
		fclose($archivo);
	}
}

function correoBCC_adjunto_sa($destino, $bcc, $asunto, $mensaje, $mailsalida, $titulo, $adjuntos,$nombreadjuntos){
	$vendedor = explode("@",$mailsalida);
	$mensaje .= "<table border='1' cellspacing='0' cellpadding='0' width='690'>
	<tbody>
		<tr>
			<td colspan='2'><p align='center'><a href='mailto:".$mailsalida."'><img border='0' width='475' height='70' id='_x0000_i1027' src='http://img1.mtmedia.com.mx/mout/firmas/".$vendedor[0].".jpg' alt='http://img1.mtmedia.com.mx/mout/firmas/".$vendedor[0].".jpg'></a></p></td>
			<td width='211'><p>Av. Chapultepec 536, Col. Roma Norte. <br>
				C.P. 06700 CD<strong>MX</strong> |<a href='https://goo.gl/maps/fotkr7U8NJ82'> Ver Mapa</a><br>
				(55)5241 0333 <br>
				01800 400 6342 <strong>MEGA</strong></p></td>
		</tr>
		<tr>
			<td width='230'><p align='center'><strong><a href='http://www.megatravel.com.mx/' target='_blank'>www.megatravel.com.mx</a></strong></p></td>
			<td width='245'><p align='center'><a href='http://goo.gl/FnpuUv' target='_blank'>Evalúe mi servicio</a></p></td>
			<td><table border='0' cellpadding='0' width='200'>
				<tbody>
					<tr>
						<td><p><a href='http://www.megatravel.com.mx/info/formas-de-pago.php?tp=' target='_blank'>Formas de pago</a></p></td>
						<td><p><a href='http://www.megatravel.com.mx/info/politicas-de-cancelacion.php' target='_blank'>Política de cancelación</a></p></td>
						<td><p><a href='http://www.megatravel.com.mx/info/politica-de-privacidad.php' target='_blank'>Aviso de privacidad</a></p></td>
					</tr>
				</tbody>
			</table></td>
		</tr>
		<tr height='0'>
			<td width='275'></td>
			<td width='212'></td>
			<td width='203'></td>
		</tr>
	</tbody>
</table>";

	require ($_SERVER["DOCUMENT_ROOT"].'/php/PHPMailerAutoload.php');
	
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'xbloq.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'laxmegatravel';//'sistemas3@megatravel.com.mx';                 // SMTP username
	$mail->Password = 'V?#uFcXzGRBc';//'51k3+0@*A5tn';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                   // TCP port to connect to
	$mail->setFrom($mailsalida, $titulo);

	$correos = explode(';', $destino);
	foreach ($correos as $diremail){
		if($diremail != ''){
			$mail->addAddress($diremail);     // Add a recipient
		}
	}

	$correosbcc = explode(';', $bcc);
	foreach ($correosbcc as $mailbcc){
		if($mailbcc != ''){
			$mail->addBCC($mailbcc);     // Add a recipient
		}
	}

	$arg_adjuntos = explode('§', $adjuntos);
	$nuevonombre = explode('§', $nombreadjuntos);
	foreach ($arg_adjuntos as $index => $adjunto ){
		if($adjunto != ''){
			if($nuevonombre[$index] != ''){
				$mail->addAttachment($adjunto, $nuevonombre[$index]);         // Add attachments
			}
			else{
				$mail->addAttachment($adjunto);         // Add attachments
			}
		}
	}


	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $asunto;
	$mail->Body    = $mensaje;
	$mail->CharSet = 'UTF-8';
	$mail->AltBody = 'El mensaje enviado viene en formato HTML para visualizarlo abra el archivo adjunto.';
	
	if(!$mail->send()) {
		$datoserror	= (date('Y-m-d H:i:s')."|Envio de correo|".$_SERVER['REQUEST_URI']."|");
 		$modulo	= "mail";
		$msgerror = $mail->ErrorInfo;
		$m_error = $datoserror.$msgerror;
		$ruta = $_SERVER['DOCUMENT_ROOT']."/logs/".$modulo.".txt";
		$archivo = fopen($ruta,"a");
		$m_error .= PHP_EOL;
		fwrite($archivo, $m_error);
		fclose($archivo);
	}
}







/*	CODIGO COMPLETO PARA ENVIO DE EMAIL POR SMTP

	require ($_SERVER["DOCUMENT_ROOT"].'/php/PHPMailerAutoload.php');
	
	$mail = new PHPMailer;
	
//	$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'xbloq.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'laxmegatravel';//'sistemas3@megatravel.com.mx';                 // SMTP username
	$mail->Password = 'Vow*iREO9xO_';//'51k3+0@*A5tn';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                   // TCP port to connect to
	
	$mail->setFrom('lammxgs@gmail.com', 'Mailer');
	$direcc = '; ; ;';
	$correos = explode(';',$direcc);
    foreach ($correos as $diremail) { 
		$mail->addAddress($diremail);     // Add a recipient
    } 
//	$mail->addReplyTo('info@example.com', 'Information');
//	$mail->addCC('cc@example.com');
//	$mail->addBCC('bcc@example.com');
	
//	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
*/?>