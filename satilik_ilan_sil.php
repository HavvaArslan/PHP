<?php
if(isset($_SESSION["kullanici"]))
{
	$gelenid = $_GET["id"];
	$sil = @mysql_query("delete from satilik where id='$gelenid' ");
	if($sil)
	{
		@header("location:home.php?sayfa=13");
	}
}
else
{
	@header("location:index.php");
}


?>