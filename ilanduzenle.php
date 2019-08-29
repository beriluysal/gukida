<?php include "header2.php" ?>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="wrapper">
      <form id="ContactForm" action="ilanduzenlekontrol.php" method="POST">
      <fieldset>
        <p>
          <label>Ev No : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                 name = "ev_no"
                  />
        </p>
        <p>
          <label>İlan Adı : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                 name = "ev_ad"
                  />
        </p>
        <p>
          <label>Fiyatı : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "ev_fiyat"
                   />
        </p>
        <p>
          <label>İlan Açıklaması : </label>
          <textarea name = "ev_aciklama"
                  rows = "4"
                  cols = "80"> İlanınızın açıklamasını giriniz. </textarea>
        </p>
        <p>
          <label>Büyüklük : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "ev_buyukluk"
                   />&nbsp;m²
        </p>

        <p>
          <label>Oda Sayısı : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "ev_odasayisi"
                   />
        </p>
        <p>
          <label>Banyo : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "ev_banyo"
                   />
        </p>
          <p>
          <label>Adresi : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <textarea name=ev_adres 
                rows = "4"
                  cols = "80"> 

          </textarea>
        </p>
        <p>
          <label>İl : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "ev_il"
                   />
        </p>
        <p>
          <label>İlçe : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type = "text"
                  name = "ev_ilce"
                   />
        </p>
            <input class="button" type="submit" value="Güncelle">
      </fieldset>

    </form>

      </div>
    </section>
  </div>
</div>
<!-- / content -->
<div class="body4">
  <div class="main">
<?php include "footer.php" ?>
</body>
</html>
