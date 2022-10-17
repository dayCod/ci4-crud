<?= $this->extend('auth/layout/app') ?>

<?= $this->section('title') ?>
News Portal | Register Form
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="flex justify-center items-center min-h-screen">
    <div class="card flex flex-col items-center shadow-xl md:flex-row gap-5">
        <figure><img src="https://placeimg.com/400/400/arch" alt="Album" /></figure>
        <div class="card-body mb-5 md:mr-5">
            <h1 class="text-center text-xl mb-3"><span class="text-fuchsia-500">Register</span> Form</h1>
            <form action="" method="">
            
            <div class="mb-3">
                <input type="text" placeholder="Username" name="username" class="input input-bordered w-full max-w-xs focus:outline-fuchsia-300" />
            </div>
            
            <div class="mb-3">
                <input type="email" placeholder="Email" name="email" class="input input-bordered w-full max-w-xs focus:outline-fuchsia-300" />
            </div>

            <div class="mb-3">
                <input type="password" placeholder="Password" name="password" class="input input-bordered w-full max-w-xs focus:outline-fuchsia-300" />
            </div>

            <div class="mb-3">
                <button type="submit" class="bg-fuchsia-400 text-white btn-block py-2 rounded-md ease-out duration-200 hover:bg-fuchsia-600">Register</button>
                <p class="text-xs mt-2">Already have an account ? <a href="/auth/login" class="text-fuchsia-500 hover:text-fuchsia-600">Click Here</a> </p>
            </div>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>