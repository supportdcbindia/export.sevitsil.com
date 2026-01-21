<?php include('header.php'); ?>
<div class="banner" id="banner">
    <div class="slide-banner">
        <div class="item">
            <picture>
                <source media="(max-width: 767px)" srcset="./assets/images/banner/sevitsil-mob-1.webp">
                <img src="./assets/images/banner/sevitsil-1.webp">
            </picture>
        </div>

        <div class="item">
            <picture>
                <source media="(max-width: 767px)" srcset="./assets/images/banner/sevitsil-mob-2.webp">
                <img src="./assets/images/banner/sevitsil-2.webp">
            </picture>
        </div>
        <div class="item">
            <picture>
                <source media="(max-width: 767px)" srcset="./assets/images/banner/sevitsil-mob-3.webp">
                <img src="./assets/images/banner/sevitsil-3.webp">
            </picture>
        </div>
    </div>
</div>


<div class="rts-trusted-client" id="client">
    <div class="container-fluid">
        <div class="responsive-slider">
            <?php
            $data = glob("./assets/images/clients/*.*");
            ?>
            <?php
            foreach ($data as $b) {
            ?>
            <div class="slick-item">
                <div class="client">
                    <img class="d-block w-100" alt="..." src="<?php echo $b; ?>">
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>







<div class="aboutSec custompending bg same-space" id="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aboutContent">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;">
                        <span>SEVITSIL</span> <br> SOLUTION IN SILICON
                    </h2>


                    <div class="desc">
                        <p>Since 1975 SEVITSIL is one of the India’s oldest & leading Silicone & FKM products manufactures meeting up with diversified needs of customer with wide range of products. A few to name has put us on the verge of innovation &customization, leading to high customer satisfaction. Astoundingly our world class range of “extrusions” vary from 0.15 mm id to 350 mm id, providing the end user a number of variety to choose with. The application of Silicone & FKM in endless products have pushed Sevitsil to various industries.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
               
                    <div class="video-content">
                        <img src="./assets/images/video-thumbnail.webp" alt="banner">
                        <a class="play-btn popup-youtube"
                            href="https://www.youtube.com/watch?v=JmSDQr2rXWs">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                
            </div>
        </div>
    </div>
</div>

<!-- start gallery section -->
<div class="rts-gallery-area  bg_image same-space" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper-gallery-project">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">PRODUCT</span>
                        <span class="pre brand-text d-none d-md-block">Our Product</span>
                        <h2 class="title rts-text-anime-style-1">Explore Our Product
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid custome-container">
        <div class="row">
            <div class="tab-div">
                <ul class="tabs">
                    <li class="active tab" rel="tab1">Medical Industry</li>
                    <li class="tab" rel="tab2">Pharma & Labtech Industry</li>
                    <li class="tab" rel="tab3">Electrical Industry</li>
                    <li class="tab" rel="tab4">Defence & Aerospace</li>
                    <li class="tab" rel="tab5">Rail & Automotive</li>
                </ul>
                <div class="tab_container">
                    <h3 class="d_active tab_drawer_heading" rel="tab1">Medical Industry</h3>
                    <div id="tab1" class="tab_content">
                        <div class="row gy-2 gy-lg-3 relative product-row my-3 my-md-0">
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/tubing/cannusil-tubing.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Cannusil
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascript:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/tubing/suction-tube.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Suction Tube
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/tubing/multi-lumen.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Multi Lumen
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/menstrual-cup.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Menstrual Cup
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/foley-catheter.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Foley Catheter
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/ventilator-circuit.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Ventilator Circuit
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/vessel-loops.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Vessel Loops
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/peg-tube.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Peg Tube
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/medical-industry/feeding-tube.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Feeding Tube
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #tab1 -->
                    <h3 class="tab_drawer_heading" rel="tab2">Pharma & Labtech Industry</h3>
                    <div id="tab2" class="tab_content">
                        <div class="row gy-2 gy-lg-3 relative product-row my-3 my-md-0">
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/pharma-labtech-industry/silitrans.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            SiliTrans
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/pharma-labtech-industry/silipure-tubings.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            SiliPure
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/pharma-labtech-industry/single-use-assemblies.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Single Use Assemblies
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/pharma-labtech-industry/hoses.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Hoses
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/pharma-labtech-industry/container-closure.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Container Closures
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #tab2 -->
                    <h3 class="tab_drawer_heading" rel="tab3">Electrical Industry</h3>
                    <div id="tab3" class="tab_content">
                        <div class="row gy-2 gy-lg-3 relative product-row my-3 my-md-0">
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class=" project-style-one">

                                    <div class="producy-multipal">
                                        <div class=" item">
                                            <img class="d-block w-100" alt="..."
                                                src="./assets/images/product/electrical-industry/kavachsil/kavachsil-1.webp">

                                        </div>
                                        <div class=" item">
                                            <img class="d-block w-100" alt="..."
                                                src="./assets/images/product/electrical-industry/kavachsil/kavachsil-2.webp">

                                        </div>
                                        <div class=" item">
                                            <img class="d-block w-100" alt="..."
                                                src="./assets/images/product/electrical-industry/kavachsil/kavachsil-3.webp">

                                        </div>
                                        <div class=" item">
                                            <img class="d-block w-100" alt="..."
                                                src="./assets/images/product/electrical-industry/kavachsil/kavachsil-4.webp">

                                        </div>

                                    </div>

                                    <div class="inner-content">
                                        <h5 class="title">
                                            Insulation Sleeve
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/electrical-industry/insulation-sleeve.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Insulation Sleeve
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/electrical-industry/waterproofing-gasket.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Waterproofing Gasket
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- #tab3 -->
                    <h3 class="tab_drawer_heading" rel="tab4">Defence & Aerospace</h3>
                    <div id="tab4" class="tab_content">
                        <div class="row gy-2 gy-lg-3 relative product-row my-3 my-md-0">
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/defence-aerospace/emi-shielding-gasket.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            EMI Shielding Gasket
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/defence-aerospace/conductive-silicone.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Conductive Silicone
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <h3 class="tab_drawer_heading" rel="tab5">Rail & Automotive</h3>
                    <div id="tab5" class="tab_content">
                        <div class="row gy-2 gy-lg-3 relative product-row my-3 my-md-0">
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/rail-automotive/silicone-cables.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            Silicone Cables
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xl-4 col-6 mb-md-5">
                                <div class="project-style-one">
                                    <img class="d-block w-100" alt="..."
                                        src="./assets/images/product/rail-automotive/high-temp.webp">
                                    <div class="inner-content">
                                        <h5 class="title">
                                            High Temperature Profiles
                                        </h5>
                                        <div class="product-button text-center">
                                            <a href="javascritp:;" class="rts-btn btn-primary btn-them click1">Enquire
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>







                    <!-- #tab4 -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start gallery section -->



<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="bottom-box">
                <div class="auto-container">
                    <div class="inner-box">
                        <p class="text">Providing Greatest Quality Products For Consumers<a href="javascript:;"
                                class="click1">Request A
                                Quote</a>
                        </p>
                        <div class="btn-box">
                            <i class="icon fa fa-phone"></i>
                            <a href="tel:+918141601666" class="rts-cta"><span class="btn-title"> +91 81416
                                    01666</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="wcu-area-2 background-image" style="background-image: url(.../../assets/images/brand/bg.webp);">
    <div class="container-fluid p-0">
        <div class="row gx-0">
            <div class="col-xl-6">
                <div class="wcu-thumb2 mt-n1">
                    <img src="assets/images/brand/counter-image.webp" alt="img">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="wcu-wrap space-top">

                    <div class="title-area-between-wrapper-gallery-project">
                        <div class="title-style-two mb-2 mb-md-0 left">
                            <span class="bg-content">BRAND </span>
                            <span class="pre brand-text d-none d-md-block">BRAND</span>
                            <h2 class="title rts-text-anime-style-1">Brand Promise</h2>
                        </div>
                    </div>

                    <P>SEVITSIL (Suresh Enterprises) positions itself as a 360° engineering-driven silicone
                        solutions provider, leveraging over 50 years of legacy, state‑of‑the‑art clean‑room
                        manufacturing, and a globally‑recognized compliance framework to deliver consistent,
                        high‑performance silicone products across 18+ industries </P>


                    <div class="img-bottom">
                        <img src="./assets/images/brand/50-years-experience.webp" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container space-top pt-xl-0 pb-xl-0">
    <div class="counter-area2 text-center background-image"
        style="background-image: url(.../../assets/images/dotted-map-2.webp);background-color: #fff;box-shadow: 0px 0px 1px 2px #efefef;">
        <div class="row gy-5 justify-content-center">
            <div class="col-md-6 col-xl-3 col-6">
                <div class="counter-card2">
                    <div class="counter-card_icon">
                        <img src="assets/images/brand/icon/country-delivered.webp" alt="icon">
                    </div>
                    <div class="card-details">
                        <h2 class="counter title"><span class="odometer" data-count="35">00</span>+
                        </h2>
                        <p class="counter-card_text">Country Delivered</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-6">
                <div class="counter-card2">
                    <div class="counter-card_icon">
                        <img src="assets/images/brand/icon/iso-certification.webp" alt="icon">
                    </div>
                    <div class="card-details">
                        <h2 class="counter title"><span class="odometer" data-count="5">00</span>+
                        </h2>
                        <p class="counter-card_text">ISO Certification</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-6">
                <div class="counter-card2">
                    <div class="counter-card_icon">
                        <img src="assets/images/brand/icon/team-strength.webp" alt="icon">
                    </div>
                    <div class="card-details">
                        <h2 class="counter title"><span class="odometer" data-count="350">00</span>+
                        </h2>
                        <p class="counter-card_text">Team Strength</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-6">
                <div class="counter-card2">
                    <div class="counter-card_icon">
                        <img src="assets/images/brand/icon/skus-products.webp" alt="icon">
                    </div>
                    <div class="card-details">
                        <h2 class="counter title"><span class="odometer" data-count="12000">00</span>+
                        </h2>
                        <p class="counter-card_text">SKUS Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="rts-client-review-area same-space d-none d-md-block pb-0" id="application">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">APPLICATION</span>
                        <span class="pre">Application</span>
                        <h2 class="title ">Industries We Serve
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <disdv class="tab-wrapper">

        <div class="tab tab-left">
            <button class="tablinks" data-city="firstTab" onclick="openTab(event, 'firstTab')" id="defaultOpen">
                <div class="num-title"><span>01</span>Pharma & Biotech</div>
                <div class="btn-theme-3"><i class="fas fa-arrow-right"></i></div>
            </button>

            <button class="tablinks" data-city="secondTab" onclick="openTab(event, 'secondTab')">
                <div class="num-title"><span>02</span>Medical Devices</div>
                <div class="btn-theme-3"><i class="fas fa-arrow-right"></i></div>
            </button>
            <button class="tablinks" data-city="thirdTab" onclick="openTab(event, 'thirdTab')">
                <div class="num-title"><span>03</span>Electrical Insulation</div>
                <div class="btn-theme-3"><i class="fas fa-arrow-right"></i></div>

            </button>
            <button class="tablinks" data-city="fourTab" onclick="openTab(event, 'fourTab')">
                <div class="num-title"><span>04</span>Automotives</div>
                <div class="btn-theme-3"><i class="fas fa-arrow-right"></i></div>
            </button>
            <button class="tablinks" data-city="fiveTab" onclick="openTab(event, 'fiveTab')">
                <div class="num-title"><span>05</span>Chemicals</div>
                <div class="btn-theme-3"><i class="fas fa-arrow-right"></i></div>
            </button>

        </div>

        <div class="tab-right">
            <div id="firstTab" class="tabcontent">
                <div class="tab-image">
                    <img src="./assets/images/industry/pharma-&-biotech.webp">
                </div>
            </div>

            <div id="secondTab" class="tabcontent">
                <div class="tab-image">
                    <img src="./assets/images/industry/medical-devices.webp">
                </div>
            </div>
            <div id="thirdTab" class="tabcontent">
                <div class="tab-image">
                    <img src="./assets/images/industry/electrical-insulation.webp">
                </div>
            </div>
            <div id="fourTab" class="tabcontent">
                <div class="tab-image">
                    <img src="./assets/images/industry/automotives.webp">
                </div>
            </div>
            <div id="fiveTab" class="tabcontent">
                <div class="tab-image">
                    <img src="./assets/images/industry/chemicals.webp">
                </div>
            </div>

        </div>
    </disdv>
</div>

<!-- rts clients review area start -->

<div class="rts-client-review-area p-0 d-block d-md-none " id="application">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper" dir="ltr">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Application</span>
                        <span class="pre brand-text d-none d-md-block">Application</span>
                        <h2 class="title ">Industries We Serve
                        </h2>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonials-wrapper-swip">
                    <div class="ind-slider">
                        <div class="single-why-choose-four">
                            <a href="#" class="thumbnail">
                                <img class="d-block w-100" alt="..."
                                    src="./assets/images/industry/pharma-&-biotech.webp">
                            </a>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">
                                        Pharma & Biotech
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="single-why-choose-four">
                            <a href="#" class="thumbnail">
                                <img class="d-block w-100" alt="..."
                                    src="./assets/images/industry/medical-devices.webp">
                            </a>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">
                                        Medical Devices
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="single-why-choose-four">
                            <a href="#" class="thumbnail">
                                <img class="d-block w-100" alt="..."
                                    src="./assets/images/industry/electrical-insulation.webp">
                            </a>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">
                                        Electrical Insulation
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="single-why-choose-four">
                            <a href="#" class="thumbnail">
                                <img class="d-block w-100" alt="..." src="./assets/images/industry/automotives.webp">
                            </a>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">
                                        Automotives
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="single-why-choose-four">
                            <a href="#" class="thumbnail">
                                <img class="d-block w-100" alt="..." src="./assets/images/industry/chemicals.webp">
                            </a>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">
                                        Chemicals
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="Presence-sec same-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper-gallery-project">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">PRESENCE</span>
                        <span class="pre brand-text d-none d-md-block">Presence & Representatives </span>
                        <h2 class="title rts-text-anime-style-1">Presence & Representatives
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="present-list">
                    <ul>
                        <li class="simplicity-button  blue">
                            <div class="icon-circle">
                                <div class="icon-drop">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="simplicity-text">Belgium </div>
                        </li>
                        <li class="simplicity-button green">
                            <div class="icon-circle">
                                <div class="icon-drop">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="simplicity-text">Netherland </div>
                        </li>
                        <li class="simplicity-button red">
                            <div class="icon-circle">
                                <div class="icon-drop">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="simplicity-text">Luxembourg </div>
                        </li>
                        <li class="simplicity-button blue">
                            <div class="icon-circle">
                                <div class="icon-drop">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="simplicity-text">Russia</div>
                        </li>
                        <li class="simplicity-button orange">
                            <div class="icon-circle">
                                <div class="icon-drop">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="simplicity-text">US</div>
                        </li>
                        <li class="simplicity-button pink">
                            <div class="icon-circle">
                                <div class="icon-drop"><i class="fas fa-map-marker-alt"></i></div>
                            </div>
                            <div class="simplicity-text">UK</div>
                        </li>
                        <li class="simplicity-button orange">
                            <div class="icon-circle">
                                <div class="icon-drop">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="simplicity-text">Germany</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-why-choose-us-section-8 " id="about">
    <div class=" container-fluid custom-container p-0">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-us-thumbnail">
                    <img src="assets/images/why-us/why-choose-us.webp" alt="why">
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="why-choose-8-wrapper-content">
                    <div class="title-style-five why-title mb--40">
                        <span class="pre brand-text d-none d-md-block">Why Choose</span>
                        <h3 class="title rts-text-anime-style-1">Why Choose Sevitsil?
                        </h3>
                    </div>
                    <div class="single-feature-service-wrapper-8">
                        <div class="icon">
                            <img src="assets/images/why-us/knowledge-is-the-key.webp" alt="icon">
                        </div>
                        <div class="inner-wrapper">
                            <h4 class="title">Knowledge is the key</h4>
                            <p class="disc">
                                Our greatest asset is our deep expertise, continuously refined through hands-on
                                innovation.

                            </p>
                        </div>
                    </div>
                    <div class="single-feature-service-wrapper-8">
                        <div class="icon">
                            <img src="assets/images/why-us/sometimes-quality-is-quantity .webp" alt="icon">
                        </div>
                        <div class="inner-wrapper">
                            <h4 class="title"> Sometimes, Quality is Quantity</h4>
                            <p class="disc">
                                Menstrual cups offer a sustainable alternative to sanitary pads, improving lives and
                                protecting the environment.

                            </p>
                        </div>
                    </div>
                    <div class="single-feature-service-wrapper-8">
                        <div class="icon">
                            <img src="assets/images/why-us/we-have-the-expertise-you-need.webp" alt="icon">
                        </div>
                        <div class="inner-wrapper">
                            <h4 class="title"> We Have The Expertise You Need</h4>
                            <p class="disc">
                                The 1 mm silicone ball may appear simple, but it requires advanced molds, precision
                                machinery, and expert processing.

                            </p>
                        </div>
                    </div>
                    <!-- <div class="single-feature-service-wrapper-8">
                            <div class="icon">
                                <img src="assets/images/why-us/we-manufacture-precisely-what-you-need.webp" alt="icon">
                            </div>
                            <div class="inner-wrapper">
                                <h4 class="title">We Manufacture Precisely What You Need </h4>
                                <p class="disc">
                                   Customers trust us for our flexibility and ability to meet exact specifications in materials, hygiene, cost, and production scale.

                                </p>
                            </div>
                        </div> -->



                </div>
            </div>
        </div>
    </div>
</div>
<div class="business-goal-area-2 same-space ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper-gallery-project">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">MAP</span>
                        <span class="pre pre brand-text d-none d-md-block">Our Map</span>
                        <h2 class="title rts-text-anime-style-1">Our Global Presence
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="thumbnail-business">
                    <div class="large-thumbnail">
                        <img class="destop-map" src="./assets/images/map/map.webp" alt="map">
                        <img class="mob-map" src="./assets/images/map/mob-map.webp" alt="map">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="side-bar" class="side-bar header-two ">
    <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="index.php">
            <img src="./assets/images/logo/sevitsil-logo.webp" alt="index">
        </a>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">

                <li>
                    <a href="#index" class="main" aria-expanded="false">Home</a>
                </li>
                <li>
                    <a href="#aboutus" class="main" aria-expanded="false">About us</a>
                </li>
                <li>
                    <a href="#product" class="main" aria-expanded="false">Product</a>
                </li>
                <li>
                    <a href="#application" class="main" aria-expanded="false">Application</a>
                </li>
                <li>
                    <a href="#client" class="main" aria-expanded="false">Client</a>
                </li>
                <li>
                    <a href="#contactus" class="main" aria-expanded="false">Contact Us</a>
                </li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#" aria-label="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- inner menu area desktop End -->


<section class="contact-sec lightblue-bg bg" id="contactus">
    <div class="container max-width">
        <div class="row align-items-center  flex-lg-row-reverse">
            <div class="col-12 col-lg-6 text-lg-left position-relative">
                <div class="appoinment-main-wrapper-7 my-custom-modal">
                    <form class="form-horizontal form3" action="inquiry-action.php" method="post"
                        novalidate="novalidate">
                        <span class="mb-3">Request More Information</span>
                        <div class="row">
                            <div class="col-md-7 col-12">
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <input name="name" id="name" type="text" placeholder="Name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <input name="company_name" id="company_name" type="text"
                                            placeholder="Company Name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group has-feedback class-feedback">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 mybottom"
                                                style="padding: 0px 10px;">
                                                <select id="country2" name="country" class="form-control"></select>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4 mybottom" style="display: none;">
                                                <select name="code" id="state2" class="form-control"
                                                    style="padding-right: 0;color: #999;">
                                                    <option value="">+00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback class-feedback">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 mybottom"
                                                style="padding: 0px 10px;">
                                                <select id="requirement_priority" name="requirement_priority"
                                                    class="form-control">
                                                    <option value="">Select Requirement Priority</option>
                                                    <option value="Urgent">Urgent</option>
                                                    <option value="1 Week">1 Week</option>
                                                    <option value="2 Week">2 Week</option>
                                                    <option value="3 Week">3 Week</option>
                                                    <option value="4 Week">4 Week</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group has-feedback class-feedback">
                                    <div class="col-md-12">
                                        <input name="city" id="city" type="text" placeholder="City"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15"
                                            minlength="10" class="form-control number21">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" id="message"
                                            placeholder="Requirement"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 col-12">
                                <div class="text-left">
                                    <label class="control-label"><strong>Product Type:</strong></label>
                                </div>

                                <div class="col-md-12 text-left cstm-btm-check">
                                    <input class="rad" type="checkbox" name="productType[]"
                                        value="Silicone Tubing">Silicone Tubing
                                </div>
                                <div class="col-md-12 text-left cstm-btm-check">
                                    <input class="rad" type="checkbox" name="productType[]"
                                        value="Silicone Extrusion">Silicone Extrusion
                                </div>
                                <div class="col-md-12 text-left cstm-btm-check">
                                    <input class="rad" type="checkbox" name="productType[]"
                                        value="Silicone Moulded Product">Silicone Moulded Product
                                </div>
                                <div class="col-md-12 text-left cstm-btm-check form-group has-feedback">
                                    <input class="form-control rad" type="text" name="productType[]"
                                        placeholder="Other Product" style="width: 100% !important;">
                                </div>

                                <div class="text-left">
                                    <label class="control-label"><strong>Type of Customer:</strong></label>
                                </div>

                                <div class="col-md-12 text-left cstm-btm-check">
                                    <input class="rad" type="checkbox" name="productType[]" value="OEM">OEM
                                </div>
                                <div class="col-md-12 text-left cstm-btm-check">
                                    <input class="rad" type="checkbox" name="productType[]" value="End User">End User
                                </div>
                                <div class="col-md-12 text-left cstm-btm-check">
                                    <input class="rad" type="checkbox" name="productType[]"
                                        value="Reseller/Trader">Reseller / Trader
                                </div>
                                <div class="col-md-12 text-left cstm-btm-check form-group has-feedback">
                                    <input class="form-control rad" type="text" name="customerType[]"
                                        placeholder="Other Type" style="width: 100% !important;">
                                </div>

                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8 col position-relative">
                                                <input name="captcha" id="captcha" placeholder="Captcha Code"
                                                    class="form-control" type="text">
                                            </div>
                                            <div class="col-md-4 col">
                                                <img src="captcha.php" class="capside">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group has-feedback">
                                <div class="col-md-12 col-sm-3 col-xs-12">
                                    <input name="submit" class="submit submitbutton" type="submit" value="Submit Now!">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center text-lg-left position-relative">
                <div class="map-information-2-footer">
                    <h5 class="title-main">Contact Detail</h5>
                    <img src="assets/images/footer/02.svg" alt="line" class="line">
                    <div class="contact-information-main-wrapper">
                        <div class="signle-contact-information">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="information-wrapper">
                                <span>Call Us 24/7</span>
                                <a href="tel:+918141601666">
                                    <h6 class="title"><b>India:</b> +91 81416 01666</h6>
                                </a>
                            </div>
                        </div>
                        <div class="signle-contact-information">
                            <div class="icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="information-wrapper">
                                <span>Work with us</span>
                                <a href="mailto:global@sevitsil.com">
                                    <h6 class="title">global@sevitsil.com</h6>
                                </a>
                            </div>
                        </div>
                        <div class="signle-contact-information">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                            </div>
                            <div class="information-wrapper">
                                <span>Office Address</span>
                                <a href="#">
                                    <h6 class="title">
                                        C1/55/57/58/137, GIDC Phase-2,<br>
                                        Dediyasan, Mehsana- 384002,<br>
                                        Gujarat, india
                                    </h6>
                                </a>
                            </div>
                        </div>

                        <hr>

                        <div class="social-wrap">
                            <ul class="social-wrapper-one">
                                <li><a href="https://www.facebook.com/sevitsilsolutionsinsilicone/"
                                        aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/sevitsil_silicone/?hl=en"
                                        aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="mr--0" href="https://in.linkedin.com/company/sevitsil"
                                        aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>