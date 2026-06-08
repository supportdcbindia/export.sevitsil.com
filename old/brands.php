<!-- Clients area start  -->
<section class="sponsor-section p-relative z-1 pt-20 mb-30">
  <div class="container rr-container-1405 ">
    <div class="sponsor-text text-center">
      <h4 class="title mb-50">WE WORKED WITH GLOBAL LARGEST BRANDS</h4>
    </div>
    <div class="sponsor-carousel-2 swiper">
      <div class="swiper-wrapper">
        <?php
        $data = glob("assets/imgs/home-page/clients/*.*");
        ?>
        <?php
        foreach ($data as $p) {
        ?>
          <div class="swiper-slide">
            <div class="sponsor-item text-center">
              <a href="#"><img src="<?php echo $p; ?>" alt="sponsor"></a>
            </div>
          </div>
        <?php
        } ?>
      </div>
    </div>
  </div>
</section>
<!-- Clients area end  -->