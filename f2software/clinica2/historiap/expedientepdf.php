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
		
		
		
		
		$mipdf -> Ln (1);
	
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> Cell(50,5,"EXPEDIENTE CREADO: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
			$mipdf -> SetTextColor(000,000,000); 
		$mipdf -> Cell(80,5,"$fechac ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(25,5,"N° HISTORIA : ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(15,5,"$cod_alu ",0,0,'');
		
	
		$mipdf -> Ln (5);
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(26,10,"NOMBRE: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(60,10,"$p_nom ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(50,10,"APELLIDO : ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(0,10,"$p_ape ",0,0,'');
	
	
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(53,10,"LUGAR DE NACIMIENTO: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(60,10,"$p_lugarn ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(40,10,"FECHA DE NACIMIENTO: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(60,10,"$f_nacimiento ",0,0,'');
		
	    
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(31,10,"DIRECCION: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(80,10,"$direc ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(10,10,"SEXO: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(20,10,"$p_sex ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(10,10,"EDAD: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(30,10,"$edadp ",0,0,'');
		
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(24,10,"MADRE: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(40,10,"$nmadre  ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(10,10,"EDAD: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(15,10,"$edadm  ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150); 
		$mipdf -> Cell(20,10,"PROFESION: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(32,10,"$profm ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(10,10,"TEL: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(30,10,"$telm ",0,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(24,10,"PADRE: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(40,10,"$npadre ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(10,10,"EDAD: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(15,10,"$edadp  ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(20,10,"PROFESION: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(32,10,"$profp ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(10,10,"TEL: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(30,10,"$telp ",0,0,'');
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(19,10,"M:C: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(0,10,"$mc",0,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(18,10,"E:A: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(0,10,"$ea",0,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(46,10,"ANT. PERSONALES: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(0,11,"$ant_p",0,0,'');
		
			$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(43,10,"ANT. FAMILIARES: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(0,10,"$ant_f",0,0,'');
		
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(41,10,"EXAMEN FISICO: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(10,10,"PESO: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(15,10,"$peso  ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(20,10,"TALLA: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(32,10,"$talla ",0,0,'');
		$mipdf -> Setfont('Arial','B',10);
		$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(10,10,"P.C: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(30,10,"$pc",0,0,'');
	
	$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(38,10,"DIACNOSTICO: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(0,10,"$diacno",0,0,'');
		
		$mipdf -> Ln (6);
			$mipdf -> Setfont('Arial','B',10);
			$mipdf -> SetTextColor(0, 0, 150);
		$mipdf -> Cell(39,10,"TRATAMIENTO: ",0,0,'C');
		$mipdf -> Setfont('Arial','B',8);
		$mipdf -> SetTextColor(000,000,000);
		$mipdf -> Cell(0,10,"$trat",0,0,'');
		
		$mipdf -> Ln(10);
		$mipdf -> cell(178,5,"fecha : $fecha" , 0 , 10, true);
		$mipdf -> cell(178,1,"hora : $hora" , 0 , 10, true);


$cabeceraT = array("FECHA","DIACNOSTICO","EVOLUCIONES");
		
		
		
		$mipdf -> addPage();
		for ($i = 0; $i < count($cabeceraT); $i++)
		{
			$mipdf -> SetFont('courier','B', 7);
			$mipdf -> SetFillColor(20,125,255); 
			$mipdf -> Cell ( 60, 5 , $cabeceraT[$i],0,0,'C',true);
			}
			$mipdf -> Ln(10);
			$x1=$_GET['codigo'];
			
$query_movimiento = ("SELECT * FROM pacientep WHERE  cod_alu = '".$x1."' ");
$movimiento = mysql_query($query_movimiento) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_movimiento = mysql_fetch_assoc($movimiento);
$totalRows_movimiento = mysql_num_rows($movimiento);

$query_des = ("SELECT * FROM evolucion WHERE  cod_alu = '".$x1."' ORDER BY fecha ASC" );
$des = mysql_query($query_des) or die ( "Error en query: $sql, el error  es: " . mysql_error() );//(mysql_error());
$row_des = mysql_fetch_assoc($des);

while ( $row_des = mysql_fetch_array ($des))
	{
		
		$codigo = $row_des ['fecha'];
		
		$nombre = $row_des['diacno'];
		$apellido = $row_des ['trat'];
		
		
		
		$mipdf -> SetFillColor (1000,1000,255);
		$mipdf -> cell(35,5,$codigo , 0 , 0, 'R', true);
		$mipdf -> cell(110,5,$nombre , 0 , 0 ,'C', true);
		$mipdf -> cell(10,5,$apellido , 0 , 0 ,'C', true);
	
		
	
		$mipdf -> Ln(5);
		}
		
	 
	 

    
    



	
	
		
		
		$mipdf -> Ln(10);
		$mipdf -> cell(178,5,"fecha : $fecha" , 0 , 10, true);
		$mipdf -> cell(178,1,"hora : $hora" , 0 , 10, true);
		
		
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