<?php
        include "header2.php";
    require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
         

            ?>

           
             </div>
</div>
<!-- content -->
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="wrapper">
    <div align = "center" >   
  <font face="tahoma" size="5" color="white">
  <?php 
            if($_POST){
            
            $ev_no        =    $_POST['ev_no'];
            
            $sorustur="Select * From evler where ev_no ='$ev_no'";
            $yazdir_sorgu = $baglan->query($sorustur) or die(mysqli_error());
            while($sonuc=$yazdir_sorgu->fetch_assoc())
            {
                ?>

                <form name="form1" method="post" action="index.php">
            <table class="kutu" border="1" cellpadding="2" cellspacing="0">
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev Adı :</label><?php echo $sonuc['ev_ad']; ?></td>
              </tr>
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev Açıklaması :</label><?php echo $sonuc['ev_aciklama']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev Adresi :</label><?php echo $sonuc['ev_adres']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev Fiyatı :</label><?php echo $sonuc['ev_fiyat']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev Büyüklüğü :</label><?php echo $sonuc['ev_buyukluk']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev Oda Sayısı :</label><?php echo $sonuc['ev_odasayisi']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev Banyosayısı :</label><?php echo $sonuc['ev_banyo']; ?></td> 
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev İli :</label><?php echo $sonuc['ev_il']; ?></td>
              </tr>
                </td>
              </tr>
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Ev İlçesi :</label><?php echo $sonuc['ev_ilce']; ?></td>
              </tr>
                </td>
              </tr>

          </table>
</form>

            
            <a href="ilansilkontrol.php" class="button">İlan SİL</a>
                
            
            <?php
                 /* else{
                    echo "Aradığınız kriterlerde ilan bulunmamaktadır";
                }*/
                

            }
            
            

            ?>

            

      </div>
    </section>
  </div>
</div>
<!-- / content -->
<div class="body4">
  <div class="main">
    <!-- footer -->
</body>
</html>




            <?php
            include "footer.php";
        }
        

?>