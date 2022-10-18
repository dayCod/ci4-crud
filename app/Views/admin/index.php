<?= $this->extend('admin/layout/app') ?>

<!-- Title -->
<?= $this->section('title') ?>
News Portal | Admin
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<h1>Ini Page <?= session()->get('email') ?></h1>
<a href="/auth/logout">Logout</a>
<?= $this->endSection() ?>