<?php
        include "header4.php";
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
            
            $m_email        =    $_POST['m_email'];
            
            $sorustur="Select * From musteri where m_email ='$m_email'";
            $yazdir_sorgu = $baglan->query($sorustur) or die(mysqli_error());
            while($sonuc=$yazdir_sorgu->fetch_assoc())
            {
                ?>

                <form name="form1" method="post" action="index.php">
            <table class="kutu" border="1" cellpadding="2" cellspacing="0">
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Müşteri Numarası :</label><?php echo $sonuc['m_no']; ?></td>
              </tr>
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Adı :</label><?php echo $sonuc['m_ad']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Soyadı :</label><?php echo $sonuc['m_soyad']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Telefonu :</label><?php echo $sonuc['m_tel']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Doğum Tarihi :</label><?php echo $sonuc['m_dtarih']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>E-mail'i :</label><?php echo $sonuc['m_email']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Adresi :</label><?php echo $sonuc['m_adres']; ?></td> 
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Parolası :</label><?php echo $sonuc['m_parola']; ?></td>
              </tr>
                </td>
              </tr>

          </table>
</form>

            
                
            
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