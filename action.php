<?php 
	require_once 'vendor/autoload.php';
	use Endroid\QrCode\QrCode;
	use Respect\Validation\Validator as v;

	$dn = $_POST['dn'];
	$email = $_POST['email'];

	$vDn = v::date()->validate($dn);
	$vEmail = v::email()->validate($email);





	if (!$vDn) {
		echo "erro de validação de DN.";
		exit();
	}
	if (!$vEmail) {
		echo "erro de validação de Email.";
		exit();
	}

	$validacao = "Data de Nascimento:".$dn \n."
				Email: ".$email;

		$qrCode = new QrCode($validacao);

		header('Content-Type: ' .$qrCode->getContentType());

		echo $qrCode->writeString();




	// if ($vDn == true) {
	// 	echo "Data de Nascimento válida: ".$dn."<br>";
	// }else{
	// 	echo "Dn inválida";
	// }

	// if ($vEmail == true) {
	// 	echo "Email válido: ".$email."<br>";
	// }else{
	// 	echo "Email inválido";
	// }


		// $str = $_POST['string'];

		// use Endroid\QrCode\QrCode;

		// $qrCode = new QrCode($str);

		// header('Content-Type: ' .$qrCode->getContentType());

		// echo $qrCode->writeString();