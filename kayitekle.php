<?php
		

		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $ad        =    $_POST["m_ad"];
            $soyad        =    $_POST["m_soyad"];
            $tel_no     =    $_POST["m_tel"];
            $adres        =    $_POST["m_adres"];
            $parola      =    $_POST["m_parola"];
            $dogum_tarih     =    $_POST["m_dtarih"];
            $email            =    $_POST["m_email"];
            $ekle        =    $baglan->query("insert into musteri (m_ad,m_soyad,m_adres,m_dtarih,m_email,m_parola,m_tel) values ('$ad','$soyad','$adres','$dogum_tarih','$email','$parola','$tel_no')");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir

            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
        header("Location:giris.php");



?>