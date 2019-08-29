<?php
		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){

            
            // Formdan Gelen Kayıtlar
            $m_ad        =    $_POST['m_ad'];
            $m_soyad        =    $_POST['m_soyad'];
            $m_telno     =    $_POST['m_tel'];
            $m_adres        =    $_POST['m_adres'];
            $m_parola      =    $_POST['m_parola'];
            $m_dtarih     =    $_POST['m_dtarih'];
            $m_email            =       $_POST['m_email'];
            
            $result = $baglan->query("SELECT * FROM musteri WHERE m_email='$m_email'");
            if($result -> num_rows > 0){
            $ekle        =    $baglan->query("update musteri set m_ad = '$m_ad', m_soyad = '$m_soyad', m_adres = '$m_adres', m_dtarih = '$m_dtarih', m_parola = '$m_parola', m_tel= '$m_telno' where m_email = '$m_email'");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir

            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
        	else{
        		echo "kullanıcı yok";
        	}
        }
        header("Location:kb.php");





?>