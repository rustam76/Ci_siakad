<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Inforamasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Input KRS
                </div>

                <div class="card-body">
                    <?= form_open('KRS/simpan'); ?>
                    <div class="form-group">
                        <select name="semester" class="form-control">
                            <option>Pilih Semester :</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <select name="npm" class="form-control">
                            <!-- <option>Pilih NPM :</option> -->
                            <?php foreach ($mahasiswa as $baris) { ?>
                                <option value="<?= $baris->npm ?>"><?= $baris->npm ?> | <?= $baris->nama_mhs ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <select name="kd_mk" class="form-control">
                            <!-- <option>Pilih Matakuliah :</option> -->
                            <?php foreach ($matakuliah as $baris) { ?>
                                <option value="<?= $baris->kd_mk ?>"><?= $baris->kd_mk ?> | <?= $baris->nama_mk ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-3">Simpan</button>
                    </div>
                </div>

                <?= form_close(); ?>
            </div>
        </div>
    </main>