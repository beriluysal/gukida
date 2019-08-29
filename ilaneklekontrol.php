<?php
		

		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $ev_ad        =    $_POST["evadi"];
            $ev_fiyat        =    $_POST["evfiyat"];
            $ev_aciklama     =    $_POST["evaciklama"];
            $ev_buyukluk        =    $_POST["evbuyukluk"];
            $ev_odasayisi      =    $_POST["evodasayisi"];
            $ev_banyo        =    $_POST["evbanyo"];
            $ev_il        =    $_POST["evil"];
            $ev_ilce        =    $_POST["evilce"];
            $ev_onay       =   0;
            $m_no          =     $_POST["musteri_no"];
            $ev_havuz      =    $_POST["evhavuz"];
            if(isset($_POST['submit'])){
            $selected_val = $_POST['Color'];  // Storing Selected Value In Variable
            echo "You have selected :" .$selected_val;  // Displaying Selected Value
            }
            $ekle        =    $baglan->query("insert into evler(ev_aciklama,ev_ad,ev_adres,ev_banyo,ev_buyukluk,ev_fiyat,ev_havuz,ev_il,ev_ilce,ev_odasayisi,ev_onay,m_no) values ('$ev_aciklama','$ev_ad','$ev_adres','$ev_banyo','$ev_buyukluk','$ev_fiyat','$ev_havuz','$ev_il','$ev_ilce','$ev_odasayisi','$ev_onay','$m_no')");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir

            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
        header("Location:ilanekle.php");



?>