<?php
/*
Template Name: Home
Template Post Type: page
*/
?>

<?php get_header(); ?>

<main class="main">
    <!-- about -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-5">

                    <h2 class="about-title"><?php the_field('about-title'); ?></h2>
                    <p class="about-subtitle">
                        <?php the_field('about-subtitle'); ?>
                    </p>
                    <button type="button" class="btn btn-primary btn-lg about-btn">
                        read more
                    </button>
                </div>

                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="<?php the_field('about-img'); ?>" alt="#!" />
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-img.png" alt="#!" /> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- courses -->
    <section id="courses" class="courses">
        <div class="container">
            <h2 class="courses-title"><?php the_field('courses-title'); ?></h2>
            <p class="courses-subtitle">
                <?php the_field('courses-subtitle'); ?>
            </p>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                    ?>
                            <div class="carousel-item active">
                                <?php the_post_thumbnail('', array('class' => "carousel-item--img")); ?>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?php the_title(); ?></h5>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                            </div>
                    <?php
                        }
                    }

                    wp_reset_postdata();
                    ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- blog -->
    <!-- <section id="blog" class="blog" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/blog-bg.png" )> -->
    <section id="blog" class="blog" style="background-image: url(<?php the_field('blog-bg') ?>" )>
        <div class=" container">
            <h2 class="blog-title"><?php the_field('blog-title') ?></h2>
            <p class="blog-subtitle">
                <?php the_field('blog-subtitle') ?>
            </p>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="blog-text"><?php the_field('blog-text'); ?></h3>
                    <p class="blog-subtext">
                        <?php the_field('blog-subtext'); ?>
                    </p>
                    <button type="button" class="btn btn-primary btn-lg blog-btn">
                        read more
                    </button>
                </div>
                <div class="col-md-6">
                    <div class="blog-img">
                        <img src="<?php the_field('blog-img') ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts -->
    <section id="contacts" class="contacts">
        <div class="container">
            <h2 class="blog-title"><?php the_field('contacts-title') ?></h2>
            <p class="blog-subtitle">
                <?php the_field('contacts-subtitle') ?>
            </p>

            <div class="row">
                <div class="col-lg-8">
                    <div class="contacts-map">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="500" frameborder="0" style="border: 0; width: 100%" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating mb-3">
                        <?php echo FrmFormsController::get_form_shortcode(array('id' => 3)); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>