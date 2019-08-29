<?php include "header.php" ?>
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
<center>        <form id="ContactForm" action="giriskontrol.php" method="POST">
              <div>
                <div  class="wrapper"> <span>E-Mail :</span>
                  <input type="text"  name="giris_email"  >
                </div>
                <div  class="wrapper"> <span>Şifre :</span>
                  <input type="password"  name="giris_sifre"  >
                </div>
                
               <a href="yenikayit.php" class="button">Kayıt Ol</a> <input class="button" type="submit" value="Giriş Yap">

    </form></center>

        
      </div>
    </section>
  </div>
</div>
<!-- / content -->
<div class="body4">
  <div class="main">
    <!-- footer -->
<?php include "footer.php" ?>
</body>
</html>





