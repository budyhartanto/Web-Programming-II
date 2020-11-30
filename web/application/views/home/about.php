<main id="main">

<BODY OnLoad="tanggal()" OnUnload="tutup()"> <SCRIPT LANGUAGE="JavaScript">


function tanggal()
{
var d = new Date();
var y = d.getFullYear();

var m = d.getMonth() + 1;
var d = d.getDate();
var t = d + '/' + m + '/' + y + ' ';

document.g.defaultStatus.value = "    "+"Anda datang pada tanggal " + t ;
alert("Selamat Datang \n Anda Masuk Ke Halaman Profil");

}
function timer()
{
var d = new Date();
var jam = d.getHours();

var menit = d.getMinutes();
var detik = d.getSeconds();

var strwaktu = (jam<10)?"0"+jam: " Sekarang Jam : " +jam; strwaktu +=(menit<10)?":0"+menit:":"+menit; strwaktu +=(detik<10)?"0"+detik:":"+detik;

document.f.txtwaktu.value="       "+strwaktu; setTimeout("timer()",200); 
}

//	end hiding --> </SCRIPT>

<h1 align="center"></h1> <hr width="600" color="black" noshade size="10">
<font face="arial">

<CENTER>

<form name="g">

<input type="Text" size="35" name="defaultStatus"> 

</form>

<form name="f">

<h4 align="center"></h4>
<input type="Text" size="30" name="txtwaktu"> 
<hr width="600" color="black" noshade size="2"> 

</form>

<SCRIPT LANGUAGE="JavaScript">timer()</SCRIPT> </center>
</BODY>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?= base_url(''); ?>"><?= $maintitle; ?></a></li>
                <li><?= $title; ?></li>
            </ol>
            <h2><?= $title; ?></h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <img src="<?= base_url('assets/img/' . $about->imgabout); ?>" class="img-fluid mb-3" alt="">
            <p><?= $about->about; ?></p>
        </div>
    </section><!-- End About Section -->

</main><!-- End #main -->