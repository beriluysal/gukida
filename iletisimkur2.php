<?php
		

		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $ad        =    $_POST["iletisim_ad"];
            $mail      =    $_POST["iletisim_email"];
            $mesaj     =    $_POST["iletisim_mesaj"];
            $ekle        =    $baglan->query("insert into iletisim (iletisim_ad,iletisim_email,iletisim_mesaj) values ('$ad','$mail','$mesaj')");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir

            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
        header("Location:iletisim2.php");



?>