<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Informasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Form Edit Jurusan
                </div>

                <div class="card-body">
                    <?php foreach ($jurusan as $edit) : ?>

                        <?= form_open('Jurusan/update'); ?>
                        <div class="form-group">
                            <input type="text" name="kd_jur" value="<?= $edit->kd_jur ?>" class="form-control" readonly>
                        </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="nama_jur" value="<?= $edit->nama_jur ?>" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Edit</button>

                    <?= form_close(); ?>

                <?php endforeach; ?>
                </div>




            </div>
        </div>
    </main>