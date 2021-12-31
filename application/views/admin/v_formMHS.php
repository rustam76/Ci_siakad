<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Inforamasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Input Mahasiswa
                </div>
                <div class="card-body">
                    <?= form_open_multipart('Mahasiswa/simpan'); ?>
                    <div class="form-group">
                        <input type="text" name="npm" placeholder="Masukan Kode NPM" class="form-control">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="nama_mhs" placeholder="Masukan Nama Mahasiswa" class="form-control">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="alamat" placeholder="Masukan Alamat Mahasiswa" class="form-control">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <select name="kd_jur" class="form-control">
                            <option>Pilih Jurusan :</option>
                            <?php foreach ($jurusan as $baris) { ?>
                                <option value="<?= $baris->kd_jur ?>"><?= $baris->nama_jur ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <select name="nip" class="form-control">
                            <option>Dosen Pemimbing :</option>
                            <?php foreach ($dosen as $baris) { ?>
                                <option value="<?= $baris->nip ?>"><?= $baris->nama_dosen ?></option>
                            <?php } ?>
                        </select>
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