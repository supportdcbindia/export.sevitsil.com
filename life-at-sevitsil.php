<?php include('header.php'); ?>
<!-- page title area start  -->
<section class="page-title-area">
    <div class="container large">
        <div class="page-title-area-inner section-spacing-top">
            <div class="page-title-wrapper">
                <h2 class="page-title fade-anim">Life At Sevitsil </h2>
            </div>
        </div>
    </div>
</section>

<section class="CulturePage CustomBorderTop pt-0">
    <div class="base-template">
        <div class="wrapper base-template__wrapper">
            <div class="base-template__content">
                <div class="slider-section">
                    <div class="swiper background-swiper">
                        <div class="swiper-wrapper">

                            <!-- Background Slide 1 -->

                            <div class="swiper-slide slide" data-title="Dussehra" data-desc="" data-category="dussehra">
                                <img src="assets/imgs/culture/sliderThumb/small/dussehra-small.webp" alt="Dussehra" width="768" height="1024" loading="lazy">
                            </div>

                            <!-- Background Slide 2 -->

                            <div class="swiper-slide slide" data-title="International Women'S Day" data-desc="" data-category="international-womens-day">
                                <img src="assets/imgs/culture/sliderThumb/small/womens-day-small.webp" alt="International Women'S Day" width="768" height="1152" loading="lazy">
                            </div>

                            <!-- Background Slide 3 -->

                            <div class="swiper-slide slide" data-title="Navratri" data-desc="" data-category="navratri">
                                <img src="assets/imgs/culture/sliderThumb/small/navratri-small.webp" alt="Navratri" width="768" height="929" loading="lazy">
                            </div>

                            <!-- Background Slide 4 -->

                            <div class="swiper-slide slide" data-title="Recognition Awards" data-desc="" data-category="recognition-awards">
                                <img src="assets/imgs/culture/sliderThumb/small/awards-small.webp" alt="Recognition Awards" width="768" height="1152" loading="lazy">
                            </div>

                            <!-- Background Slide 5 -->

                            <div class="swiper-slide slide" data-title="Sports League" data-desc="" data-category="sports-league">
                                <img src="assets/imgs/culture/sliderThumb/small/sports-small.webp" alt="Sports League" width="768" height="768" loading="lazy">
                            </div>
                        </div>
                    </div>

                    <div class="centered-swiper swiper">
                        <div class="swiper-wrapper">

                            <!-- Centered Slide 1 -->

                            <div class="swiper-slide centered-swiper__slide">
                                <img src="assets/imgs/culture/sliderThumb/big/dussehra.webp" alt="Golden Silence" width="768" height="1024" loading="lazy">
                            </div>

                            <!-- Centered Slide 2 -->

                            <div class="swiper-slide centered-swiper__slide">
                                <img src="assets/imgs/culture/sliderThumb/big/womens-day.webp" alt="Frozen Majesty" width="768" height="1152" loading="lazy">
                            </div>

                            <!-- Centered Slide 3 -->

                            <div class="swiper-slide centered-swiper__slide">
                                <img src="assets/imgs/culture/sliderThumb/big/navratri.webp" alt="Hidden Beauty" width="768" height="929" loading="lazy">
                            </div>

                            <!-- Centered Slide 4 -->

                            <div class="swiper-slide centered-swiper__slide">
                                <img src="assets/imgs/culture/sliderThumb/big/awards.webp" alt="Sunlit Heights" width="768" height="1152" loading="lazy">
                            </div>

                            <!-- Centered Slide 5 -->

                            <div class="swiper-slide centered-swiper__slide">
                                <img src="assets/imgs/culture/sliderThumb/big/sports.webp" alt="Awakening Peaks" width="768" height="768" loading="lazy">
                            </div>

                        </div>
                    </div>

                    <!-- Sliders Buttons -->
                    <div class="ArrowWrapper">
                        <button class="slider-section__prev-button">
                            Prev
                        </button>
                        <button class="slider-section__next-button">
                            Next
                        </button>
                    </div>

                    <!-- Sliders Data -->

                    <h2 class="slider-section__title" id="slideTitle">
                    </h2>

                    <p class="slider-section__text" id="slideText">

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="CustomGallery">
        <div class="gallery">
            <div class="dussehra" data-category="dussehra">
                <div class="GalleryGrid">
                    <?php
                    $data = glob("assets/imgs/culture/dussehra/*.*");
                    ?>
                    <?php
                    foreach ($data as $p) {
                    ?>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View Exhibition">
                                    <a href="<?php echo $p; ?>" data-fancybox="gallery">
                                        <img src="<?php echo $p; ?>" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
            <div class="international women_s day" data-category="international-womens-day">
                <div class="GalleryGrid">
                    <?php
                    $data = glob("assets/imgs/culture/international-womens-day/*.*");
                    ?>
                    <?php
                    foreach ($data as $p) {
                    ?>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View Exhibition">
                                    <a href="<?php echo $p; ?>" data-fancybox="gallery">
                                        <img src="<?php echo $p; ?>" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>

            <div class="navratri" data-category="navratri">
                <div class="GalleryGrid">
                    <?php
                    $data = glob("assets/imgs/culture/navratri/*.*");
                    ?>
                    <?php
                    foreach ($data as $p) {
                    ?>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View Exhibition">
                                    <a href="<?php echo $p; ?>" data-fancybox="gallery">
                                        <img src="<?php echo $p; ?>" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>

            <div class="sevitsil recognition awards" data-category="recognition-awards">
                <div class="GalleryGrid">
                    <?php
                    $data = glob("assets/imgs/culture/sevitsil-recognition-awards/*.*");
                    ?>
                    <?php
                    foreach ($data as $p) {
                    ?>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View Exhibition">
                                    <a href="<?php echo $p; ?>" data-fancybox="gallery">
                                        <img src="<?php echo $p; ?>" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>

            <div class="sevitsil sports league" data-category="sports-league">
                <div class="GalleryGrid">
                    <?php
                    $data = glob("assets/imgs/culture/sevitsil-sports-league/*.*");
                    ?>
                    <?php
                    foreach ($data as $p) {
                    ?>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View Exhibition">
                                    <a href="<?php echo $p; ?>" data-fancybox="gallery">
                                        <img src="<?php echo $p; ?>" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include('footer.php'); ?>