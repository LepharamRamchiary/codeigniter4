<?= $this->extend('layouts/main'); ?>

<?= $this->section('content') ?>


<div><a href="<?= base_url()?>about">About</a></div>
<!-- new collection -->
<section id="billboard" class="bg-light py-5">
    <?= $this->include("partials/newcollection");?>
</section>


<!-- icons -->
<section class="features py-5">
<?= $this->include("partials/icons");?>
</section>

<section class="categories overflow-hidden">
    <div class="container">
        <div class="open-up" data-aos="zoom-out">
            <div class="row">
                <div class="col-md-4">
                    <div class="cat-item image-zoom-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/cat-item1.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                        </div>
                        <div class="category-content">
                            <div class="product-button">
                                <a href="index.html" class="btn btn-common text-uppercase">Shop for men</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cat-item image-zoom-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/cat-item2.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                        </div>
                        <div class="category-content">
                            <div class="product-button">
                                <a href="index.html" class="btn btn-common text-uppercase">Shop for women</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cat-item image-zoom-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/cat-item3.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                        </div>
                        <div class="category-content">
                            <div class="product-button">
                                <a href="index.html" class="btn btn-common text-uppercase">Shop accessories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">Our New Arrivals</h4>
            <a href="index.html" class="btn-link">View All Products</a>
        </div>
        <div class="swiper product-swiper open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-1.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="index.html">Dark florish onepiece</a>
                                </h5>
                                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-2.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Baggy Shirt</a>
                                </h5>
                                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-3.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Cotton off-white shirt</a>
                                </h5>
                                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-4.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Crop sweater</a>
                                </h5>
                                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-10.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Crop sweater</a>
                                </h5>
                                <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
            </svg></div>
        <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
            </svg></div>
    </div>
</section>

<section class="collection bg-light position-relative py-5">
    <div class="container">
        <div class="row">
            <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
            <div class="collection-item d-flex flex-wrap my-5">
                <div class="col-md-6 column-container">
                    <div class="image-holder">
                        <img src="<?= base_url(); ?>/public/assets/images/single-image-2.jpg" alt="collection" class="product-image img-fluid">
                    </div>
                </div>
                <div class="col-md-6 column-container bg-white">
                    <div class="collection-content p-5 m-0 m-md-5">
                        <h3 class="element-title text-uppercase">Classic winter collection</h3>
                        <p>Dignissim lacus, turpis ut suspendisse vel tellus. Turpis purus, gravida orci, fringilla a. Ac sed eu
                            fringilla odio mi. Consequat pharetra at magna imperdiet cursus ac faucibus sit libero. Ultricies quam
                            nunc, lorem sit lorem urna, pretium aliquam ut. In vel, quis donec dolor id in. Pulvinar commodo mollis
                            diam sed facilisis at cursus imperdiet cursus ac faucibus sit faucibus sit libero.</p>
                        <a href="#" class="btn btn-dark text-uppercase mt-3">Shop Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="best-sellers" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">Best Selling Items</h4>
            <a href="index.html" class="btn-link">View All Products</a>
        </div>
        <div class="swiper product-swiper open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-4.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Dark florish onepiece</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-3.jpg" alt="product" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Baggy Shirt</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-5.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Cotton off-white shirt</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-6.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Handmade crop sweater</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-9.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Dark florish onepiece</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-10.jpg" alt="categories" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Cotton off-white shirt</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
            </svg></div>
        <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
            </svg></div>
    </div>
</section>

<section class="video py-5 overflow-hidden">
    <div class="container-fluid">
        <div class="row">
            <div class="video-content open-up" data-aos="zoom-out">
                <div class="video-bg">
                    <img src="<?= base_url(); ?>/public/assets/images/video-image.jpg" alt="video" class="video-image img-fluid">
                </div>
                <div class="video-player">
                    <a class="youtube" href="https://www.youtube.com/embed/pjtsGzQjFM4">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#play"></use>
                        </svg>
                        <img src="<?= base_url(); ?>/public/assets/images/text-pattern.png" alt="pattern" class="text-rotate">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials py-5 bg-light">
    <div class="section-header text-center mt-5">
        <h3 class="section-title">WE LOVE GOOD COMPLIMENT</h3>
    </div>
    <div class="swiper testimonial-swiper overflow-hidden my-5">
        <div class="swiper-wrapper d-flex">
            <div class="swiper-slide">
                <div class="testimonial-item text-center">
                    <blockquote>
                        <p>“More than expected crazy soft, flexible and best fitted white simple denim shirt.”</p>
                        <div class="review-title text-uppercase">casual way</div>
                    </blockquote>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-item text-center">
                    <blockquote>
                        <p>“Best fitted white denim shirt more than expected crazy soft, flexible</p>
                        <div class="review-title text-uppercase">uptop</div>
                    </blockquote>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-item text-center">
                    <blockquote>
                        <p>“Best fitted white denim shirt more white denim than expected flexible crazy soft.”</p>
                        <div class="review-title text-uppercase">Denim craze</div>
                    </blockquote>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-item text-center">
                    <blockquote>
                        <p>“Best fitted white denim shirt more than expected crazy soft, flexible</p>
                        <div class="review-title text-uppercase">uptop</div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
</section>

<section id="related-products" class="related-products product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">You May Also Like</h4>
            <a href="index.html" class="btn-link">View All Products</a>
        </div>
        <div class="swiper product-swiper open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-5.jpg" alt="product" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Dark florish onepiece</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-6.jpg" alt="product" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Baggy Shirt</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-7.jpg" alt="product" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Cotton off-white shirt</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-8.jpg" alt="product" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Handmade crop sweater</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>/public/assets/images/product-item-1.jpg" alt="product" class="product-image img-fluid">
                            </a>
                            <a href="index.html" class="btn-icon btn-wishlist">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="text-uppercase fs-5 mt-3">
                                    <a href="index.html">Handmade crop sweater</a>
                                </h5>
                                <a href="index.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-left"></use>
            </svg></div>
        <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
                <use xlink:href="#arrow-right"></use>
            </svg></div>
    </div>
</section>

<section class="blog py-5">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">Read Blog Posts</h4>
            <a href="index.html" class="btn-link">View All</a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="post-item">
                    <div class="post-image">
                        <a href="index.html">
                            <img src="<?= base_url(); ?>/public/assets/images/post-image1.jpg" alt="image" class="post-grid-image img-fluid">
                        </a>
                    </div>
                    <div class="post-content d-flex flex-wrap gap-2 my-3">
                        <div class="post-meta text-uppercase fs-6 text-secondary">
                            <span class="post-category">Fashion /</span>
                            <span class="meta-day"> jul 11, 2022</span>
                        </div>
                        <h5 class="post-title text-uppercase">
                            <a href="index.html">How to look outstanding in pastel</a>
                        </h5>
                        <p>Dignissim lacus,turpis ut suspendisse vel tellus.Turpis purus,gravida orci,fringilla...</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="post-item">
                    <div class="post-image">
                        <a href="index.html">
                            <img src="<?= base_url(); ?>/public/assets/images/post-image2.jpg" alt="image" class="post-grid-image img-fluid">
                        </a>
                    </div>
                    <div class="post-content d-flex flex-wrap gap-2 my-3">
                        <div class="post-meta text-uppercase fs-6 text-secondary">
                            <span class="post-category">Fashion /</span>
                            <span class="meta-day"> jul 11, 2022</span>
                        </div>
                        <h5 class="post-title text-uppercase">
                            <a href="index.html">Top 10 fashion trend for summer</a>
                        </h5>
                        <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="post-item">
                    <div class="post-image">
                        <a href="index.html">
                            <img src="<?= base_url(); ?>/public/assets/images/post-image3.jpg" alt="image" class="post-grid-image img-fluid">
                        </a>
                    </div>
                    <div class="post-content d-flex flex-wrap gap-2 my-3">
                        <div class="post-meta text-uppercase fs-6 text-secondary">
                            <span class="post-category">Fashion /</span>
                            <span class="meta-day"> jul 11, 2022</span>
                        </div>
                        <h5 class="post-title text-uppercase">
                            <a href="index.html">Crazy fashion with unique moment</a>
                        </h5>
                        <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="logo-bar py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="logo-content d-flex flex-wrap justify-content-between">
                <img src="<?= base_url(); ?>/public/assets/images/logo1.png" alt="logo" class="logo-image img-fluid">
                <img src="<?= base_url(); ?>/public/assets/images/logo2.png" alt="logo" class="logo-image img-fluid">
                <img src="<?= base_url(); ?>/public/assets/images/logo3.png" alt="logo" class="logo-image img-fluid">
                <img src="<?= base_url(); ?>/public/assets/images/logo4.png" alt="logo" class="logo-image img-fluid">
                <img src="<?= base_url(); ?>/public/assets/images/logo5.png" alt="logo" class="logo-image img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="newsletter bg-light" style="background: url(images/pattern-bg.png) no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 py-5 my-5">
                <div class="subscribe-header text-center pb-3">
                    <h3 class="section-title text-uppercase">Sign Up for our newsletter</h3>
                </div>
                <form id="form" class="d-flex flex-wrap gap-2">
                    <input type="text" name="email" placeholder="Your Email Addresss" class="form-control form-control-lg">
                    <button class="btn btn-dark btn-lg text-uppercase w-100">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="instagram position-relative">
    <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
        <a href="https://www.instagram.com/templatesjungle/" class="btn btn-dark px-5">Follow us on Instagram</a>
    </div>
    <div class="row g-0">
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="<?= base_url(); ?>/public/assets/images/insta-item1.jpg" alt="instagram" class="insta-image img-fluid">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="<?= base_url(); ?>/public/assets/images/insta-item2.jpg" alt="instagram" class="insta-image img-fluid">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="<?= base_url(); ?>/public/assets/images/insta-item3.jpg" alt="instagram" class="insta-image img-fluid">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="<?= base_url(); ?>/public/assets/images/insta-item4.jpg" alt="instagram" class="insta-image img-fluid">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="<?= base_url(); ?>/public/assets/images/insta-item5.jpg" alt="instagram" class="insta-image img-fluid">
                </a>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <div class="insta-item">
                <a href="https://www.instagram.com/templatesjungle/" target="_blank">
                    <img src="<?= base_url(); ?>/public/assets/images/insta-item6.jpg" alt="instagram" class="insta-image img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>