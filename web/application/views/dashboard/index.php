<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div>
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <!-- info jumlah data -->
    <div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
            <div>
                <div class="card-body">
                    <div>
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-info text-uppercase mb-1">User</div>
                            <div class="h6 mb-0 font-weight-bold text-black">Total Data : <?= $user; ?></div>
                        </div>
                        <div class="col-auto">
                            <i></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
            <div>
                <div class="card-body">
                    <div >
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-info text-uppercase mb-1">Berita</div>
                            <div class="h6 mb-0 font-weight-bold text-black">Total Data : <?= $berita; ?></div>
                        </div>
                        <div class="col-auto">
                            <i></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end info jumlah data -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>