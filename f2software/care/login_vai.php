<?php

session_start();
$_SESSION['login'] = $_GET['login'];

  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $aprovacao = 'aprovado';

  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('care');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM empresa WHERE cpf = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
          die();
        }else{
          #setcookie("login",$login);
          //Gravando valores dentro da sessão aberta:
      
       $_SESSION['ID_empresa'] = $id_empresa;
       #$_SESSION['nome_login'] = 'yure_pereira';
          
          header("Location:inicial.php");
        }
    }
?>