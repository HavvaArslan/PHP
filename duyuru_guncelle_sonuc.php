<?php
if(isset($_SESSION["kullanici"]))
{
	$gelenid = $_GET["id"];
	$baslik = $_POST["duyuru_baslik"];
	$icerik = $_POST["duyuru_icerigi"];
	$guncelle = @mysql_query("update  duyurular set duyuru_baslik='$baslik' , duyuru_icerik='$icerik'  where id='$gelenid' ");
	if($guncelle)
	{
		@header("location:home.php?sayfa=3");
	}
}
else
{
	@header("location:index.php");
}


?>