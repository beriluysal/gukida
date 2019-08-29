<?php
		

		require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        $page = @$_GET["page"];

            if(empty($page) or !is_numeric($page)) {

        $page = 1;

}
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $ev_il        =    $_POST["ev_il"];
            $ev_ilce      =    $_POST["ev_ilce"];
            //$ev_odasayisi     =    $_POST["ev_odasayisi"];
            //$ev_banyosayisi     =    $_POST["ev_banyosayisi"];
            $sorustur="Select * From evler where ev_il like '%$ev_il%' and ev_ilce like '%$ev_ilce%'";
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
            

             /*
                if($sonuc['ev_onay']==1)
                {
                echo "<div class='kutu'>"  .$sonuc['ev_ad']."</div>";
                echo $sonuc['ev_aciklama'];
                echo $sonuc['ev_fiyat'];
                echo $sonuc['ev_adres'];
                echo $sonuc['ev_il'];
                echo $sonuc['ev_ilce'];
                echo $sonuc['ev_buyukluk']; echo "m² ";
                echo $sonuc['ev_banyo']; */

            while($sonuc=$yazdir_sorgu->fetch_assoc())
            {
                ?>

                <form name="form1" method="post" action="index.php">
            <table class="kutu" border="1" cellpadding="2" cellspacing="0">
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>İlan Başlığı :</label><?php echo $sonuc['ev_ad']; ?><label></td>
              </tr>
                <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Açıklama :</label><?php echo $sonuc['ev_aciklama']; ?><label></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Fiyatı :</label><?php echo $sonuc['ev_fiyat']; ?><label></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Adresi :</label><?php echo $sonuc['ev_adres']; ?><label></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>İli</label><?php echo $sonuc['ev_il']; ?><label></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>İlçesi</label><?php echo $sonuc['ev_ilce']; ?><label></td>
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Büyüklüğü :</label><?php echo $sonuc['ev_buyukluk']; ?><label></td> 
              </tr>
              <tr>
                 <td align="right" class="etiket"></td><td class="giris"><label>Banyo Sayısı :</label><?php echo $sonuc['ev_banyo']; ?><label></td>
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

           
        

?>
<!--and ev_banyo like "%$ev_banyosayisi%" and ev_odasayisi like "%$ev_odasayisi%"