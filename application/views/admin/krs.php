<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Siakad</h1>
            <p style="line-height: 5px">Sistem Informasi Akademik Universitas Halu Oleo</p>


            <div class="card mb-4">
                <div class="card-header">
                <i class="fas fa-table me-1"></i>
                    Detail KRS
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php $nomor = 1;
                            foreach ($krs as $row) : ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row->kd_mk; ?></td>
                                    <td><?= $row->nama_mk; ?></td>
                                    <td><?= $row->sks; ?></td>
                                </tr>
                            <?php $nomor++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>