<?php include "header4.php"; ?>
<?php
    

    require_once("config.php"); 

        // Form Gönderilmişmi Kontrolü Yapalım
        $page = @$_GET["page"];

            if(empty($page) or !is_numeric($page)) {

        $page = 1;

}
    ?>

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
  <form id="ContactForm" action="adminilangoruntulekontrol.php" method="POST">
  			<br><div  class="wrapper"> <span>Ev Numarası :</span>
                  <input type="text"  name="ev_no"  >
        <input class="button" type="submit" value="Görüntüle">
        </form><br><br>
        <form id="ContactForm" action="adminilanonay.php" method="POST">
        <div  class="wrapper"> <span>Ev Numarası :</span>
                  <input type="text"  name="ev_no"  >
        <input class="button" type="submit" value="Onay Değiştir">
        </form>
  
                
</form>

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
