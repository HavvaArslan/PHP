<?php
@include("ayar.php");

if(isset($_SESSION["kullanici"]))
{
	$id = @$_GET["id"];
	$baslik   = $_POST["baslik"];
	$tur   = $_POST["tur"];
	$fiyat   = $_POST["fiyat"];
	$marka   = $_POST["marka"];
	$yil   = $_POST["yil"];
	$saat   = $_POST["saat"];
	$detay   = $_POST["detay"];
	$dosyayolu = "urunresimleri/";
	
	
	$gelenresimadi = @$_FILES["resim1"]["name"];
	$gelenresimturu = @$_FILES["resim1"]["type"];
	$gelenresimdizini = @$_FILES["resim1"]["tmp_name"];
	
	$gelenresimadiiki = @$_FILES["resim2"]["name"];
	$gelenresimturuiki = @$_FILES["resim2"]["type"];
	$gelenresimdiziniiki = @$_FILES["resim2"]["tmp_name"];
	
	
	$gelenresimadiuc = @$_FILES["resim3"]["name"];
	$gelenresimturuuc = @$_FILES["resim3"]["type"];
	$gelenresimdiziniuc = @$_FILES["resim3"]["tmp_name"];
	
	$gelenresimadidort = @$_FILES["resim4"]["name"];
	$gelenresimturudort = @$_FILES["resim4"]["type"];
	$gelenresimdizinidort = @$_FILES["resim4"]["tmp_name"];
	

		$resimuzantisi = @substr($gelenresimadi,-4);
		$resimisimlendir = @substr(@md5(@uniqid(@rand())),0,20);
		$yeniresimadi = @$resimisimlendir.$resimuzantisi;
		$resimyukle = @move_uploaded_file($gelenresimdizini,$dosyayolu.$yeniresimadi);
		
		if($gelenresimadiiki != "")
		{
		$resimuzantisiiki = @substr($gelenresimadiiki,-4);
		$resimisimlendiriki = @substr(@md5(@uniqid(@rand())),0,20);
		$yeniresimadiiki = @$resimisimlendiriki.$resimuzantisiiki;
		$resimyukleiki = @move_uploaded_file($gelenresimdiziniiki,$dosyayolu.$yeniresimadiiki);
		}
		if($gelenresimadiuc != "")
		{
		$resimuzantisiuc = @substr($gelenresimadiuc,-4);
		$resimisimlendiruc = @substr(@md5(@uniqid(@rand())),0,20);
		$yeniresimadiuc = @$resimisimlendiruc.$resimuzantisiuc;
		$resimyukleuc = @move_uploaded_file($gelenresimdiziniuc,$dosyayolu.$yeniresimadiuc);
		}
		if($gelenresimadidort != "")
		{
		$resimuzantisidort = @substr($gelenresimadidort,-4);
		$resimisimlendirdort = @substr(@md5(@uniqid(@rand())),0,20);
		$yeniresimadidort = @$resimisimlendirdort.$resimuzantisidort;
		$resimyukledort = @move_uploaded_file($gelenresimdizinidort,$dosyayolu.$yeniresimadidort);
		}
	
	
	$guncelle = @mysql_query("update  satilik set baslik='$baslik',tur='$tur',fiyat='$fiyat',marka='$marka',yil='$yil',saat='$saat',detay='$detay',resimbir='$yeniresimadi',resimiki='$yeniresimadiiki',resimuc='$yeniresimadiuc',resimdort='$yeniresimadidort' where id='$id' ");
	if($guncelle)
	{
		@header("location:home.php?sayfa=13");
	}
	else
	{
		//@header("location:indexx.php");
		
	}
	
	
	
}
else
{
	@header("location:index.php");
}
?>