<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  

?>
<?php

include"../fpdf/fpdf.php";
require '../conectar.php'; 

date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');





class MiPDF extends FPDF {
	
	public function Header (){
		$this -> Image("../images/f.png",10,10,30,20);
		$this -> Setfont('Arial','B',10);
		$this -> Cell(200,10,"Centro medico Quirurgico Medic-Global",0,0,'C');
		$this -> Ln (5);
		$this -> Setfont('Arial','B',6);
		$this -> Cell(200,10,"RIF.J-30661965-8",0,0,'C');
		
		$this -> Ln (20);
		$this -> Setfont('Arial','B',10);
		$this -> Cell(200,10,"HOSPITALIZACION CIRUGIAS Y MATERNIDAD",0,0,'C');
		$this -> Ln (10);
		
		}
	
	
	
	}
	
		
		
		$mipdf = new MiPDF();
		$mipdf -> addPage();
		for ($i = 0; $i < count($cabeceraT); $i++)
		{
			$mipdf -> SetFont('courier','B', 7);
			$mipdf -> SetFillColor(20,125,255); 
			$mipdf -> Cell ( 60, 5 , $cabeceraT[$i],0,0,'C',true);
			}
			
			
	
	$mipdf -> Ln(10);
	$conexion=mysql_connect('localhost','root','1234'); 
	$x1=$_GET['codigo'];
  
	
	$consulta=mysql_db_query('clinica', "select * from pabellonp WHERE cod_alu='".$x1."'")or die("error"); 
	while ( $Rs = mysql_fetch_array ($consulta))

	{
	
		
		$cod_alu = $Rs['cod_alu'] ;
		$p_nom = $Rs['p_nom'] ;
		$p_ape = $Rs['p_ape'] ;
		$p_lugarn = $Rs['p_lugarn'] ;
		$f_nacimiento = $Rs['f_nacimiento'] ;
		$direc = $Rs['direc'] ;
		$p_sex = $Rs['p_sex'] ;
		$p_edad = $Rs['p_edad'] ;
		
		$servicio = $Rs['servicio'] ;
		$direc2 = $Rs['direc2'] ;
		$parentesco = $Rs['parentesco'] ;
		$ant_p = $Rs['ant_p'] ;
		$avisara = $Rs['avisara'] ;
		$direc = $Rs['direc_actual'] ;
		$e_civil = $Rs['e_civil'] ;
		$nacionalidad = $Rs['nacio'] ;
		$diacno = $Rs['diacno'] ;
		$l_nacimiento = $Rs['l_nacimiento'] ;
		$ocupacion = $Rs['ocupacion'];
	
	$f_ingreso = $Rs['f_ingreso'] ;
		$hora = $Rs['hora'] ;
		$f_admi_ante = $Rs['f_admi_ante'] ;
		$m_consul = $Rs['m_consul'] ;
		$e_actual = $Rs['e_actual'] ;
		$edadp = $Rs['edadp'] ;
		$profp = $Rs['profp'] ;
		$telp = $Rs['telp'] ;
		$diacno_p = $Rs['diacno_p'] ;
		$diac_p_f = $Rs['diac_p_f'] ;
		$d_anatomo = $Rs['d_anatomo'] ;
		$d_asoc = $Rs['d_asoc'] ;
		$agre_c = $Rs['agre_c'] ;
		$inter_p = $Rs['inter_p'] ;
		$inter_s = $Rs['inter_s'] ;
		$mipdf -> Ln (1);
		
		//$mipdf -> Image("../webcam/fotos/$imagen",10,43,30,"JPG");
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> Cell(65,6,"SERVICIO : ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
			$mipdf -> SetTextColor(000,000,000); 
		$mipdf -> Cell(78,6,"$servicio",1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(27,6,"N HISTORIA : ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(15,6,"$cod_alu",1,1,'C');
		
	$mipdf -> Ln (5);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(185,6,"DATOS DEL PACIENTE: ",1,0,'C');
		$mipdf -> Ln (6);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(26,6,"APELLIDO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(65,6,"$p_ape ",1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(26,6,"NOMBRE: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(68,6,"$p_nom",1,0,'');
	
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(20,6,"SEXO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(10,6,"$p_sex ",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(15,6,"EDAD: ",1,0,'C');
		
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(10,6,utf8_decode("$p_edad"),1,0,'C'); 
	$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(20,6,"Edo.Civil:",1,0,'');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(30,6,"$e_civil",1,0,'');
		
		$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(28,6,"OCUPACION:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(52,6,"$ocupacion",1,0,'');
	
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(48,6,"LUGAR DE NACIMIENTO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(40,6,"$l_nacimiento",1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(25,6,"F/Nacimiento:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(20,6,"$f_nacimiento ",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(41,6,"NACIONALIDAD: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(11,6,"$nacionalidad",1,0,'C');
			
			
		 
	    
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(65,6,"DIRECCION ACTUAL COMPLETA: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(120,6,utf8_decode("$direc"),1,0,'');
		
	
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(73,6,"AVISAR EN CASO DE EMERGENCIA A: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(55,6,"$avisara",1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(35,6,"PARENTESCO:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(22,6,"$parentesco",1,0,'C');
			$mipdf -> Ln (6);
		
		
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(25,6,"DIRECCION:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(160,6,utf8_decode("$direc2"),1,0,'');
		$mipdf -> Ln (6);
		
		
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(45,6,"FECHA DE INGRESO:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(20,6,"$f_ingreso ",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(15,6,"HORA:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(25,6,"$hora ",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(60,6,"FECHA DE ADMISION ANTERIOR:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(20,6,"$f_admi_ante",1,0,'C');
		
		$mipdf -> Ln (6);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(185,6,"MOTIVO DE LA CONSULTA: ",1,0,'C');
		
		$mipdf -> Ln (6);
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000, 000,000); 
		$mipdf -> Cell(185,6,"$m_consul ",1,0,'');
		$mipdf -> Ln (6);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(185,6,"ENFERMEDAD ACTUAL:",1,0,'C');
		
		$mipdf -> Ln (6);
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000, 000, 000); 
		$mipdf -> Cell(185,6,"$e_actual",1,0,'');
			$mipdf -> Ln (6);
			
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000, 000, 000); 
		$mipdf -> Cell(185,6,"",1,0,'');
		$mipdf -> Ln (6);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(60,6,"DIACNOSTICO PROVICIONAL: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(125,6,utf8_decode("$diacno_p"),1,0,'');
		
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(45,6,"EGRESO CURACION:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(140,6,utf8_decode("$agre_c"),1,0,'');
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(65,6,"DIACNOSTICO PRINCIPIO FINAL:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(120,6,utf8_decode("$diac_p_f"),1,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(78,6,"DIACNOSTICO ANATOMOPATOLOGICO:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(107,6,utf8_decode("$d_anatomo"),1,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(55,6,"DIACNOSTICO ASOCIADO:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(130,6,utf8_decode("$d_asoc"),1,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(58,6,"INTERVENCION PRINCIPAL: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(127,6,utf8_decode("$inter_p"),1,0,'');
		
			$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(63,6,"INTERVENCION SECUNDARIA:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(122,6,utf8_decode("$inter_s"),1,0,'');
		
			
	
		$mipdf -> Ln (8);
			$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(60,6,"FECHA DE EGRESO:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(60,6,"HORA",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(65,6,"FIRMA DEL MEDICO TRATANTE:",1,0,'C');
		
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(60,10,"",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(60,10,utf8_decode(""),1,0,'');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(65,10,utf8_decode(""),1,0,'');
		
		$mipdf -> Ln (10);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(92,6,"FIRMA DEL JEFE DE SERVICIO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0,0,150);
		$mipdf -> Cell(93,6,utf8_decode("FIRMA DEL CIRUJANO"),1,0,'C');
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(92,10,"",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0,0,150);
		$mipdf -> Cell(93,10,utf8_decode(""),1,0,'C');

		
		$mipdf -> Ln(10);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> cell(170,6,"fecha : $fecha" , 0 , 10, true);
		$mipdf -> cell(170,6,"hora : $hora" , 0 , 10, true);
		
		
		$mipdf -> Output();
		class PDF extends FPDF
{
function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}
	
	
	   
	}

?>

