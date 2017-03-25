<?php
include("ayar.php");
if(isset($_SESSION["kullanici"]))
{
	@session_destroy();
	@header("refresh:1;url=index.php");
	echo "1 saniye sonra çıkış işleminiz başarıyla gerçekleşecektir... ";
	
}
else
{
	@header("refresh:5;url=index.php");
}


?>