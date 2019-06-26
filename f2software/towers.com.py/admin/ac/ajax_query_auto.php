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

    if( isset( $_REQUEST['identifier'] ) && $_REQUEST['identifier'] == "auto")
    {
	$sql = "SELECT automod_id, automod_codfipe, automod_modelo, automod_marca, automod_marcanome, automod_vlrfipe FROM tb_automod where locate('$q',automod_modelo) > 0 order by locate('$q',automod_modelo) limit 20";
	$r = mysql_query( $sql );
	if ( $r )
	{
	    echo '<ul>'."\n";
	    while( $l = mysql_fetch_array( $r ) )
	    {
		$p = strtoupper($l['automod_modelo']);
		$p = preg_replace('/(' . $q . ')/i', '<span style="font-weight:bold;">$1</span>', $p);
		echo "\t".'<li id="autocomplete_'.$l['automod_id'].'" rel="'.$l['automod_id'].'_' .$l['automod_codfipe'].'_'. utf8_encode(strtoupper($l['automod_modelo'])) .'_' .$l['automod_marca'].'_' . utf8_encode(strtoupper($l['automod_marcanome'])) .'_'. $l['automod_vlrfipe']. '">'. utf8_encode( $p ) .'</li>'."\n";
	    }
	    echo '</ul>';
	}
    }
   
}

?>