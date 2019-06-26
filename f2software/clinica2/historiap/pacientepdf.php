<?   
session_start();   
if(!isset($_SESSION['admin']))header("location: principal.php");  

?>
<?php

include"../fpdf/fpdf.php";
require '../conexion2.php'; 

date_default_timezone_set('America/caracas');
$hora = date('H:i:s a');
$fecha = date('d-m-Y ');

class MiPDF extends FPDF {
	
	public function Header (){
		
		$this -> Setfont('Arial','B',10);
		$this -> Cell(190,10,"Centro medico Quirurgico Medic-Global",0,0,'C');
		$this -> Ln (5);
		$this -> Setfont('Arial','B',6);
		$this -> Cell(190,10,"RIF.J-30661965-8",0,0,'C');
		
		$this -> Ln (20);
		$this -> Setfont('Arial','B',10);
		$this -> Cell(190,10,"Historia Clinica Pediatrica",0,0,'C');
		$this -> Ln (10);
		
		}
	
	
	
	}
	$cabeceraT = array("codigo","Nombre","Apellido");
		
		
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
	$consulta=mysql_db_query('clinica', 'select * from pacientep')or die("error"); 
	while ( $datos = mysql_fetch_array ($consulta))
	{
		
		$codigo = $datos ['cod_alu'];
		
		$nombre = $datos ['p_nom'];
		$apellido = $datos ['p_ape'];
		
		
		
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
	
	

?>

