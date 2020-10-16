<?php

	require_once('vendor/autoload.php');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	use setasign\Fpdi\Fpdi;

	function generateRequest($array) {
		$request = new Fpdi();

		$request->AddPage();
		$request->setSourceFile('imaging_template.pdf');
		$importedPage = $request->importPage(1);
		$request->useTemplate($importedPage, 1, 1, 210);

		$request->SetFont('Helvetica');
		$request->SetTextColor(0, 0, 0);

		$request->SetXY(125, 18);
		$request->Write(0, $array['id']);

		$request->SetXY(125, 24);
		$request->Write(0, $array['last_name']);

		$request->SetXY(125, 31);
		$request->Write(0, $array['first_name']);

		$request->SetXY(125, 45);
		$request->Write(0, $array['date_of_birth']);

		$request->SetXY(19, 55);
		$request->Write(0, $array['location']);

		$request->SetXY(20, 72);
		$request->Write(0, $array['imaging_requested']);

		$request->SetXY(20, 95);
		$request->Write(0, $array['reason_for_imaging']);

		$request->SetXY(20, 132);
		$request->Write(0, $array['clinical_details']);

		$request->SetXY(20, 222);
		$request->Write(0, "Josh Case");

		$request->SetXY(20, 232);
		$request->Write(0, "1234567A");

		$request->SetXY(74, 222);
		$request->Write(0, "Doctor");

		$request->SetXY(74, 232);
		$request->Write(0, "4321");

		$request->SetXY(168, 222);
		$request->Write(0, date('j/n/Y'));

		$filename = 'request.pdf';
		$request->output('f', $filename);

		return $filename;
	}

	function sendRequestEmail() {

	}

?>

