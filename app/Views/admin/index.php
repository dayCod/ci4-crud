<?= $this->extend('admin/layout/app') ?>

<!-- Title -->
<?= $this->section('title') ?>
News Portal | Admin
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>

<section id="admin-page">
    <div class="row justify-content-center align-items-center mt-5">
        <h1 class="text-center mb-3 underline underline-offset-8" style="font-size: 20pt;">News Data</h1>
        <p style="font-size:8pt" class="text-muted text-center">Hello <?= session()->get('email') ?></p>
        <div class="col-12 col-md-12">
            <div class="d-flex gap-2 mb-3">
                <a href="/admin/create" class="btn bg-fuchsia-600 text-white ease duration-300 hover:bg-fuchsia-700">Add News</a>
                <a href="/auth/logout" class="btn bg-fuchsia-600 text-white ease duration-300 hover:bg-fuchsia-700">Logout</a>
            </div>
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Author</th>
                        <th scope="col">Body</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1 ?>
                    <?php foreach ($data as $v) : ?>
                        <tr align="center">
                            <td><?= $num++ ?></th>
                            <td><?= $v['author'] ?></td>
                            <td><?= mb_strimwidth($v['body'], 0, 50, '...') ?></td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-outline-primary btn-sm">Delete</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?= $this->endSection() ?>