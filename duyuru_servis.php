<?php
include("ayar.php");

Class deneme{

	public $id="";
	public $baslik="";
	public $icerik="";
	public $resim="";
	
	

}

$nesne=new deneme();


$bak=@mysql_query("select * from duyurular order by id desc");
$i=0;
$say=@mysql_num_rows($bak);
echo "[";
while($goster=@mysql_fetch_assoc($bak))
{
	$i=$i+1;
	$nesne->id=$goster['id'];
	$nesne->baslik=$goster['duyuru_baslik'];
	$nesne->icerik=$goster['duyuru_icerik'];
	$nesne->resim=$goster['duyuru_resim'];	
	
	echo "". json_encode($nesne);
	if($i!=($say))
	{
	echo ",";
	}
}
echo "]";


?>