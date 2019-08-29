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
  <form id="ContactForm" action="adminkullanicigoruntulekontrol.php" method="POST">
  			<div  class="wrapper"> <span>Email :</span>
                  <input type="text"  name="m_email"  >
        <input class="button" type="submit" value="Görüntüle">
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
