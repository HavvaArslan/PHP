<?php
include("ayar.php");
if(isset($_SESSION["kullanici"]))
{

	
	
	
	$adres = $_POST["yeniadres"];
	$telefon = $_POST["telefon"];
	$lat = $_POST["lat"];
	

	if(@mysql_num_rows(@mysql_query("select * from hakkimizda"))>0)
	{

	$guncelle = @mysql_query("update hakkimizda set firma_ismi='$telefon' , yazi='$adres',imza='$lat' ");
	}
	else
	{
		
	$guncelle = @mysql_query("insert into hakkimizda(firma_ismi,yazi,imza) values ('$telefon' , '$adres','$lat')");
	}
	if($guncelle)
	{
		function sendMessage(){
			
		$content = array(
			"en" => ' Hakkımızda Sayfası Güncellenmiştir....'
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
		@header("location:home.php?sayfa=21");
	}
	else
	{
		@header("location:google.com");
	}
}
else
{
	@header("location:index.php");
}

?>