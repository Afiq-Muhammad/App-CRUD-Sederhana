<title>Data Siswa</title>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Data Siswa</h3>
              </div>
              <div class="card-body">
                <a href="?page=siswa_tambah" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus-circle"></i> Tambah Siswa</a>
                <table id="example1" class="table table-bordered table-striped table-hover table-sm">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Nama Siswa</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Kejuruan</th>
                      <th>Kelas</th>
                      <th>Status</th>
                      <th class="text-center"><i class="fa fa-cog"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
                    $no=1;
                    $tm = mysqli_query($konek,"SELECT * FROM tb_siswa INNER JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan");

                    function generateStatusLink($status, $nisn) {
                        $statusText = $status == 1 ? 'Aktif' : 'Tidak Aktif';
                        $statusClass = $status == 1 ? 'bg-success' : 'bg-secondary';
                        $newStatus = $status == 1 ? 0 : 1;
                        $icon = $status == 1 ? 'fas fa-user-check' : 'fas fa-user-alt-slash';

                        return '<a href="?page=status&id=' . $nisn . '&status=' . $newStatus . '" class="badge ' . $statusClass . '" style="text-decoration: none;"><i class="' . $icon . '"></i>' . $statusText . '</a>';
                    }

                    while ($sis=mysqli_fetch_assoc($tm)) :
                    ?>
                  <tr>
                      <td class="align-middle text-center"><?=$no++;?></td>
                      <td class="align-middle"><?=$sis['nama_siswa'] ?></td>
                      <td class="align-middle"><?=$sis['tempat_lahir'] ?></td>
                      <td class="align-middle"><?=date('d-m-Y', strtotime($sis['tanggal_lahir']))?></td>
                      <td class="align-middle"><?=$sis['nama_jurusan'] ?></td>
                      <td class="align-middle"><?=$sis['nama_kelas']?></td>
                      <td class="align-middle text-center">
                      <?= generateStatusLink($sis['status'], $sis['nisn']); ?>
                      </td>
                      <td class="text-center">
                        <a href="?page=siswa_detail&id_detail=<?= $sis['nisn']?>" class="btn btn-info btn-sm" title="Detail"><i class="fa fa-eye"></i> Detail</a>
                        <a href="?page=siswa_ubah&id_ubah=<?= $sis['nisn'] ?>" class="btn btn-warning btn-sm" title="Ubah"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="?page=siswa_hapus&id_hapus=<?= $sis['nisn'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin hapus?');" title="Hapus"><i class="fa fa-trash-alt"></i> Hapus</a>
                      </td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</div>
