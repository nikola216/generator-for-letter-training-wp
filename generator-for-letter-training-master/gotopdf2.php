<?php
require_once(__DIR__ .'/gridphp.php');

$pdf=new PDF_Grid();
	
	/*
	//������������� �������� ��������� �������
	*/
	
	$pdf->inclined = true;		//�������� ��������� �����
	$pdf->SetMargins(5,5,25);	//������������� �������
	$pdf->grid = 18;			//������������� ����� ����� ���������� ������ ������� ����� �����������
	$pdf->AddPage();
	
	
	/*
	//������������� ��������� ���������� ����(����������� ������)
	*/

	switch ($_POST['type_letter_propisi']) {
    case 0:		//����� ����������												
		$pdf->AddFont('LearningCurve-Bold','','learning_curve_bold_ot_tt.php');
		$pdf->SetFont('LearningCurve-Bold','',36);
		$pdf->SetTextColor(140,140,140);
		break;
	case 1:		//���������� ����������														
		$pdf->AddFont('LearningCurve-dashed','','learning_curve_dashed_ot_tt.php');
		$pdf->SetFont('LearningCurve-dashed','',36);
		$pdf->SetTextColor(0,0,0);
		break;
	default:
		$pdf->Write(18,"���, ������ ��� ������ ���������� ����");
		break;
	}
	$text_propisi = mb_convert_encoding($_POST['data1'], "cp1252");
	$pdf->Write(18,"$text_propisi");		//����� ������ � ���� �������


$pdf->Output();

?>