<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div>
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div>

        <?= form_open_multipart(); ?>


        <div class="form-group">
            <label for="imgheader">Gambar Header <span class="text-danger">* (Landscape, Max Size 500kb)</span>
            </label>
            <div>
                <input type="file" id="real-file" hidden="hidden" name="imgheader">
                <button type="button" class="btn btn-outline-success" id="custom-button">
                    Upload File <i class="fas fa-upload ml-2"></i>
                </button>
                <span id="custom-text" class="text-secondary ml-2">Tidak ada file yang diupload</span>
            </div>
            <?= form_error('imgheader'); ?>
        </div>

        <div class="form-group">
            <img id="prev" src="<?= base_url('assets/img/' . $ubah->imgheader); ?>" height="350">
        </div>

        <input type="hidden" name="imgheaderold" value="<?= $ubah->imgheader; ?>">

        <button type="submit">Upload <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<!-- end modal -->

<?php require_once('application/views/templates/footer.php'); ?>

<!-- script -->
<!-- end script -->