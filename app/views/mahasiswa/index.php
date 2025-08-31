<div class="container">
    <h3>Daftar Mahasiswa</h3>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Mahasiswa
    </button>
    <br><br>
    <div class="flash-messages">
        <?php Flasher::flash(); ?>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['mahasiswa'] as $mhs) : ?>
                <tr>
                    <td><?= $mhs['id']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nrp']; ?></td> 
                    <td><?= $mhs['email']; ?></td>
                    <td><?= $mhs['jurusan']; ?></td>
                    <td>
                        <a href="<?= BASE_URL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= BASE_URL; ?>/mahasiswa/delete/<?= $mhs['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/mahasiswa/tambah" method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan" required>
              <option value="" selected disabled>Pilih Jurusan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Teknik Komputer">Teknik Komputer</option>
              <option value="Manajemen Informatika">Manajemen Informatika</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>