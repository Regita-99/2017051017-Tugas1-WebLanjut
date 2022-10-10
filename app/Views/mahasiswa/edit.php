<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-6">
        <form action="/update/<?= $mahasiswa['id'] ?>" method="post">
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" value="<?= $mahasiswa['npm'] ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="col-6">
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="deskripsi"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= $this->endSection('content'); ?>