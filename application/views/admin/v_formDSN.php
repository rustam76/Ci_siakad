<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Inforamasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Input Dosen
                </div>
                <div class="card-body">
                    <?= form_open_multipart('Dosen/simpan'); ?>
                    <div class="form-group">
                        <input type="text" name="nip" placeholder="Masukan NIP Dosen" class="form-control">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="nama_dosen" placeholder="Masukan Nama Dosen" class="form-control">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="alamat" placeholder="Masukan Alamat Dosen" class="form-control">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="no_telepon" placeholder="Masukan No Telepon Dosen" class="form-control">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Simpan</button>
                </div>



                <?= form_close(); ?>
            </div>
        </div>
    </main>