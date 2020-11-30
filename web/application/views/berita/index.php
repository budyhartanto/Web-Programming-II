<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div>
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div>
        <a class="mb-3 btn btn-outline-primary" href="<?= base_url('berita/form'); ?>" role="button">
            Tambah <i class="fa fa-plus"></i>
        </a>
        

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-primary text-white ">
                
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Judul</th>
                        
                    </tr>
                </thead>
                <tbody class="text-black">
                    <?php $i = 1; ?>
                    <?php foreach ($berita as $u) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= date('d-m-Y', strtotime($u->tanggal)); ?></td>
                            <td class="text-left"><?= $u->penulis; ?></td>
                            <td class="text-left"><?= $u->judul; ?></td>
                            
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<div class="modal fade " id="getberita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body detailBerita">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<?php require_once('application/views/templates/footer.php'); ?>

<!-- script -->
<script>
    $(document).ready(function() {
        $('#myTable').on('click', '.getAjax', function() {
            const id = $(this).data('id');
            $(".detailBerita").load("<?= base_url('berita/getAjax/'); ?>" + id);
        });
    });
</script>
<!-- end script -->