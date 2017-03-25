<?php
include("ayar.php");

Class deneme{

	public $adres="";
	public $telefon="";
	public $lat="";
	public $log="";
	

}

$nesne=new deneme();


$bak=@mysql_query("select * from iletisim");
while($goster=@mysql_fetch_assoc($bak))
{
	$nesne->adres=$goster['adres'];
	$nesne->telefon=$goster['telefon'];
	$nesne->lat=$goster['lat'];
		$nesne->log=$goster['longitu'];
	
	echo "<br/>". json_encode($nesne);
}



?>