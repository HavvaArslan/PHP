<?php
if(isset($_SESSION["kullanici"]))
{
	$gelenid = $_GET["id"];
	$sil = @mysql_query("delete from duyurular where id='$gelenid' ");
	if($sil)
	{
		@header("location:home.php?sayfa=3");
	}
}
else
{
	@header("location:index.php");
}


?>