<?php 
include("ayar.php");
if(isset($_SESSION["kullanici"]))
{
	
	$dosyayolu = "urunresimleri/";
	$duyuru_baslik  = $_POST["duyuru_baslik"];

	
	$gelenresimadi = @$_FILES["resim"]["name"];
	$gelenresimturu = @$_FILES["resim"]["type"];
	$gelenresimdizini = @$_FILES["resim"]["tmp_name"];
	
	
	

		$resimuzantisi = @substr($gelenresimadi,-4);
		$resimisimlendir = @substr(@md5(@uniqid(@rand())),0,20);
		$yeniresimadi = $resimisimlendir.$resimuzantisi;
		$resimyukle = @move_uploaded_file($gelenresimdizini,$dosyayolu.$yeniresimadi);
		if($resimyukle)
		{
			$kaydet = @mysql_query("insert into slider(baslik,resim) values ('$duyuru_baslik','$yeniresimadi')");	
			if($kaydet)
			{function sendMessage(){
					$bak = @mysql_fetch_assoc(@mysql_query("select * from  slider order by id desc LIMIT 1 "));
					$baslik = $bak["baslik"];
		$content = array(
			"en" => ''.$baslik.' isimli slider eklenmiştir.'
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
	
				@header("location:home.php?sayfa=25");
			}
			else
				{
					
				}
		}
	
		
		
		
		
		
	
	
	
	
	
	
}
else
{
	@header("location:index.php");
}
?>
