<?php
@include("ayar.php");

if(isset($_SESSION["kullanici"]))
{
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
	
	
	$ekle = @mysql_query("INSERT INTO satilik(baslik,tur,fiyat,marka,yil,saat,detay,resimbir,resimiki,resimuc,resimdort) values ('$baslik' ,'$tur ' , '$fiyat ' , '$marka' ,'$yil' ,'$saat' , '$detay','$yeniresimadi', '$yeniresimadiiki','$yeniresimadiuc','$yeniresimadidort')");
	if($ekle)
	{
		
		function sendMessage(){
			$bak = @mysql_fetch_assoc(@mysql_query("select * from satilik order by id desc LIMIT 1"));
			$baslik = $bak["baslik"];
		$content = array(
			"en" => ''.$baslik.'  başlıklı ilanımız SATILIK İLANLAR kısmına eklenmiştir...'
			);
		
		$fields = array(
			'app_id' => "c3798eb4-5274-4e1b-80b1-d005a4639746",
			'included_segments' => array('All'),
      'data' => array("foo" => "bar"),
			'contents' => $content
		);
		
		$fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic MjdlNjQ5MTYtNTlkMS00NDdkLWFlZjctNDZiZWNjN2E0NmE0'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}
	
	$response = sendMessage();
	$return["allresponses"] = $response;
	$return = json_encode( $return);
	
  print("\n\nJSON received:\n");
	print($return);
  print("\n");
		@header("location:home.php?sayfa=13");
	}
	else
	{
		
	}
	
	
	
}
else
{
	@header("location:index.php");
}
?>