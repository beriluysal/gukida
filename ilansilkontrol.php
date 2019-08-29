<?php
		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){

            
            // Formdan Gelen Kayıtlar
            

            $ev_no                =    $_POST['ev_no'];



            $result = $baglan->query("SELECT * FROM evler WHERE ev_no = '$ev_no'");
            if($result -> num_rows > 0){
            $ekle        =    $baglan->query("DELETE FROM evler where ev_no = '$ev_no'");
            
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
        header("Location:ilansilarama.php");




?>