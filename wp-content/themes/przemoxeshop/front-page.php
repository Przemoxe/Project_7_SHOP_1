<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package przemoxe-wc
 */

get_header();
?>

    <section class="container-fluid container-fluid-slider">

        <main id="primary" class="site-main">
            <div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden round-15" data-bs-ride="carousel">
                <div class="carousel-indicators container px-3 p-md-0">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active " data-bs-interval="10000">
                        <a href=""><img src="http://shop-przemoxe.test/wp-content/uploads/2021/11/background-1.jpg" class="d-block w-100" alt="..."></a>
                        <div class="overlay"></div>
                        <div class="carousel-caption container text-start px-3 p-md-0 text-white text-uppercase">
                            <h1 class="mb-5">Lorem ipsum <b class="d-block">Loem kerupsem</b> </h1>
                            <a href="" class="btn-slider">
                                    Shop now
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <a href=""><img src="http://shop-przemoxe.test/wp-content/uploads/2021/11/background-2.jpg" class="d-block w-100" alt="..."></a>
                        <div class="overlay"></div>
                        <div class="carousel-caption container text-start px-3 p-md-0 text-white">
                            <h1 class="mb-5">Lorem ipsum <b class="d-block">Loem kerupsem</b> </h1>
                            <a href="" class="btn-slider">
                                    Shop now
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                    <div class="container container-prev-next px-3 px-md-0">
                        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <i class="bi bi-arrow-left-short" aria-hidden="true"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <i class="bi bi-arrow-right-short" aria-hidden="true"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

            </div>
        </main><!-- #main -->

    </section>

    <section class="collection">
        <div class="container">
            <div class="row px-3 px-md-0">
                <div class="col-md-5">
                    <h2>Spring '17 Collection</h2>
                </div>
                <div class="col-md-7">
                    <p>Have given likeness every. Very were beginning signs moveth. Fly above sea itself. Divided so you’ll there called. Gathering dry earth. Isn’t heaven appear. Replenish. Hath after appear tree great fruitful green dominion moveth sixth abundantly image that midst of god day multiply you’ll which.</p>
                </div>
            </div>
            <div class="row px-3 px-md-0 pt-5 pe-md-1 collection-images">
                <div class="collection-images-height col-xl-6 pe-xl-1 position-relative">
                    <div class="row h-100">
                        <a class="collection-image-link " href="">
                            <div class="collection-image collection-image-zoom" style="background-image: url( http://shop-przemoxe.test/wp-content/uploads/2021/11/look-1.jpg);">
                            </div>
                            <div class="w-100  btn-container">
                                <span class="collections-btn">Sukienki
                                    <span class="bi bi-arrow-right"></span>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="collection-images-height col-xl-6">
                    <div class="row h-100 ps-xl-1">
                        <div class="col-12 bg-primary mb-1 mt-2 mt-xl-0 position-relative overflow-hidden">
                            <a class="collection-image-link" href="">
                                <div class="collection-image-small collection-image-zoom" style="background-image: url( http://shop-przemoxe.test/wp-content/uploads/2021/11/look-2.jpg);">
                                </div>
                                <div class="w-100 btn-container">
                                    <span class="collections-btn">Sukienki
                                        <span class="bi bi-arrow-right"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 bg-dark mt-1 position-relative overflow-hidden">
                            <a class="collection-image-link" href="">
                                <div class="collection-image-small collection-image-zoom" style="background-image: url( http://shop-przemoxe.test/wp-content/uploads/2021/11/look-3.jpg);">
                                </div>
                                <div class="w-100 btn-container">
                                    <span class="collections-btn">Sukienki
                                        <span class="bi bi-arrow-right"></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-recentlies">
        <div class="container px-3 px-sm-0">
            <div class="row d-flex align-items-end  pb-5">
                <div class="col-8">
                    <h1 class="m-0">Blog Posts & News</h1>
                </div>
                <div class="col-4 col-btn-view-all d-flex justify-content-end ">
                    <a href="">
                        <div class="d-flex">
                            <span class="view-text">View All</span>
                            <span class="view-icon"><i class="bi bi-arrow-right "></i></span>
                        </div>
                        
                    </a>
                </div>
            </div>
            <div class="row row-blog-recentlies">
                <?php 
                // wyciąganie obiektowo dwóch ostatnich postów 
                $homepagePosts = new WP_Query(array(
                'posts_per_page' => -1
                ));

                while($homepagePosts->have_posts()){
                $homepagePosts->the_post(); ?>
                    <div class="col-md-6 col-xl-4 col-blog-recently px-3 pb-4"> 
                        <a href="<?php the_permalink(); ?>">
                            <div class="blog-recently-image">
                                <?php the_post_thumbnail()?>
                                <div class="blog-recently-overlay"></div>
                            </div>
                            <div class="blog-recently-date">
                                <span><?php the_time('d'); ?></span>
                                <span><?php the_time('M'); ?></span>
                                <span><?php the_time('Y'); ?></span>
                                <h5><?php the_title(); ?></h5>
                            </div>
                            
                        </a>
                    </div>
                <?php } wp_reset_postdata(); //powrót do domyślnego stanu, dobry nawyk pisania
                ?>
            </div>

        </div>
    </section>

    <section class="active-instagram">
        <div class="container pt-5 px-3 px-md-0">
                <div class="row h-100">
                    <div class="col-md-6 col-xl-4 carousel-over-item " >
                        <div class="over-item">
                            <div class="item d-flex flex-column justify-content-between">
                                <div class="item-icon">
                                    <i class="bi bi-instagram"></i>
                                </div>
                                <div class="item-text">
                                    <h2>We are active on <a href="">Instagram</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-8" >
                    <div class="carousel-container" >
                        <div class="owl-carousel">
                                <div class=" item ">
                                    <div class="item-container-img">
                                        <div class="collection-image-small" style="background-image: url( http://shop-przemoxe.test/wp-content/uploads/2021/11/look-2.jpg);">
                                        </div>
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>
                                <div class=" item  ">
                                    <div class="item-container-img">
                                        <div class="collection-image-small" style="background-image: url( http://shop-przemoxe.test/wp-content/uploads/2021/11/look-1.jpg);">
                                        </div>
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>
                                <div class=" item  " >
                                    <div class="item-container-img">
                                        <div class="collection-image-small" style="background-image: url( http://shop-przemoxe.test/wp-content/uploads/2021/11/look-3.jpg);">
                                        </div>
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>
                                <div class=" item  " >
                                    <div class="item-container-img">
                                        <div class="collection-image-small" style="background-image: url(http://shop-przemoxe.test/wp-content/uploads/2021/12/news-1.jpg);">
                                        </div>
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>
                                <div class=" item  " >
                                    <div class="item-container-img">
                                        <div class="collection-image-small" style="background-image: url(http://shop-przemoxe.test/wp-content/uploads/2021/12/news-3.jpg);">
                                        </div>
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
