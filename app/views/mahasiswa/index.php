<div class="container">
    <h3>Daftar Mahasiswa</h3>
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
