<?php
    

    require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        $page = @$_GET["page"];

            if(empty($page) or !is_numeric($page)) {

        $page = 1;

}
          session_start();
        
            // Formdan Gelen Kayıtlar
            $m_email        =    $_SESSION['user'];
            $sorustur="Select * From musteri where m_email ='$m_email'";
            $yazdir_sorgu = $baglan->query($sorustur) or die(mysqli_error());
            include "header2.php"; ?>

    <!-- / header -->
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
            

          

            while($sonuc=$yazdir_sorgu->fetch_assoc())
            {
                ?>

                <form name="form1" method="post" action="index.php">
            <table class="kutu" border="1" cellpadding="2" cellspacing="0">
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Müşteri Numaranız :</label><?php echo $sonuc['m_no']; ?></td>
              </tr>
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Adınız :</label><?php echo $sonuc['m_ad']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Soyadınız :</label><?php echo $sonuc['m_soyad']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Telefonunuz :</label><?php echo $sonuc['m_tel']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Doğum Tarihiniz :</label><?php echo $sonuc['m_dtarih']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>E-mail'iniz :</label><?php echo $sonuc['m_email']; ?></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Adresiniz :</label><?php echo $sonuc['m_adres']; ?></td> 
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Parolanız :</label><?php echo $sonuc['m_parola']; ?></td>
              </tr>
                </td>
              </tr>

          </table>
</form>

            <a href="kbduzenle.php" class="button">Bilgileri Güncelle</a>
                
            
            <?php
                
                

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

            
            ?>

           
        


