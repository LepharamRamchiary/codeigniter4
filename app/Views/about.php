<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div><a href="<?= base_url()?>">Home</a></div>
<div class="content">
    <div class="section">
        <h2>Our Mission</h2>
        <p>We aim to create a positive impact through our services and products, focusing on quality and customer satisfaction. Our mission is to provide innovative solutions that meet the evolving needs of our users.</p>
    </div>

    <div class="section">
        <h2>Our Team</h2>
        <p>Our team consists of passionate individuals from diverse backgrounds, all working together to deliver the best experience for our customers. We value teamwork, innovation, and dedication in all that we do.</p>
    </div>

    <div class="section">
        <h2>Our History</h2>
        <p>Founded in 2020, we have grown from a small startup to a well-respected name in our industry. Our journey has been fueled by hard work, customer loyalty, and a commitment to excellence.</p>
    </div>
</div>

<?= $this->endSection(); ?>