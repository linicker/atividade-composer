<?php 
	require_once 'vendor/autoload.php';

		$str = $_POST['string'];

		use Endroid\QrCode\QrCode;

		$qrCode = new QrCode($str);

		header('Content-Type: ' .$qrCode->getContentType());

		echo $qrCode->writeString();