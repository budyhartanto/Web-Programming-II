<div>
    <img src="<?= base_url('assets/img/' . $config->imgheader); ?>" alt="" class="img-header">
</div>

<main id="main">

    <hr>
    <h3><center>Favorite Crew Onepiece List</center></h3>
    
<!-- ======= Jqurey Animasi ======= -->
    <script src="assets/vendor/jquery/jquery.js"></script>
<script>
   $(document).ready(function() {
  
     $("#tombol_hide").click(function() {
       $("#box").hide(2000);
     })
  
     $("#tombol_show").click(function() {
       $("#box").show(200);
     })
  
   });
   </script><style>
   #box {
     width: 300px;
     height: 35px;
     background-color: #f37121;
     border: 2px solid black;
     color:white;
   }
   </style>
   <!-- ======= End Jqurey Animasi ======= -->
   
<!-- ======= Jqurey DOM Berubah ======= -->
    <script src="assets/vendor/jquery/jquery.js"></script>
<script>
   $(document).ready(function() {
  
     $("#tombol2").click(function() {
       $("#paragraf4").text("<b>#Komik</b> is Amazing...");
       $("#paragraf5").html("<b>#Komik</b> is Amazing...");
     })
  
   });
   </script>

   <!-- ======= End Jqurey DOM Berubah ======= -->

  <!-- ======= Jqurey DOM Pilih ======= -->
    <script src="assets/vendor/jquery/jquery.js"></script>
 <script>
   $(document).ready(function() {
   
     $("#tombol").click(function() { 
       var nilai1 = $("#keren:checked").val();
       var nilai2 = $("#ganteng:checked").val();
       var nilai3 = $("#cool:checked").val();
        
       if (nilai1==undefined) {nilai1="";}
       if (nilai2==undefined) {nilai2="";}
       if (nilai3==undefined) {nilai3="";}
        
       alert(nilai1+' '+nilai2+' '+nilai3);
     })
   
   });
  </script>
  <!-- ======= End Jqurey DOM Pilih ======= -->

<SCRIPT LANGUAGE="JavaScript">
function Anime(pilihan)
{
alert("Anda Memilih  " + pilihan +" Sebagai Crew Favorite");

document.bgColor=pilihan;
}
</SCRIPT>
<hr width="500" color="black" noshade>



<section id="team" class="team">
    <div class="container">

      <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/3f5f4d79784d5c2f8c7809dcdfdfb582.png' ?> " class="img-fluid" alt="" >
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('USOPP')" >
                <h4>USOPP</h4>
                <span>Sniper</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/zoroo.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('ZORO')" >
                <h4>ZORO</h4>
                <span>Ahli Pedang</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/nami.png' ?> " class="img-fluid" alt="">
            <div class="member-info">
               <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('NAMI')" >
                <h4>NAMI</h4>
                <span>Navigator</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/luffy.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('LUFFY')" >
                <h4>LUFFY</h4>
                <span>Kapten</span>
                </div>
               </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/sanji.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('SANJI')" >
                <h4>SANJI</h4>
                <span>Koki</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/chopper.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('CHOPPER')" >
                <h4>CHOPPER</h4>
                <span>Dokter</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/robin.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('NICO ROBIN')" >
                <h4>NICO ROBIN</h4>
                <span>Archaeologist</span>
                </div>
              </div>
            </div>
          </div>
        </div>

    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/franky.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('FRANKY')" >
                <h4>FRANKY</h4>
                <span>Repairman</span>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section><br>

 <center>Yang Suka Baca Komik Itu ? <br>
  <input type="checkbox" id="keren" value="Keren"> Keren
  <input type="checkbox" id="ganteng" value="Ganteng"> Ganteng
  <input type="checkbox" id="cool" value="Cool"> Cool
<br><br>
  <button id="tombol">Ambil Pilihan</button></center><br>

<center><p id="paragraf4">
   Hai, Kawan.
</p>
<p id="paragraf5">
   Coba Klik Buttonnya.
</p>
<button id="tombol2">Change!</button></center>



    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog pt-3">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Blog</h2>
            </div>

            <div class="row justify-content-center">
                <?php foreach ($berita as $b) : ?>
                    <div class="col-lg-4 entries">
                        <article class="entry">
                            <div class="entry-img">
                                <img src="<?= base_url('assets/uploads/berita/' . $b->imgberita); ?>" alt="" height="250">
                            </div>
                            <h5 class="mb-2">
                                <a href="<?= base_url('home/detail/' . $b->id_berita); ?>"><?= $b->judul; ?></a>
                            </h5>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= base_url('home/detail/' . $b->id_berita); ?>"><?= $b->penulis; ?></a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= base_url('home/detail/' . $b->id_berita); ?>"><time><?= date('d-m-Y', strtotime($b->tanggal)); ?></time></a></li>
                                </ul>
                            </div>
                            
                        </article>
                    </div>
                <?php endforeach ?>
            </div>
            <center><h2>Terima Kasih</h2>
                <button id="tombol_hide">Hide</button>
                <button id="tombol_show">Show</button>
                <br><br>
              <div id="box"><a>Kembali Lagi Lah ...</a></div></center><br>
        

        </div>
    </section>
    <!-- End Blog Section -->

    <hr>
    
</main>
<!-- End #main -->