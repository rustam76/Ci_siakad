<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Informasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Form KHS Semester
                </div>

                <!-- <div class="card-body">
                    <div class="form-group">
                        <input type="number" name="sks" value="<?= $krs->npm ?>" class="form-control">
                    </div>
                </div> -->

                <div class="card-body">

                    <?= form_open('KHS/detail'); ?>

                    <div class="form-group">
                        <select name="npm" class="form-control">
                            <?php foreach ($mhs as $key): ?>
                                <option value="<?=$key->npm?>">
                                <?=$key->npm?> | <?=$key->nama_mhs?>
                            <?php endforeach ?>
                                </option>
                        </select>
                    </div>
                </div>

               
                <div class="card-body">
                    <div class="form-group">
                        <select name="smt" class="form-control">
                            <option>Pilih Semester</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <button class="btn btn-primary mt-3">Cari</button>

                    <?= form_close(); ?>
                </div>





            </div>
        </div>
    </main>