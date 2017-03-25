<?php
if(isset($_SESSION["kullanici"]))
{
	$gelenid = $_GET["id"];
	$sil = @mysql_query("delete from slider where id='$gelenid' ");
	if($sil)
	{
		@header("location:home.php?sayfa=25");
	}
}
else
{
	@header("location:index.php");
}


?>