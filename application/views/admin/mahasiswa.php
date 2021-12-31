<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Informasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?= base_url('Mahasiswa/tambah') ?>"><i class="fas fa-plus me-1"></i></a>
                    DataTable Mahasiswa
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Alamat</th>
                                <th>Jurusan</th>
                                <th>Dosen Pembimbing</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NPM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Alamat</th>
                                <th>Jurusan</th>
                                <th>Dosen Pembimbing</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php $nomor = 1;
                            foreach ($mahasiswa as $row) : ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row->npm; ?></td>
                                    <td><?= $row->nama_mhs; ?></td>
                                    <td><?= $row->alamat; ?></td>
                                    <td><?= $row->nama_jur; ?></td>
                                    <td><?= $row->nama_dosen; ?></td>
                                    <td><img src="<?= base_url('assets/foto_mhs/') . $row->foto ?>" height="100px" width="100px"></td>
                                    <td><a href="<?= base_url('Mahasiswa/hapus/' . $row->npm) ?>" class="btn btn-danger">Hapus</a> |
                                        <a href="<?= base_url('KRS/filter/' . $row->npm) ?>" class="btn btn-primary">Lihat KRS</a>
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