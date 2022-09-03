<?php
include("api.php");
include("./files/ayar.php");
$use = new prime();
$hesapsor = mysqli_query($mysqli, "select * from hesaplar where Statu='0'");
if(mysqli_num_rows($hesapsor) > 0){
	$hesapal = mysqli_fetch_object($hesapsor);
	$fedai = $hesapal->kadi;
	$use->fedai = $fedai;
}else{
}
use Hasokeyk\Instagram\Instagram;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
$mail = new PHPMailer(true);
if(isset($_POST['ayar'])){
	$ayar = $_POST['ayar'];
	
	
	
	if($ayar == "hesapekle"){
		 

    require "../vendor/autoload.php";

    $username = $_POST['veri'];
    $password = $_POST['veri2'];

    $instagram = new Instagram($username,$password);
    $login = $instagram->login->login();
    if($login){
        echo 'Giriş Başarılı';
		
    }else{
        echo 'Login Fail';
    }

    //LOGIN CONTROL
    $login_control = $instagram->login->login_control();
    if($login_control){
        echo 'Test Başarılı';
    }else{
        echo 'Login False';
    }
	$dosya = fopen('../vendor/hasokeyk/instagram/src/cache/'.$username.'/session_id.json','r');
$x = fgets($dosya); 
$ses = json_decode($x);
fclose($dosya);
$dosya2 = fopen('../vendor/hasokeyk/instagram/src/cache/'.$username.'/mid.json','r');
$x2 = fgets($dosya2); 
$mid = json_decode($x2);
fclose($dosya2);
$dosya22 = fopen('../vendor/hasokeyk/instagram/src/cache/'.$username.'/mid.json','r');
$x22 = fgets($dosya22); 
$adid = json_decode($x22);
fclose($dosya22);
$sql = "insert into hesaplar(kadi, sifre, sesID, Adid, Mid) values ('".$username."','".$password."', '".$ses."', '".$adid."', '".$mid."')";
mysqli_query($mysqli, $sql);
	}
	
	else if($ayar == "mailtopla"){
		$fedai = $_POST['secilihesap'];
		$ilkhesap = $_POST['ilkhesap'];
		$mintakip = $_POST['mintakip'];
		$maxtakip = $_POST['maxtakip'];
		$tikayar = $_POST['tikayar'];
		$use->tik = $tikayar;
		$use->fedai = $fedai;
		$ayar2 = $_POST['ayar2'];
		if($ayar2 == "takipciden"){
			if($_SESSION['ilkhesap'] == "True"){
			$pk = $use->getpk($ilkhesap);
			$use->getFollowingList($pk, "mail");
			$_SESSION['ilkhesap'] = "False";
			}else{
				
				$sor = mysqli_query($mysqli, "select * from toplananhesaplar where Statu='0'");
				$ros = mysqli_fetch_object($sor);
				$pk = $ros->PK;
				if($_SESSION['sonpk'] == $pk){
					mysqli_query($mysqli, "DELETE FROM toplananhesaplar WHERE PK='".$pk."'");
				}else{
				$use->getFollowingList($pk, "mail");
				$use->userScan($pk, "mail", $mintakip, $maxtakip);
				$_SESSION['sonpk'] = $pk;
			}
			}
			
		}else if($ayar2 == "onerilenler"){
						if($_SESSION['ilkhesap'] == "True"){
			$pk = $use->getpk($ilkhesap);
			$use->getOneri($pk);
			$_SESSION['ilkhesap'] = "False";
			}else{
				
				$sor = mysqli_query($mysqli, "select * from toplananhesaplar where Statu='0'");
				$ros = mysqli_fetch_object($sor);
				$pk = $ros->PK;
				if($_SESSION['sonpk'] == $pk){
					mysqli_query($mysqli, "DELETE FROM toplananhesaplar WHERE PK='".$pk."'");
				}else{
				$use->getOneri($pk);
				$use->userScan($pk, "mail", $mintakip, $maxtakip);
				$_SESSION['sonpk'] = $pk;
			}
			}
		}else{
			echo "Belirlenemeyen toplama yöntemi (admin ile iletişime geçiniz.)...";
		}
		
	}
	
	else if($ayar == "gelismismailbas"){
		if($_POST['ayar2'] == "true"){
			//buraya link kısaltıp gönderem kodu yaz
		}else if($_POST['ayar3'] == "ok"){
			if($_SESSION['maila3'] >= $_POST['adet']){
				$malid = $_SESSION['usedmailid'];
				$sor = mysqli_query($mysqli, "select * from smtp where Statu='0' and ID!='".$malid."'");
			$aga = mysqli_fetch_object($sor);
			$_SESSION['usedmailid'] = $aga->ID;
			$_SESSION['maila3'] = "0";
			}else{
			$link = $_POST['link'];
			$taslak = $_POST['taslak'];
			$malid = $_SESSION['usedmailid'];
			$sor = mysqli_query($mysqli, "select * from smtp where ID='".$malid."'");
			$aga = mysqli_fetch_object($sor);
			$sorarim = mysqli_query($mysqli, "select * from toplananhesaplar where Statu='1' and Mail!=''");
			$kurban = mysqli_fetch_object($sorarim);
			$duzenli = $use->duzenle($link, '[suphi]', $kurban->Username);
			$duzenli2 = $use->duzenle($taslak, '[suphi]', $kurban->Username);
			$sontaslak = $use->duzenle($duzenli2, '[suphiLink]', $duzenli);
			try {
    //Server settings
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $aga->host;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $aga->email;                     //SMTP username
    $mail->Password   = $aga->sifre;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = $aga->port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($aga->email, $aga->kimden);
    $mail->addAddress($kurban->Mail);     //Add a recipient
    

    //Attachments
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $use->duzenle($aga->baslik, '[suphi]', $kurban->Username);
    $mail->Body    = $sontaslak;
  

    $mail->send();
    echo 'Mail Gönderildi..';
	$kpk = $kurban->PK;
	$sestengelenveri = intval($_SESSION['maila3']);
	$sesart = $sestengelenveri + 1;
	$_SESSION['maila3'] = $sesart;
	echo $_SESSION['maila3'];
	$sql = "update toplananhesaplar set Statu='2' where PK='".$kpk."'";
	mysqli_query($mysqli, $sql);
} catch (Exception $e) {
    echo "Mail Gönderilmedi. Mailer Error: {$mail->ErrorInfo}";
}
			
		}
		}
		else{
			$link = $_POST['link'];
			$taslak = $_POST['taslak'];
			$mailid = $_POST['fedai'];
			$sor = mysqli_query($mysqli, "select * from smtp where ID='".$fedai."'");
			$aga = mysqli_fetch_object($sor);
			$sorarim = mysqli_query($mysqli, "select * from toplananhesaplar where Statu='1' and Mail!=''");
			$kurban = mysqli_fetch_object($sorarim);
			$duzenli = $use->duzenle($link, '[suphi]', $kurban->Username);
			$duzenli2 = $use->duzenle($taslak, '[suphi]', $kurban->Username);
			$sontaslak = $use->duzenle($duzenli2, '[suphiLink]', $duzenli);
			try {
    //Server settings
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $aga->host;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $aga->email;                     //SMTP username
    $mail->Password   = $aga->sifre;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = $aga->port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($aga->email, $aga->kimden);
    $mail->addAddress($kurban->Mail);     //Add a recipient
    

    //Attachments
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $use->duzenle($aga->baslik, '[suphi]', $kurban->Username);
    $mail->Body    = $sontaslak;
  

    $mail->send();
    echo 'Mail Gönderildi..';
	$kpk = $kurban->PK;
	$sql = "update toplananhesaplar set Statu='2' where PK='".$kpk."'";
	mysqli_query($mysqli, $sql);
} catch (Exception $e) {
    echo "Mail Gönderilmedi. Mailer Error: {$mail->ErrorInfo}";
}
		}
	}
		
		
		else if($ayar == "dmbas"){
			
		}
		else if($ayar == "gelismisdmbas"){
			$hesapid = $_POST['hesapid'];
			if($_POST['ayar2'] == "true"){
								if($hesapid != '0'){
				$sorgu = mysqli_query($mysqli, "select * from hesaplar where ID='".$hesapid."'");
				$al = mysqli_fetch_object($sorgu);
				$instagram = new Instagram($al->kadi,$al->sifre);
				 $instagram->login->login();
				 $login = $instagram->login->login_control();
    if($login){
		if($_SESSION['ilkdm'] == "True"){
			$userdm = $instagram->user->get_my_inbox();
			$bakim = $use->dmduzenle($userdm);
			$_SESSION['ilkdm'] = "False";

		}else{
			$dmsor = mysqli_query($mysqli, "select * from dmlistesi where Statu='0'");
			$cedm = mysqli_fetch_object($dmsor);
        //INBOX SEND TEXT
        $user = $instagram->user->send_inbox_text($cedm->Username, $_POST['taslak']);
echo $cedm->Username." Mesaj gönderildi...";

$kwra = $cedm->Username;
mysqli_query($myqsli, "UPDATE dmlistesi SET Statu='2' WHERE Username='".$kwra."'");
		}
	}else{
		echo "nooo";
	}
				}else{
					echo "Lütfen başlangıç hesabı seçiniz...";
				}
			}
		
			
			
			else if($_POST['ayar3'] == "ok"){
				$hesapid = $_POST['hesapid'];
				if($hesapid != '0'){
					$ms = mysqli_query($mysqli, "select * from toplananhesaplar where Statu='1'");
					$sm = mysqli_fetch_object($ms);
					if($_SESSION['sonpk'] == $sm->PK){
					}else{
						
				$sorgu = mysqli_query($mysqli, "select * from hesaplar where Statu='0'");
				$al = mysqli_fetch_object($sorgu);
				if($_SESSION['usedaccid'] == $al->ID){
				}else{
				$instagram = new Instagram($al->kadi,$al->sifre);
				 $instagram->login->login();
				 $login = $instagram->login->login_control();
    if($login){

        //INBOX SEND TEXT
        $user = $instagram->user->send_inbox_text($sm->Username, $_POST['taslak']);
        echo "$sm->Username mesaj gönderildi<br/>";
		mysqli_query($mysqli, "update toplananhesaplar set Statu='2' where Username='".$sm->Username."'");
		$_SESSION['sonpk'] = $sm->PK;
	}else{
		echo $al->kadi." Hesabına giriş yapılamadı listeden çıkarıldı...";
		mysqli_query($mysli, "update hesaplar set Statu='1' where ID='".$al->ID."'");
	}
	$_SESSION['usedaccid'] = $al->ID;
					}
					$_SESSION['sonpk'] = $sm->PK;
					}
				}else{
					echo "Lütfen başlangıç hesabı seçiniz...";
				}
			}
		
		
		}
		else if($ayar == "mailekle"){
			
			$host = $_POST['host'];
			$port = $_POST['port'];
			$email = $_POST['email'];
			$who = $_POST['who'];
			$sub = $_POST['sub'];
			$sifre = $_POST['sifre'];
			$sql = "insert into smtp(host, port, email, sifre, kimden, baslik, Statu) values ('".$host."','".$port."', '".$email."', '".$sifre."', '".$who."', '".$sub."', '0')";
mysqli_query($mysqli, $sql);
echo "Başarılı..";
		}
		else if($ayar == "temizle"){
			$use->temizle();
			
		}else{
			echo "hatalı";
		}/*else{
				
				
			}
			$hesapid = $_POST['hesapid'];
			$hesapid = $_POST['link'];
			$hesapid = $_POST['taslak'];
			$hesapid = $_POST['adet'];
		}
		*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}else{
	echo "Yanlış İstek..";
}