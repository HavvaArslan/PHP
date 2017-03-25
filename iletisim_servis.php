<?php
include("ayar.php");

Class deneme{

	public $adres="";
	public $telefon="";
	public $latitute="";
	public $longitute="";
	

}

$nesne=new deneme();
echo "[";

$bak=@mysql_query("select * from iletisim");
while($goster=@mysql_fetch_assoc($bak))
{
	$nesne->adres=$goster['adres'];
	$nesne->telefon=$goster['telefon'];
	$nesne->latitute=$goster['lat'];
	$nesne->longitute=$goster['longitu'];
	
	echo "". json_encode($nesne);
}

echo "]";

?>