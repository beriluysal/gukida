<?php
		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){

            
            // Formdan Gelen Kayıtlar
            $ev_no        =    $_POST['ev_no'];
            $result = $baglan->query("SELECT ev_onay FROM evler WHERE ev_no='$ev_no'");
            while($oku = mysqli_fetch_assoc($result)){
                if($oku['ev_onay']==1){

                    $degistir = $baglan->query("update evler set ev_onay=0 where ev_no='$ev_no'");
                }
                else{

                    $degistir = $baglan->query("update evler set ev_onay=1 where ev_no='$ev_no'");
                }

                


            
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir

            
        }
        	
        }
        echo "Onay Değişti";
        header("Location: adminilangoruntule.php");
        

?>