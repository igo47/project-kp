<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
  </head>
  <body>
  <div class="container pt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #48aaff;">
      <div class="container">
          <a class="navbar-brand" href="#"><?= $judul?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="<?=site_url('Moons') ?>">Home<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?=site_url('Moons/add') ?>">Form Pengajuan<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?=site_url('Moons/laporan') ?>">List Pengajuan<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact<span class="sr-only">(current)</span></a>
          </div>
        </div>
      </div>
    </nav>
  </div>

 