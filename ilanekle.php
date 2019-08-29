<?php include "header2.php" ?>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="wrapper">
      <form id="ContactForm" action="ilaneklekontrol.php" method="POST">
      <fieldset>
        <br><br><br><br>
        <p>
          <label>İlan Adı : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                 name = "evadi"
                  />
        </p>
        <p>
          <label>Fiyatı : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "evfiyat"
                   />
        </p>
        <p>
          <label>İlan Açıklaması : </label>
          <textarea name = "evaciklama"
                  rows = "4"
                  cols = "80"> İlanınızın açıklamasını giriniz. </textarea>
        </p>
        <p>
          <label>Büyüklük : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "evbuyukluk"
                   />&nbsp;m²
        </p>

        <p>
          <label>Oda Sayısı : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "evodasayisi"
                   />
        </p>
        <p>
          <label>Banyo : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "evbanyo"
                   />
        </p>
          <p>
          <label>Adresi : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <textarea name=evadres 
                rows = "4"
                  cols = "80"> 

          </textarea>
        </p>
        <p>
          <label>İl : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "evil"
                   />
        </p>
        <p>
          <label>İlçe : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "evilce"
                   />
        </p>
        


          <!---<label>Havuz : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>Açık</label>
          <input type = "checkbox"
                  id = "ilanacikhavuz"
                  value="Havuz var mı?"
                   />
          <label>Kapalı</label>
          <input type = "checkbox"
                  id = "ilankapalihavuz"
                  value="Havuz var mı?"
                   />
          <label>Yok</label>
          <input type = "checkbox"
                  id = "ilanhavuzyok"
                  value="Havuz var mı?"
                   />
        </p>
        -->

      </fieldset>
    

        
  





<!--
       <meta charset="UTF-8">
  <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="resimyukle.js"></script>
  <link rel="stylesheet" href="resimyukle.css" />
  
  </div>
  
    <div class="ana" id="i">
      <div class="arti">+</div>
      <form action="yukle.php" method="post" enctype="multipart/form-data" id="yukle" target="iframe">
        <div class="iler">
          <div class="i_ana"> <input type="file" name="resim[]" />  <div class="eksi">-</div> </div>
        </div>
        <input type="submit" class="buton" value="Yükle" />
      </form>
    </div>
    
    <div class="ana" id="i" name="sonuc">
    </div>
  
  <iframe src="" frameborder="0" id="iframe" name="iframe"></iframe> -->
  <br><center><input class="button" type="submit" value="İlan Ekle"></center>
  

      </div>
    </section>
  </div>
</div>

<!-- / content -->
<div class="body4">
  <div class="main">


  </form>
<?php include "footer.php" ?>
</body>
</html>
