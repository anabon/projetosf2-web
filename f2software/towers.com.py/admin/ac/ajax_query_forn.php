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

    if( isset( $_REQUEST['identifier'] ) && $_REQUEST['identifier'] == "fornecedor")
    {
	$sql = "SELECT forn_id, forn_nome FROM tb_forn where forn_sitreg = 1 AND forn_sit = 'Ativo' AND locate('$q',forn_nome) > 0 order by locate('$q',forn_nome) limit 15";
	$r = mysql_query( $sql );
	if ( $r )
	{
	    echo '<ul>'."\n";
	    while( $l = mysql_fetch_array( $r ) )
	    {
		$p = strtoupper($l['forn_nome']);
		$p = preg_replace('/(' . $q . ')/i', '<span style="font-weight:bold;">$1</span>', $p);
		echo "\t".'<li id="autocomplete_'.$l['forn_id'].'" rel="'.$l['forn_id'].'_' . utf8_encode(strtoupper($l['forn_nome'])) . '">'. utf8_encode( $p ) .'</li>'."\n";
	    }
	    echo '</ul>';
	}
    }
   
}

?>