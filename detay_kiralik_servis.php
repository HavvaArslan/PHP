<?php
include("ayar.php");
$deger=$_GET['id'];
Class deneme{

	
	public $tur="";
	public $marka="";
	public $fiyat="";
	public $saat="";
	public $yil="";
	public $detay="";
	public $resimbir="";
	public $resimiki="";
	public $resimuc="";
	public $resimdort="";
	
	

}

$nesne=new deneme();
if($_GET['id']){

$bak=@mysql_query("select * from kiralik where id='$deger'");
$i=0;
$say=@mysql_num_rows($bak);
echo "[";
while($goster=@mysql_fetch_assoc($bak))
{
	$i=$i+1;
	$nesne->tur=$goster['tur'];
	$nesne->marka=$goster['marka'];
	$nesne->fiyat=$goster['fiyat'];
	$nesne->saat=$goster['saat'];	
	$nesne->yil=$goster['yil'];
	$nesne->detay=$goster['detay'];
	$nesne->resimbir=$goster['resimbir'];
	$nesne->resimiki=$goster['resimiki'];
	$nesne->resimuc=$goster['resimuc'];
	$nesne->resimdort=$goster['resimdort'];
	
	
	echo "". json_encode($nesne);
	if($i!=($say))
	{
	echo ",";
	}
}
echo "]";

}
?>