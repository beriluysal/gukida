<?php 
 
include("config.php");
ob_start();
session_start();
 
$admin_id = $_POST['admin_id'];
$admin_sifre = $_POST['admin_sifre'];
 
 		if($admin_id == "" || $admin_sifre=="" ){
 			echo '<p class="msg error" style="width:300px;"><b>Alanları boş geçemezsiniz!</b></p><br>'; }
 			else{
 		$query = $baglan->query("SELECT * FROM admin WHERE admin_id='$admin_id' and admin_sifre='$admin_sifre'");
		if(mysqli_num_rows($query)=="0"){
			echo '<p class="msg error" style="width:300px;"><b>Girdiğiniz bilgiler hatalı!</b></p><br>'; }
			else{
		while ($row = mysqli_fetch_assoc($query)){

 		$admin_idd = $row['admin_id'];
 		$admin_parola = $row['admin_sifre'];
 
       if($admin_idd==$admin_id&&$admin_sifre==$admin_parola){

			$_SESSION['admin']="true";
			$_SESSION['id']="$admin_id";
			$_SESSION['password']="$admin_sifre";
			header("Location:adminarayuz.php");
			 
	
}else{

	echo '<p class="msg warning" style="width:300px;"><b>Kullanıcı Adı yada Şifre Hatalı!</b></p><br>';
	
 } } } } 