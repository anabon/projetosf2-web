<?php
echo $dadoUm = $_GET["id"];

$SQL = "SELECT * FROM $tabela_avaliacoes WHERE id_noticia='$dadoUm'";
$SSQL=mysql_query($SQL) or die (mysql_error());
$array_d = mysql_fetch_array($SSQL);
$avaliacao_total=round($array_d['ptos']/$array_d['num_votos'],2);

if(isset($_POST['valor'])){
   if(mysql_num_rows($SSQL)==0){
   mysql_query("INSERT INTO $tabela_avaliacoes VALUES('$dadoUm','1','".$_POST['valor']."')") or die ('ERRO AO INSERIR REGISTRO: '.mysql_error());
   }else{
   mysql_query("UPDATE $tabela_avaliacoes SET num_votos=num_votos+1,ptos=ptos+".$_POST['valor']." WHERE id_noticia='$dadoUm'") or die ('ERRO AO MODIFICAR REGISTRO: '.mysql_error());
   }

   header('Location:'.$_SERVER['REQUEST_URI']);
   exit;
}

echo '<br /><br /><strong>Avaliação Média : '.$avaliacao_total.'</strong>
<div style="background-color:#EFEFEF; width:50px">
<img src="" width="'.($avaliacao_total*5).'" height="6" style="background-color: #000099"></div>
<br />';

$numVotos = $array_d['num_votos'] == "" ? 0 : $array_d['num_votos'];

echo "Total de votos: $numVotos";

?>
<hr>
<form action="<?php $_SERVER['REQUEST_URI'];?>" method="post">
Nova avaliação:
<select name="valor" id="valor">
<?php
for ($i=1; $i<=10 ; $i++) echo '<option value="'.$i.'">'.$i.'</option>';
?>
</select>
<input type="submit" value="Votar por este artigo">
</form>

