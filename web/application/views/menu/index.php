<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div>
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div>
        <a class="mb-4 mt-2 btn btn-outline-primary" href="<?= base_url('menu/form'); ?>" role="button">
            Tambah <i class="fa fa-plus"></i>
        </a>
        

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center w-100" >
                <thead class="bg-primary text-white ">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Menu Utama</th>
                        <th scope="col">Urutan</th>
                        <th scope="col">Aktif</th>
                        
                    </tr>
                </thead>
                <tbody class="text-black">
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $k) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td class="text-left"><?= $k->menu; ?></td>
                            <td><?= $k->url; ?></td>
                            <td><?= $k->icon; ?></td>

                            <?php $data = $this->Default_m->getWhere('tabel_menu', ['id_menu' => $k->dropdown])->row(); ?>

                            <td><?= $k->dropdown == 0 ? 'Root' : $data->menu; ?></td>

                            <td><?= $k->urutan; ?></td>
                            <td><?= $k->aktif; ?></td>
                            
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

<?php require_once('application/views/templates/footer.php'); ?>