<title>Form Pengajuan</title>


<body>
  <!-- <div class="container pt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #48aaff;">
      <div class="container">
          <a class="navbar-brand" href="#">Form</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="<?=site_url('Moons') ?>">Home</a>
            <a class="nav-link active" href="#">Form Pengajuan<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?=site_url('Moons/laporan') ?>">List Pengajuan</a>
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
          </div>
        </div>
      </div>
    </nav>
  </div> -->

<section id="pengajuan" class="pengajuan">
  <form class="container mt-5" action="" method="post">
    <?php if (validation_errors()):?>
      <div class="alert alert-danger" role="alert">
        <?= validation_errors();?>
      </div>
    <?php endif; ?>
    <h3>Data Costumer</h3>
    <div class="row">
      <div class="col">
          <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="col">
          <label for="name">No KTP</label>
        <input type="number" class="form-control" name="noktp">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
          <label for="name">Alamat</label>
        <input type="text" class="form-control" name="alamat">
      </div>
      <div class="col">
          <label for="name">No Kartu Keluarga</label>
        <input type="number" class="form-control" name="nokk">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <label for="name">Kota</label>
        <input type="text" class="form-control" id="kota" name="kota">
      </div>
      <div class="col">
          <label for="name">Nomer Handphone</label>
        <input type="number" class="form-control" name="nohp">
      </div>
    </div>
    <div class="row">
      
      <div class="col-md-3 mt-4">
        <label for="name">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi">
      </div>
      <div class="col-md-3 mt-4">
        <label for="name">Kode POS</label>
        <input type="text" class="form-control" id="kodepos" name="kodepos">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 mt-4">
        <label for="name">Foto KTP</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <label for="name">Foto KK</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <label for="name">Foto Akta Nikah</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <label for="name">Foto Slip Gaji</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
    </div>

    <H3 class="pt-4">Data Agunan</H3>
    <div class="row">
      <div class="col-md-3 mt-4">
        <label for="name">Foto Setifikat</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <label for="name">Foto Browsur</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <label for="name">Foto Side Plane</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
      <div class="col-md-3 mt-4">
        <label for="name">Foto Surat Penawaran Rumah</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
    </div>
    <div class="row mb-5 pt-5">
      <div class="col">
      <button type="submit" class="btn btn-success" name="submit">Save</button>
      <a href="<?=site_url('Moons') ?>"><button type="button" class="btn btn-danger" name="cancel">Cancel</button></a>
      </div>
    </div>

  </form>
</section>

      


</body>