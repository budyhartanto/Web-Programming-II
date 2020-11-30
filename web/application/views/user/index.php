<!-- Begin Page Content -->
<div class="container-fluid ">

    <!-- Page Heading -->
    <div>
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div>

        <a class="mb-3 btn btn-outline-primary" href="<?= base_url('user/tambah'); ?>" role="button">
            Tambah <i class="fa fa-plus"></i>
        </a>
        

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center w-100" >
                <thead class="bg-primary text-white ">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Level</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Aktif</th>
                        
                    </tr>
                </thead>
                <tbody class="text-black">
                    <?php $i = 1; ?>
                    <?php foreach ($user as $u) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td class="text-left"><?= $u->username; ?></td>
                            <td><?= $u->profil; ?></td>
                            <td class="text-left"><?= $u->nama_user; ?></td>
                            <td><?= $u->aktif; ?></td>
                            
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

<!-- Modal User -->
<div class="modal fade " id="getUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body detailUser">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php require_once('application/views/templates/footer.php'); ?>

<script>
    // get user
    $(document).ready(function() {
        $('#myTable').on('click', '.getAjaxUser', function() {
            const id = $(this).data('id');
            $(".detailUser").load("<?= base_url('user/getAjaxUser/'); ?>" + id);
        });
    });
</script>