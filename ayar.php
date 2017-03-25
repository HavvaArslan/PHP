<?php

@session_start();
@ob_start();


$host		=	"mysql.hostinger.web.tr";
$veritabani	=	"u586132393_veri";
$kullanici	=	"u586132393_taba";
$sifre		=	"2580123123";
$mysqlbaglan	=	@mysql_connect($host,$kullanici,$sifre,false,2) or die ("Mysql Baðlantý Hatasý...'");
$dbsec			=	@mysql_select_db($veritabani) or die ("Veritabaný Baðlatý Hatasý...!");
@mysql_query("SET NAMES 'latin5'");
@mysql_query("SET CHARACTER SET latin5");
@mysql_query("SET COLLATION_CONNECTION = 'latin5_tuekish_ci'");






?>