<?php
include("ayar.php");

Class deneme{

	public $sirket_ismi="";
	public $yazi="";
	public $imza="";
	
	

}

$nesne=new deneme();


$bak=@mysql_query("select * from hakkimizda");
echo "[";
while($goster=@mysql_fetch_assoc($bak))
{
	$nesne->sirket_ismi=$goster['firma_ismi'];
	$nesne->yazi=$goster['yazi'];
	$nesne->imza=$goster['imza'];
	
	
	echo "". json_encode($nesne);
}
echo "]";


?>