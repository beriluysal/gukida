<?php
		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){

            
            // Formdan Gelen Kayıtlar
            
            $ev_ad                =    $_POST['ev_ad'];
            $ev_fiyat             =    $_POST['ev_fiyat'];
            $ev_aciklama          =    $_POST['ev_aciklama'];
            $ev_buyukluk          =    $_POST['ev_buyukluk'];
            $ev_odasayisi         =    $_POST['ev_odasayisi'];
            $ev_banyo             =    $_POST['ev_banyo'];
            $ev_adres             =    $_POST['ev_adres'];
            $ev_il                =    $_POST['ev_il'];
            $ev_ilce              =    $_POST['ev_ilce'];
            $ev_no                =    $_POST['ev_no'];
            $result = $baglan->query("SELECT * FROM evler WHERE ev_no='$ev_no'");
            if($result -> num_rows > 0){
            $ekle        =    $baglan->query("update evler set ev_ad = '$ev_ad', ev_fiyat = '$ev_fiyat', ev_aciklama = '$ev_aciklama', ev_buyukluk = '$ev_buyukluk', ev_odasayisi = '$ev_odasayisi', ev_banyo= '$ev_banyo', ev_adres ='$ev_adres', ev_il = '$ev_il', ev_ilce = '$ev_ilce' where ev_no = '$ev_no'");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir

            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
        	else{
        		echo "Ev yok";
        	}
        }
        header("Location:ilangoruntule.php");





?>