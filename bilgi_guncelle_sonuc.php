<?php
if(isset($_SESSION["kullanici"]))
{
	$mail = $_POST["mail"];
	$sifre = $_POST["sifre"];
	if(@mysql_num_rows(@mysql_query("select * from giris "))>0)
	{
	$guncelle = @mysql_query("update giris set mail='$mail' , sifre='$sifre'  ");
	}
	else 
	{
		$guncelle = @mysql_query("insert into giris(mail,sifre) values ('$mail','$sifre') ");
	}
	if($guncelle)
	{
		
		@header("location:home.php?sayfa=7");
	}
}
else
{
	@header("location:index.php");
}

?>

