<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Informasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Form Nilai
                </div>

                <!-- <div class="card-body">
                    <div class="form-group">
                        <input type="number" name="sks" value="<?= $krs->npm ?>" class="form-control">
                    </div>
                </div> -->

                <div class="form-group mb-3">

                    <?= form_open('KHS/simpan_nilai'); ?>

                    <div class="form-group">
                        <input type="text" name="npm" value="<?= $this->uri->segment(3) ?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group mb-3">

                    <div class="form-group">
                        <input type="text" name="kd_mk" value="<?= $this->uri->segment(4) ?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group mb-3">

                    <div class="form-group">
                        <input type="text" name="kd_mk" value="<?= $this->uri->segment(5) ?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <select name="nilai" class="form-control">
                        <option>---Silahkan Pilih Nilai--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                    <button class="btn btn-primary mt-3">Simpan</button>

                    <?= form_close(); ?>
                </div>





            </div>
        </div>
    </main>