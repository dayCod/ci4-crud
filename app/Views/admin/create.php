<?= $this->extend('admin/layout/app') ?>

<!-- Title -->
<?= $this->section('title') ?>
News Portal | Admin
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>

<section id="admin-page">
    <div class="row justify-content-center align-items-center mt-5">
        <h1 class="text-center mb-3 underline underline-offset-8" style="font-size: 20pt;">Add News</h1>
        <div class="col-12 col-md-12">
            <a href="/admin/index" class="btn bg-fuchsia-600 text-white ease duration-300 hover:bg-fuchsia-700 mb-3">Kembali</a>
            <div class="card rounded-md shadow-lg p-4">
                <form action="/admin/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label class="mb-2">Author</label>
                        <input type="text" class="form-control" value="<?= session()->get('username') ?>" name="author" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="body">Body</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn bg-fuchsia-500 text-white ease duration-300 hover:bg-fuchsia-700">Create News</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>