<?php include "header2.php" ?>

    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="wrapper">
       <article class="col1">
          <div>  <article class="col1">
          <div id="slider"> <img src="images/img1.jpg" alt="" title="<strong>Ankara'da Deniz Manzaralı Villa</strong><span> 8 Oda , 2 Salon, 3 Banyo, 1 Spor Salonu, Açık ve Kapalı Havuz</span> &nbsp; &nbsp; &nbsp; Günlük : 1000 Lira &nbsp; &nbsp; &nbsp; <a href='#'>Detaylar</a></span>"> <img src="images/img2.jpg" alt="" title="<strong>İstanbul'da Ada Manzaralı Villa</strong><span> 7 Oda , 3 Salon, 2 Banyo, Açık Havuz</span> &nbsp; &nbsp; &nbsp; Günlük : 750 Lira &nbsp; &nbsp; &nbsp; <a href='#'>Detaylar</a></span>"> <img src="images/img3.jpg" alt="" title="<strong>Villa de la Bodrum</strong><span> 5 Oda , 1 Salon, 2 Banyo, Açık Havuz</span> &nbsp; &nbsp; &nbsp; Günlük : 800 Lira &nbsp; &nbsp; &nbsp; <a href='#'>Detaylar</a></span>"> <img src="images/img4.jpg" alt="" title="<strong>Adana'da Seyhan Manzaralı Villa</strong><span> 10 Oda , 4 Salon, 2 Banyo, 1 Spor Salonu, Açık ve Kapalı Havuz</span> &nbsp; &nbsp; &nbsp; Günlük : 1100 Lira &nbsp; &nbsp; &nbsp; <a href='#'>Detaylar</a></span>"> <img src="images/img5.jpg" alt="" title="<strong>Isparta'da Davraz Manzaralı Villa</strong><span> 12 Oda , 4 Salon, 3 Banyo, 1 Spor Salonu, Açık ve Kapalı Havuz, Spa</span> &nbsp; &nbsp; &nbsp; Günlük : 1300 Lira &nbsp; &nbsp; &nbsp; <a href='#'>Detaylar</a></span>"> </div>
        </article> </div>
        </article>
        <article class="col2">
          <form id="form_1" action="aramasonuckontrol.php" method="post">
            <div class="pad1">
              <h3>İlan Ara</h3>
              <div class="row"> İl :<br>
                <input name ="ev_il" type="text" class="input">
              </div>
                <div class="row"> İlçe :<br>
                <input name ="ev_ilce" type="text" class="input">
              </div>
              <div class="row_select">
                <div name ="ev_odasayisi" class="cols"> Oda Sayısı:<br>
                  <select>
                    <option>&nbsp;</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                </div>
                
              </div>
              <div class="row_select">
                <div name ="ev_banyosayisi" class="cols"> Banyo:<br>
                  <select>
                    <option>&nbsp;</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                
              </div>
              <div class="row_select pad_bot1">
                
                <div align = "center" class="cols pad_left1" ><input class="button" type="submit" value="Ara"> </div>
              </div>
               </div>
          </form>
        </article>
      </div>
      
        </article>


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
