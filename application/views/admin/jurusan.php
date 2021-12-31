<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Informasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?= base_url('Jurusan/tambah') ?>"><i class="fas fa-plus me-1"></i></a>
                    DataTable Jurusan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Jurusan</th>
                                <th>Nama Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode Jurusan</th>
                                <th>Nama Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php $nomor = 1;
                            foreach ($jurusan as $row) : ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row->kd_jur; ?></td>
                                    <td><?= $row->nama_jur; ?></td>
                                    <td><a href="<?= base_url('Jurusan/hapus/' . $row->kd_jur) ?>" class="btn btn-danger">Hapus</a> |
                                        <a href="<?= base_url('Jurusan/edit/' . $row->kd_jur) ?>" class="btn btn-primary">Edit</a>
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