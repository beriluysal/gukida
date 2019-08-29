<?php 
 
include("config.php");
ob_start();
session_start();
 
$giris_email = $_POST['giris_email'];
$giris_parola = $_POST['giris_sifre'];
 
 		if($giris_email == "" || $giris_parola=="" ){
 			echo '<p class="msg error" style="width:300px;"><b>Alanları boş geçemezsiniz!</b></p><br>'; }
 			else{
 		$query = $baglan->query("SELECT * FROM musteri WHERE m_email='$giris_email' and m_parola='$giris_parola'");
		if(mysqli_num_rows($query)=="0"){
			echo '<p class="msg error" style="width:300px;"><b>Girdiğiniz bilgiler hatalı!</b></p><br>'; }
			else{
		while ($row = mysqli_fetch_assoc($query)){

 		$m_email = $row['m_email'];
 		$m_parola = $row['m_parola'];
 
       if($giris_email==$m_email&&$giris_parola==$m_parola){

			$_SESSION['login']="true";
			$_SESSION['user']="$giris_email";
			$_SESSION['pass']="$giris_parola";
			header("Location:kullaniciarayuz.php");
			 
	
}else{

	echo '<p class="msg warning" style="width:300px;"><b>Kullanıcı Adı yada Şifre Hatalı!</b></p><br>';
	
 } } } } 


?>