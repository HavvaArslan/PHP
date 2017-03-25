<?php
include("ayar.php");
if(empty($_SESSION["kullanici"]))
{
	
$mail = @trim(@strip_tags(@addslashes($_POST["mailadresi"])));
$sifre = @trim(@strip_tags(@addslashes($_POST["sifre"])));


		$kontrolet=@mysql_query("SELECT * from giris WHERE mail='$mail' and sifre='$sifre' LIMIT 1");
		$sayi = @mysql_num_rows($kontrolet);
		echo $sayi;
		if($sayi<1)
		{
			@header("location:index.php");
			
		}
		else
		{
			$_SESSION["kullanici"]=$mail;
			@header("location:home.php");
			
		}
}
else
{
	@header("location:home.php");
}
?>