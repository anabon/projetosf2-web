<?php
/**
 * @author Wellington Ribeiro
 * @version 1.0
 * @since 2010-02-09
 */

header('Content-type: text/html; charset=UTF-8');

$hostname = 'localhost';
$dbname = 'autocarro';
$username = 'root';
$password = '';

mysql_connect( $hostname, $username, $password ) or die ( 'Erro ao tentar conectar ao banco de dados.' );
mysql_select_db( $dbname );

if( isset( $_REQUEST['query'] ) && $_REQUEST['query'] != "" )
{
    $q = mysql_real_escape_string( $_REQUEST['query'] );

    if( isset( $_REQUEST['identifier'] ) && $_REQUEST['identifier'] == "endereco")
    {
	$sql = "SELECT * FROM tb_cep where locate('$q',cep_logradouro) > 0 order by locate('$q',cep_logradouro) limit 15";
	$r = mysql_query( $sql );
	if ( $r )
	{
	    echo '<ul>'."\n";
	    while( $l = mysql_fetch_array( $r ) )
	    {
		$p = strtoupper($l['cep_logradouro'].' - '.$l['cep_cidade']);
		$p = preg_replace('/(' . $q . ')/i', '<span style="font-weight:bold;">$1</span>', $p);
		echo "\t".'<li id="autocomplete_'.$l['cep_id'].'" rel="'.$l['cep_id'].'_' . $l['cep_num'] . '_' . utf8_encode(strtoupper($l['cep_bairro'])) . '_' . utf8_encode(strtoupper($l['cep_cidade'] )).'_' . strtoupper($l['cep_uf']) .'">'. utf8_encode( $p ) .'</li>'."\n";
	    }
	    echo '</ul>';
	}
    }
   
}

?>