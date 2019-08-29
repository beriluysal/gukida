<?php
		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
            session_start();
            $m_email            =       $_SESSION["user"];
            
            $sonuc = $baglan->query("select * from musteri where m_email='$m_email'");

           
            while($oku = mysqli_fetch_assoc($sonuc))
            {
            $m_ad= $oku['m_ad'];
            $m_soyad= $oku['m_soyad'];
            $m_telno= $oku['m_telno'];
            $m_adres= $oku['m_adres'];
            $m_parola= $oku['m_parola'];
            $m_dtarih= $oku['m_dtarih'];
            $m_no= $oku['m_no'];
            $m_email=$oku['m_email'];
                }
            
        }

?>