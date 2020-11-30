<div>
    <img src="<?= base_url('assets/img/' . $config->imgheader); ?>" alt="" class="img-header">
</div>

<main id="main">

    <hr>
    <h3><center>Favorite Anime List</center></h3>

<SCRIPT LANGUAGE="JavaScript">
function Anime(pilihan)
{
alert("Anda Memilih  " + pilihan +" Sebagai Anime Favorite");

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
            <img src="<?php echo base_url().'assets/img/jenis/kohaku.jpg' ?> " class="img-fluid" alt="" >
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('BORUTO')" >
                <h4>BORUTO</h4>
                <span>Action</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/jenis/sanke.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('ONE PIECE')" >
                <h4>ONE PIECE</h4>
                <span>Adventure</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/jenis/Shusui 1.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
               <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('CONAN')" >
                <h4>CONAN</h4>
                <span>Analisis & Detectif</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/jenis/tancho.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('ONE PUNCH')" >
                <h4>ONE PUNCH</h4>
                <span>Material Arts</span>
                </div>
               </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/team/p5.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('SWORD ART ONLINE')" >
                <h4>SWORD ART ONLINE</h4>
                <span>Action</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/team/p6.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('HUNTER X HUNTER')" >
                <h4>HUNTER X HUNTER</h4>
                <span>Adventure</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/team/p7.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('KUROKO NO BASUKE')" >
                <h4>KUROKO NO BASUKE</h4>
                <span>Sport</span>
                </div>
              </div>
            </div>
          </div>
        </div>

    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo base_url().'assets/img/team/p8.jpg' ?> " class="img-fluid" alt="">
            <div class="member-info">
             <div class="member-info-content" INPUT TYPE="button" VALUE="" onClick="Anime('SHINGEKI NO KYOJIN')" >
                <h4>SHINGEKI NO KYOJIN</h4>
                <span>Supernatural</span>
                </div>
              </div>
            </div>
          </div>
        </div>




       


      </div>

    </div>
  </section><br>

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

        

        </div>
    </section>
    <!-- End Blog Section -->

    <hr>
    
</main>
<!-- End #main -->