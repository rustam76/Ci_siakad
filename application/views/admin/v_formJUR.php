<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Inforamasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Input Jurusan
                </div>
                <div class="card-body">
                    <?= form_open('Jurusan/simpan'); ?>
                    <div class="form-group">
                        <input type="text" name="kd_jur" placeholder="Masukan Kode Jurusan" class="form-control">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="nama_jur" placeholder="Masukan Nama Jurusan" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Simpan</button>
                </div>



                <?= form_close(); ?>
            </div>
        </div>
    </main>