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
                                    <a href="/admin/edit/<?= $v['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <button id="delete-btn" class="btn btn-outline-primary btn-sm" data-href="/admin/destroy/<?= $v['id'] ?>">Delete</button>
                                    <form action="" method="POST" id="delete-form">
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
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

<?= $this->section('script') ?>
<script>
    $(document).ready(function() {
        $('button#delete-btn').each(function(e) {
            $(this).click(function() {
                let href = $(this).data('href')
                if(window.confirm('Apakah Anda Ingin Menghapus Data Ini')) {
                    $('#delete-form').attr('action', href).submit()
                } else {
                    window.location.href = '/admin/index'
                }
            })
        })
    })
</script>
<?= $this->endSection() ?>