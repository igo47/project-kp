<title>Form Pengajuan</title>

<body>
    <?php if ($this->session->flashdata('flash')):?>
        <div class="content justify-content-center mt-3">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                Data pengajuan <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

<section id="list" class="list">

    <div class="container ">  

        <div class="row pt-5">
            <a href="<?=site_url('Moons/add') ?>">
                <button type="button" class="btn btn-info" name="tambah">Tambah Data</button>
            </a>
        </div>

        <div class="row pt-5">
            <table class="table">
                <thead class="thead bg-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">KTP</th>
                        <th scope="col">KK</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($form_cost as $cos) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $cos['nama_lengkap']; ?></td>
                            <td><?= $cos['no_ktp']; ?></td>
                            <td><?= $cos['no_kk']; ?></td>
                            <td><?= $cos['no_hp']; ?></td>
                            <td>
                                <a href="<?= base_url();?>Moons/edit/<?= $cos['id_form']; ?>" class="badge badge-danger">Edit</a>
                                <a href="<?= base_url();?>moons/hapus/<?= $cos['id_form']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
                            </td>                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

                        
        </div>

        





    </div>

    
</section>



</body>
