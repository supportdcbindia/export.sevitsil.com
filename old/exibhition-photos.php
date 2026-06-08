<?php include('header.php'); ?>
  <!-- page title area start  -->
  <section class="page-title-area">
    <div class="container large">
      <div class="page-title-area-inner section-spacing-top">
        <div class="page-title-wrapper">
          <h2 class="page-title fade-anim">Exibhition Photos</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- page title area end  -->

  <!-- work area start  -->
  <section class="work-area-work-page gallery-page-main">
    <div class="work-area-work-page-inner">
      <div class="works-wrapper-box">
        <div class="container large">
          <div class="works-wrapper-8">
			<?php
				$data = glob("assets/imgs/inner-pages/about-us/gallery/Exibhition-photos/*.*");
			?> 
			<?php 
				foreach($data as $p){
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
			}?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- work area end  -->
<?php include('footer.php'); ?>