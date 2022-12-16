<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eProject</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- header  -->
    <header id="#" class="header" style="background-image: url(<?php the_field('header-bg') ?>);">
        <nav class="navbar navbar-expand-lg mx-auto">
            <div class="container">
                <?php the_custom_logo(); ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#courses">courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts">contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="header-banner">
            <div class="container">
                <h1 class="header-title"><?php the_field('header-title') ?></h1>
                <p class="subtitle">
                    <?php the_field('header-text') ?>
                </p>
                <!-- ripple start  -->
                <button id="ripple" type="button" class="btn btn-lg header-btn">
                    Get Started
                </button>
                <!-- ripple end  -->
            </div>
        </div>
    </header>