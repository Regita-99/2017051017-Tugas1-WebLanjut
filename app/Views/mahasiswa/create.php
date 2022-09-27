<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="p-4">
    <form action="/store" method="post">
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" name="npm" class="form-control" id="npm">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection('content'); ?>