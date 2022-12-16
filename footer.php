<!-- footer  -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <h3 class="footer-title">About</h3>
                <p class="footer-text">
                    <?php the_field('footer-about'); ?>
                </p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h3 class="footer-text">Menu</h3>
                <div class="footer-menu">
                    <ul class="footer-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#courses">Courses</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h3 class="footer-text">Useful Links</h3>
                <ul class="footer-list">
                    <li><a href="<?php the_field('footer-youtube') ?>">youtube</a></li>
                    <li><a href="<?php the_field('footer-facebook') ?>">facebook</a></li>
                    <li><a href="<?php the_field('footer-twitter') ?>">twitter</a></li>
                    <li><a href="<?php the_field('footer-instagram') ?>">instagram</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h3 class="footer-text">Contact Us</h3>

                <ul class="footer-list">
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        <p><?php the_field('footer-address') ?></p>
                    </li>
                    <li>
                        <i class="bi bi-telephone"></i>
                        <p class="">Call : <?php the_field('footer-phone') ?></p>
                    </li>
                    <li>
                        <i class="bi bi-envelope-at"></i>
                        <p class="">Email : <?php the_field('footer-email') ?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>