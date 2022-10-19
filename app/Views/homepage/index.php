<?= $this->extend('homepage/layout/app') ?>

<?= $this->section('title') ?>
News Portal | Homepage
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<section class="container-lg">
    <div class="news">
        <h1 class="text-xl mt-5 underline underline-offset-8 mb-3">News</h1>
        <div class="row mt-2 flex justify-center items-center md:justify-start">
            <?php foreach($news as $v): ?>
            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="card border-none shadow-xl mb-2 md:w-80">
                    <div style="background: url(https://placeimg.com/400/400/arch); background-position:center;background-repeat:no-repeat;background-size:cover;" class="h-56"></div>
                    <div class="card-body">
                        <p class="card-text"><?= mb_strimwidth($v['body'], 0, 50, '...') ?></p>
                    </div>
                    <div class="d-grid px-3">
                        <a href="/<?= $v['id'] ?>" class="bg-fuchsia-400 text-center py-1 mb-3 text-white rounded-md fw-bold ease duration-300 hover:bg-fuchsia-600">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="top-news">
    <h1 class="text-xl mt-5 underline underline-offset-8 mb-3">Top News</h1>
        <div class="row mt-2 flex justify-center items-center">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card border-none shadow-xl mb-5" style="width: 18rem;">
                    <div style="background: url(https://placeimg.com/400/400/arch); background-position:center;background-repeat:no-repeat;background-size:cover;" class="h-56"></div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="d-grid px-3">
                        <a href="" class="bg-fuchsia-400 text-center py-1 mb-3 text-white rounded-md fw-bold ease duration-300 hover:bg-fuchsia-600">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card border-none shadow-xl mb-5" style="width: 18rem;">
                    <div style="background: url(https://placeimg.com/400/400/arch); background-position:center;background-repeat:no-repeat;background-size:cover;" class="h-56"></div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="d-grid px-3">
                        <a href="" class="bg-fuchsia-400 text-center py-1 mb-3 text-white rounded-md fw-bold ease duration-300 hover:bg-fuchsia-600">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card border-none shadow-xl mb-5" style="width: 18rem;">
                    <div style="background: url(https://placeimg.com/400/400/arch); background-position:center;background-repeat:no-repeat;background-size:cover;" class="h-56"></div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="d-grid px-3">
                        <a href="" class="bg-fuchsia-400 text-center py-1 mb-3 text-white rounded-md fw-bold ease duration-300 hover:bg-fuchsia-600">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>