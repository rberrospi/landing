<?php 
	$nombre   = $_POST['nombre'];
	$email 	  = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['re-password'];

	if($nombre && $email && $password){

		// Create connection
		$conn = new mysqli("localhost", "solbasta_elputin", "soluciones123", "solbasta_landing");
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO users (nombres, email, password) VALUES ('".$nombre."', '".$email."', '".$password."')";

		if ($conn->query($sql) === TRUE) {
			sendMail($email, $nombre);
		    header('Location: succes.html');
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		   	header('Location: index.html');
		}
		$conn->close();
		
	}

	function sendMail($correo, $usuario){

		@$pfw_ip=$_SERVER['REMOTE_ADDR'];

		$to="berrospi@disolu.com";
		$subject='Informacion de nuestro registro:'.$usuario;
		$message='Nombres:'.$usuario."\n"
		.'E-mail:'.$correo."\n"	
		/*.'Mensaje: Registro Solbasta'."\n"*/
		.'IP del visitante:'.$pfw_ip."\n";

		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers="From: Solbasta Landing <cuentas@solbasta.com>\r\n".
		'X-Mailer:PHP/'.phpversion();
		$resultado=mail($to, $subject, $message, $headers);

		//Enviando auto respuesta.
		$pfw_header ="From: Solbasta Auctions\r\n";
		$pfw_header .= "Reply-To: cuentas@solbasta.com \r\n";
		$pfw_header .= "CC: cuentas@solbasta.com\r\n";
		$pfw_header .= "MIME-Version: 1.0\r\n";
		$pfw_header .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$pfw_subject="Bienvenid@ a Solbasta!";
		$pfw_email_to="$correo";
		
		if(
			$correo == 'l2oot.control@gmail.com' or 
			$correo == 'hpalacios@disolu.com' or 
			$correo == 'hpalacios@smartrix.pe' or
			$correo == 'rberrospi@smartrix.pe' or 
			$correo == 'cvereau@smartrix.pe' or 
			$correo == 'berrospi@disolu.com')
		{
			$body = '<h1>HIJO DE 3 MIL VAGONES DE PUTAS</h1><h4>Quisiera lamers tus teticas</h4><br><img src="http://www.mientrastantoenmexico.mx/wp-content/uploads/2016/11/screen-shot-2016-04-07-at-5-43-18-pm.jpeg">';
		} else {
			$body = '
				<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=OpenSans:400,700" rel="stylesheet" type="text/css">
	<style type="text/css">
		.linea2 {
			background:none; border-bottom: 8px solid #f4bb2e; height:8px; width:100%; margin:0px 0px 0px 0px;
			}
	</style>
</head>
<body>
	<div style="font-family: verdana; width: 75%; margin: 0 auto;">
		<div>
			<img src="https://solbasta.com/img/solbasta-logo.png" width="230" height="60" style="display: block;">
		</div>
		<br>
		<div>
			<img src="https://solbasta.com/img/bienvenidos.jpg" width="100%" style="margin: 0 auto; display: block;"> </div>
			<br>
			<div style="margin-top: 10px; line-height: 180%; text-align: center; color: black; font-size: 22px;">Bienvenid@ '.$usuario.'</div>
			<div style="display: block; width: 60px; background-color: #f4bb2e; height: 8px; margin: 10px auto;">				
			</div>
			<div style="text-align: justify; font-size: 16px; font-style: italic; font-weight: bold;">&#161;Ahora eres parte de nuestra red de subastas!</div>
			<div style="margin-top: 10px; color: black; font-size: 16px;">Una web de subastas al centavo que te har&aacute; ganar los mejores productos, desde tan s&oacute;lo un sol. Obteniendo lo que tanto quer&iacute;as a precios realmente incre&iacute;bles. &#161;Ah&oacute;ra tu moneda valdr&aacute; m&aacute;s!</div>
			<div style="margin-top: 15px; font-style: italic; font-weight: bold; font-size: 16px;">Mantente atento(a) a nuestras novedades y recuerda:</div><br /><br />
			<center style="color: #f4bb2e;font-size: 27px;font-weight: bold;font-style: italic;">&#161;Ganaste 2 solsazos!</center>
			<div style="margin-top: 10px auto; line-height: 180%; text-align: center; color: black; font-size: 15px;">para jugar gratis.</div>
			<div style="margin-top: 30px; line-height: 180%; text-align: center; color: #787a6b; font-size: 22px; font-weight: bold; font-style: italic;">Pronto lanzamiento</div>
			<center>
			<table border="0" width="250px" cellpadding="0" cellspacing="0">
				<tr style="background:none; border-bottom: 8px solid #f4bb2e; height:8px; width:100%; margin:0px 0px 0px 0px;"><td class="linea2" style="background:none; border-bottom: 8px solid #f4bb2e; height:8px; width:100%; margin:0px 0px 0px 0px;">&nbsp;</td>
				</tr>
				</tr>
			</table>
			</center>
			<div style="margin-top: 10px; line-height: 180%; text-align: center; color: #787a6b; font-size: 18px; font-weight: bold;">Con&oacute;cenos m&aacute;s en:</div>
			<div style="display: block; width: 25px; background-color: #f4bb2e; height: 4px; margin: 0 auto;"></div> 
			<div style="width: 227px; margin: 0 auto; display: block; padding-top: 16px; text-align: center;">
				<a href="https://www.facebook.com/SolbastaOficial/?fref=ts"><img style="height: 45px;margin-right: 10px;" src="https://solbasta.com/img/facebook.png"></a>
				<a href="https://twitter.com/Sol_Basta"><img style="height: 45px;margin-right: 10px;" src="https://solbasta.com/img/twitter.png"></a>
				<a href="https://www.instagram.com/solbasta/"><img style="height: 45px;" src="https://solbasta.com/img/instragram.png"></a>
			</div>
			<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr style="background:none; border-bottom: 1px solid #f4bb2e; height:1px; width:100%; margin:0px 0px 0px 0px;">
					<td class="linea2" style="background:none; border-bottom: 1px solid #f4bb2e; height:1px; width:100%; margin:0px 0px 0px 0px;">&nbsp;</td>
				</tr>
			</table> <br>
			<div style="font-size: 0.9em;">
				<div style="text-align: center"> Solbasta S.A.C. Est&aacute;s recibiendo este mensaje porque acabas de registrar tu correo en Solbasta.com</div>
			</div>
		</div>
	</body>
	</html>';
		}
		mail($pfw_email_to,$pfw_subject,$body,$pfw_header);
	}
?>