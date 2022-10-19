<?= $this->extend('homepage/layout/app') ?>

<?= $this->section('title') ?>
News Portal | Homepage
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<section id="detail-news" class="container-lg">
    <a href="/" class="my-3 btn bg-fuchsia-500 text-white ease duration-300 hover:bg-fuchsia-700">Kembali</a>
    <div class="row flex justify-content-center align-items-center mt-5">
        <div class="col-12 col-md-6">
            <div class="card mb-3 border border-0 shadow-lg" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://placeimg.com/500/800/arch" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title underline underline-offset-8 mb-3">Detail News</h5>
                            <p class="card-text"><?= $news['body'] ?></p>
                            <p class="card-text"><small class="text-muted">Author : <?= $news['author'] ?></small></p>
                            <p class="card-text"><small class="text-muted">Created at : <?= Carbon\Carbon::parse($news['created_at'])->format('M, d Y') ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>