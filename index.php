<?php
require ("classes/Url.php");  
$modulo = Url::getURL( 0 );

	if( $modulo == null )
		$modulo = "modulo1";
		if( file_exists( "modulos/" . $modulo . ".php" ) )
		{
			require "modulos/" . $modulo . ".php";
		}
		
		else
		{
			require "modulos/home.php";
		}

?>  






