<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Informasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                    <a href="<?= base_url('Dosen/tambah') ?>"><i class="fas fa-plus me-1"></i></a>
                    DataTable Dosen
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Dosen</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Dosen</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php $nomor = 1;
                            foreach ($dosen as $row) : ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row->nip; ?></td>
                                    <td><?= $row->nama_dosen; ?></td>
                                    <td><?= $row->alamat_dosen; ?></td>
                                    <td><?= $row->no_telepon; ?></td>
                                    <td><img src="<?= base_url('assets/foto_dosen/') . $row->foto ?>" height="100px" width="100px"></td>
                                    <td><a href="<?= base_url('Dosen/hapus/' . $row->nip) ?>" class="btn btn-danger">Hapus</a>
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