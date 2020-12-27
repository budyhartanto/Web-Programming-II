  <!-- ======= Jqurey DOM  ======= -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script>
 window.onload = function()
 {
  document.getElementById("paragraf").
  addEventListener("click", function(){alert ('Silahkan tambah blog.')}); //Buttom Tambah Blog//
  document.getElementById("paragraf1").
  addEventListener("click", function(){alert ('Apakah anda ingin keluar dari halaman ini.')}); //Button Kembali//
 }
</script>
  <!-- ======= End Jqurey DOM  ======= -->
<?php $this->view('template/header.php')?>


<div class="row">
  <div class="col-sm-12">
    <div class="card mb-0">
      <div class="card-body pt-0">
        <form>
          <div class="row justify-content-center">
            <div class="col-2 col-sm-auto">
              <div class="form-group mb-0 pb-0" style="margin-top: 20px">
                <button id="filter-previous_page" class="btn btn-white btn-round btn-just-icon" type="button" data-toggle="tooltip" data-placement="top" title="Halaman sebelumnya">&laquo;</button>
              </div>
            </div>
            <div class="col-4 col-sm-1 pr-0">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Page</label>
                <input type="number" id="filter-page" class="form-control" data-toggle="tooltip" title="Halaman maksimum: 42" value="1">
              </div>
            </div>
            <div class="col-4 col-sm-1 pl-0">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Limit</label>
                <input type="number" id="filter-limit" class="form-control" value="50">
              </div>
            </div>
            <div class="col-2 col-sm-auto pl-0">
              <div class="form-group mb-0 pb-0" style="margin-top: 20px">
                <button id="filter-next_page" class="btn btn-white btn-round btn-just-icon" type="button" data-toggle="tooltip" data-placement="top" title="Halaman selanjutnya">&raquo;</button>
              </div>
            </div>
            <div class="col-9 col-sm-4 pr-0">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Cari Judul Blog</label>
                <div class="input-group">
                  <input type="text" id="filter-cari" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-auto pl-0 col-sm-auto">
              <div class="form-group mb-0 pb-0" style="margin-top: 20px">
                <button class="btn btn-white btn-round btn-just-icon" type="button" data-toggle="tooltip" data-placement="top" title="Halaman selanjutnya">
                  <i class="material-icons">search</i>
                </button>
              </div>
            </div>
            
            <li class="nav-item">
            <p id="paragraf1"> <!-- ======= Id Jqurey DOM  ======= -->
            <a href="<?= base_url(); ?>home" class="btn btn-block btn-primary" value="Home">Kembali</a></p>
            </li>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <h4 class="card-title nav-tabs-title">Data Blog</h4>

            <ul class="nav nav-tabs justify-content-end">
              <li class="nav nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modal-tambah_buku">
                <p id="paragraf"> <!-- ======= Id Jqurey DOM  ======= -->
                  <i class="material-icons">add</i>
                  Tambah Blog
                  </p>

                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="text-primary">
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Jumlah Komik</th>
                <th>Jumlah Eksemplar</th>
                <th>Kategori</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="data-load-buku">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-tambah_buku">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah data blog</h4>
        <button class="close" data-dismiss="modal" type="button">&times;</button>
      </div>
      <div class="modal-body">
        <form id="form-tambah_buku">
          <div class="row">
            <div class="col-12">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Judul Blog</label>
                <input type="text" name="judul" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Pengarang</label>
                <input type="text" name="pengarang" class="form-control">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Penerbit</label>
                <input type="text" name="penerbit" class="form-control">
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Tahun</label>
                <input type="number" name="tahun" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Jumlah Buku</label>
                <input type="number" name="jumlah_buku" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Jumlah Eksemplar</label>
                <input type="number" name="jumlah_eksemplar" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Kategori</label>
                <input type="text" name="kategori" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-block btn-primary" value="Tambah">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-edit_buku">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data</h4>
        <button type="button" class="close" data-dismiss='modal'>&times;</button>
      </div>
      <div class="modal-body">
        <form id="form-edit_buku">
          <input type="hidden" name="id">
          <div class="row">
            <div class="col-12">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Judul Blog</label>
                <input type="text" name="judul" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Pengarang</label>
                <input type="text" name="pengarang" class="form-control">
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Penerbit</label>
                <input type="text" name="penerbit" class="form-control">
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Tahun</label>
                <input type="number" name="tahun" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Jumlah Blog</label>
                <input type="number" name="jumlah_buku" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Jumlah Eksemplar</label>
                <input type="number" name="jumlah_eksemplar" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Kategori</label>
                <input type="text" name="kategori" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-block btn-primary" value="Edit">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $this->view('template/js_script.php') ?>
<script type="text/javascript">

  // -------------------------------------
  // Pemanggilan Ajax
  // -------------------------------------
  var read_buku = {
    limit: 50,
    page: 1
  }
  function refresh_buku() {
    $.ajax({
      url: '<?=site_url('data/read_buku/show/ajax-list-table/pagination')?>',
      type: 'GET',
      dataType: 'json',
      data: read_buku,
    })
    .done(function(data) {
      if (read_buku.page == 1) {
        $("#filter-previous_page").addClass('disabled');
      }
      else {
        $("#filter-previous_page").removeClass('disabled');
      }
      if (read_buku.page == data.total_page) {
        $("#filter-next_page").addClass('disabled');
      }
      else {
        $("#filter-next_page").removeClass('disabled');
      }
      $("#filter-page").attr('max', data.total_page);
      $("#filter-page").attr('title', 'Halaman Maksimum: ' + data.total_page);
      $("#filter-page").attr('data-original-title', 'Halaman Maksimum: ' + data.total_page);
      $.ajax({
        url: '<?=site_url('data/read_buku/show/ajax-list-table')?>',
        type: 'GET',
        dataType: 'html',
        data: read_buku,
      })
      .done(function(data) {
        $("#data-load-buku").fadeOut(100, function() {
          $.getScript('<?=site_url('assets/custom/js/default.js')?>');
          $("#data-load-buku").html(data).fadeIn(100);
          event_buku();
        });
      });
    });
  }
  refresh_buku();

  // -------------------------------------
  // Event setelah data buku dimuat
  // -------------------------------------
  function event_buku() {

    // ----------------------------------------
    // Event klik edit buku
    // ----------------------------------------
    ctx_modal_edit_buku = $("#modal-edit_buku");
    $(".edit-data").click(function(e) {
      id = $(this).data('id');
      $.ajax({
        url: '<?=site_url('data/read_buku/single')?>',
        type: 'GET',
        dataType: 'json',
        data: {id: id},
      })
      .done(function(data) {
        $("#form-edit_buku input[name='id']").val(data.object.id);
        $("#form-edit_buku input[name='judul']").val(data.object.judul);
        $("#form-edit_buku input[name='pengarang']").val(data.object.pengarang);
        $("#form-edit_buku input[name='penerbit']").val(data.object.penerbit);
        $("#form-edit_buku input[name='tahun']").val(data.object.tahun);
        $("#form-edit_buku input[name='jumlah_buku']").val(data.object.jumlah_buku);
        $("#form-edit_buku input[name='jumlah_eksemplar']").val(data.object.jumlah_eksemplar);
        $("#form-edit_buku input[name='kategori']").val(data.object.kategori);
        ctx_modal_edit_buku.modal('show').on('shown.bs.modal', function(e) {
          $("#form-edit_buku input[name='judul']").focus();
        });
      });
    });

    // ----------------------------------------
    // Hapus Data Buku
    // ----------------------------------------
    $(".hapus-data").click(function(e) {
      e.preventDefault();
      id = $(this).data('id');
      if (confirm("Anda yakin?")) {
        $.ajax({
          url: '<?=site_url('data/write_buku/delete')?>',
          type: 'POST',
          dataType: 'json',
          data: {id: id},
        })
        .done(function(data) {
          if (data) {
            refresh_buku();
            buat_notifikasi({
              icon: 'done_outline',
              message: "Data berhasil dihapus",
              type: 'success'
            });
          }
        });
      }
    });

  }

  // -------------------------------------
  // Event Filter / Penyaringan Data
  // -------------------------------------
  var ctx_limit = $("#filter-limit"); 
  var ctx_page = $("#filter-page"); 
  var ctx_next_page = $("#filter-next_page"); 
  var ctx_previous_page = $("#filter-previous_page"); 
  var ctx_cari = $("#filter-cari");

  ctx_limit.on('input', function(e) {
    value = $(this).val();
    if (value > 0) {
      read_buku.limit = value;
    }
    else {
      $(this).val(50);
    }
    $("#filter-page").val(1);
    read_buku.page = 1;
    refresh_buku();
  });
  ctx_page.on('input', function(e) {
    value = $(this).val();
    if (value > 0) {
      read_buku.page = value;
    }
    else {
      $(this).val(1);
    }
    refresh_buku();
  });
  ctx_next_page.click(function(e) {
    disabled = $(this).hasClass('disabled');
    if (!disabled) {
      read_buku.page++;
      ctx_page.val(read_buku.page);
      refresh_buku(); 
    }
  });
  ctx_previous_page.click(function(e) {
    disabled = $(this).hasClass('disabled');
    if (!disabled) {
      read_buku.page--;
      ctx_page.val(read_buku.page);
      refresh_buku(); 
    }
  });
  ctx_cari.on('input', function(e) {
    value = $(this).val();
    if (value != '') {
      read_buku.cari = value;
    }
    else {
      delete read_buku.cari;
    }
    refresh_buku();
  });


  // -------------------------------------
  // Tambah Data Buku
  // -------------------------------------
  $("#form-tambah_buku").submit(function(e) {
    e.preventDefault();
    ctx_modal = $("#modal-tambah_buku");
    form = $(this);
    $.ajax({
      url: '<?=site_url('data/write_buku/insert')?>',
      type: 'POST',
      dataType: 'json',
      data: form.serialize(),
    })
    .done(function(data) {
      if (data) {
        form[0].reset();
        ctx_modal.modal('hide');
        buat_notifikasi({
          icon: 'done_outline',
          message: "Data berhasil ditambahkan",
          type: 'success'
        });
        refresh_buku();
      }
      else {
        alert('Tidak dapat terhubung dengan database');
      }
    });
  });

  // -------------------------------------
  // Edit buku
  // -------------------------------------
  $("#form-edit_buku").submit(function(e) {
    e.preventDefault();
    form = $(this);
    $.ajax({
      url: '<?=site_url('data/write_buku/update')?>',
      type: 'POST',
      dataType: 'json',
      data: form.serialize(),
    })
    .done(function(data) {
      if (data) {
        form[0].reset();
        ctx_modal_edit_buku.modal('hide');
        buat_notifikasi({
          icon: 'done_outline',
          message: 'Data berhasil di edit',
          type: 'success'
        });
        refresh_buku();
      }
    });
  });

  

</script>
<?php $this->view('template/footer.php')?>