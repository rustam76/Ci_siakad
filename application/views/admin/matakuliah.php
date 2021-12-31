<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Informasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?= base_url('Matakuliah/tambah') ?>"><i class="fas fa-plus me-1"></i></a>
                    DataTable Matakuliah
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                                <th>Dosen Pengampuh</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                                <th>Dosen Pengampuh</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php $nomor = 1;
                            foreach ($matakuliah as $row) : ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row->kd_mk; ?></td>
                                    <td><?= $row->nama_mk; ?></td>
                                    <td><?= $row->sks; ?></td>
                                    <td><?= $row->nama_dosen; ?></td>
                                    <td><a href="<?= base_url('Matakuliah/hapus/' . $row->kd_mk) ?>" class="btn btn-danger">Hapus</a> |
                                        <a href="<?= base_url('Matakuliah/edit/' . $row->kd_mk) ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            <?php $nomor++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>