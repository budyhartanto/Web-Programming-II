<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div>
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div>
                <?= form_open(); ?>
                <div class="form-group">
                    <label for="profil">Profil <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('profil') ? 'is-invalid' : null; ?>" id="profil" name="profil" value="<?= (!empty($ubah)) ? $ubah->profil : ''; ?>">
                    <?= form_error('profil'); ?>
                </div>
                
                <button type="submit"><?= (!empty($ubah)) ? 'Ubah' : 'Tambah'; ?> <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

        <div class="col-md-7">
            <div>
                

                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center w-100">
                        <thead class="bg-primary text-white ">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Profil</th>
                                
                            </tr>
                        </thead>
                        <tbody class=" text-black">
                            <?php $i = 1; ?>
                            <?php foreach ($profil as $k) : ?>
                                <tr>
                                    <td scope="row" class="text-center"><?= $i; ?></td>
                                    <td><?= $k->profil; ?></td>
                                    
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>