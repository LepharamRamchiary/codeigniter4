<?php
// echo "<pre>";
// print_r($title);
// print_r($desc);
$this->extend('layouts/main');
?>
<?= $this->section("titles"); ?>
<?= $main_title ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
<!-- Main Body Section -->
<main>
    <h2><?= $main_title ?></h2>
    <p><?= $desc ?></p>
</main>
<?= $this->endSection(); ?>