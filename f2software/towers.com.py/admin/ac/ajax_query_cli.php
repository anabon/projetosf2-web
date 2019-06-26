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

    if( isset( $_REQUEST['identifier'] ) && $_REQUEST['identifier'] == "cliente")
    {
	$sql = "SELECT cli_id, cli_nome, cli_comissao FROM tb_cli where locate('$q',cli_nome) > 0 order by locate('$q',cli_nome) limit 20";
	$r = mysql_query( $sql );
	if ( $r )
	{
	    echo '<ul>'."\n";
	    while( $l = mysql_fetch_array( $r ) )
	    {
		$p = strtoupper($l['cli_nome']);
		$p = preg_replace('/(' . $q . ')/i', '<span style="font-weight:bold;">$1</span>', $p);
		echo "\t".'<li id="autocomplete_'.$l['cli_id'].'" rel="'.$l['cli_id'].'_' . utf8_encode(strtoupper($l['cli_nome'])) .'_' . $l['cli_comissao'] .'">'. utf8_encode( $p ) .'</li>'."\n";
	    }
	    echo '</ul>';
	}
    }
   
}

?>