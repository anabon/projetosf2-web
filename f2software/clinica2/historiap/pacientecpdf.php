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
		$this -> Cell(200,10,"HISTORIA CLINICA PEDIATRICA ",0,0,'C');
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
  
	
	$consulta=mysql_db_query('clinica', "select * from pacientep WHERE cod_alu='".$x1."'")or die("error"); 
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
		$nmadre = $Rs['nmadre'] ;
		$edadm = $Rs['edadm'] ;
		$profm = $Rs['profm'] ;
		$telm = $Rs['telm'] ;
		$npadre = $Rs['npadre'] ;
		$edadp = $Rs['edadp'] ;
		$profp = $Rs['profp'] ;
		$telp = $Rs['telp'] ;
		$fechac = $Rs['fechac'] ;
		$mc = $Rs['mc'] ;
		$ea = $Rs['ea'] ;
		$ant_p = $Rs['ant_p'] ;
		$ant_f = $Rs['ant_f'] ;
		$peso = $Rs['peso'] ;
		$pc = $Rs['pc'] ;
		$talla = $Rs['talla'] ;
		$diacno = $Rs['diacno'] ;
		$trat = $Rs['trat'] ;
		$imagen = $Rs['imagen'];
	
		
		
		$mipdf -> Ln (1);
		
		//$mipdf -> Image("../webcam/fotos/$imagen",10,43,30,"JPG");
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> Cell(50,6,"EXPEDIENTE CREADO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
			$mipdf -> SetTextColor(000,000,000); 
		$mipdf -> Cell(78,6,"$fechac ",1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(27,6,"N° HISTORIA : ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(15,6,"$cod_alu",1,10,'C');
		
	
		$mipdf -> Ln (5);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(26,6,"NOMBRE: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(50,6,"$p_nom ",1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(26,6,"APELLIDO : ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(68,6,"$p_ape ",1,0,'');
	
	
	
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(53,6,"LUGAR DE NACIMIENTO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(117,6,"$p_lugarn ",1,0,'');
		
		
		$mipdf -> Ln (6);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(41,6,"Fecha/Nacimiento: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(24,6,"$f_nacimiento ",1,0,'C');
			$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(15,6,"EDAD: ",1,0,'C');
		
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(50,6,utf8_decode("$p_edad"),1,0,''); 
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(20,6,"SEXO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(20,6,"$p_sex ",1,0,'C');
		
		
		
	    
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(31,6,"DIRECCION: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(139,6,utf8_decode("$direc"),1,0,'');
		
	
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(24,6,"MADRE: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(40,6,"$nmadre  ",1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(13,6,"EDAD:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(10,6,"$edadm",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(25,6,"PROFESION: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(32,6,utf8_decode("$profm"),1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(10,6,"TEL: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(16,6,"$telm ",1,0,'C');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(24,6,"PADRE: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(40,6,utf8_decode("$npadre"),1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(13,6,"EDAD:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(10,6,"$edadp",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(25,6,"PROFESION: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(32,6,utf8_decode("$profp"),1,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(10,6,"TEL: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(16,6,"$telp ",1,0,'');
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(19,6,"M:C:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(151,6,utf8_decode("$mc"),1,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(19,6,"E:A: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(151,6,utf8_decode("$ea"),1,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(43,6,"ANT. PERSONALES: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(127,6,utf8_decode("$ant_p"),1,0,'');
		
			$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(43,6,"ANT. FAMILIARES: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(127,6,utf8_decode("$ant_f"),1,0,'');
		
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(43,6,"EXAMEN FISICO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(13,6,"PESO:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(28,6,"$peso  ",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(20,6,"TALLA: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(28,6,"$talla ",1,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(10,6,"P.C:",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(28,6,utf8_decode("$pc"),1,0,'C');
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(35,6,"DIACNOSTICO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(135,6,utf8_decode("$diacno"),1,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(35,6,"TRATAMIENTO: ",1,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(135,6,utf8_decode("$trat"),1,0,'');
		
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

