<?php include('header.php'); ?>
<!-- page title area start  -->
<section class="page-title-area">
    <div class="container large">
        <div class="page-title-area-inner section-spacing-top">
            <div class="page-title-wrapper">
                <h2 class="page-title fade-anim">Book a Meeting</h2>
            </div>
        </div>
    </div>
</section>
<!-- page title area end  -->

<!-- service area start  -->
<section class="book-a-meeting-page">
    <div class="container">
        <div class="bookMeetingContentWrapper">

            <div class="bookMeetingContentForm">
                <form class="form-horizontal form3" action="exhibition-inquiry-action.php" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="inputGrid">
                            <div class="form-group has-feedback">
                                <input name="name" id="name" type="text" placeholder="Name"
                                    class="form-control">
                            </div>
                            <div class="form-group has-feedback">
                                <input name="company_name" id="company_name" type="text" placeholder="Company Name"
                                    class="form-control">
                            </div>
                            <div class="form-group has-feedback">
                                <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                    class="form-control">
                            </div>
                            <div class="form-group has-feedback class-feedback">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 mybottom">
                                            <select id="country3" name="country" class="form-control"></select>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 mybottom" style="display: none;">
                                            <select name="code" id="state3" class="form-control"
                                                style="padding-right: 0;color: #999;">
                                                <option value="">+00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group has-feedback class-feedback">
                                <input name="city" id="city" type="text" placeholder="City"
                                    class="form-control">
                            </div>
                            <div class="form-group has-feedback">
                                <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15"
                                    minlength="10" class="form-control number21">
                            </div>
                            <div class="form-group textareaInput  has-feedback">
                                <textarea class="form-control" name="message" id="message"
                                    placeholder="Requirement"></textarea>
                            </div>
                            <div class="form-group captchaInput  has-feedback">
                                <div class="captchaGrid">
                                    <div class="inputCaptcha">
                                        <input name="captcha" id="captcha" placeholder="Captcha Code" class="form-control" type="text">
                                    </div>
                                    <img src="captcha.php" class="capside">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group has-feedback">
                            <div class="col-md-12 col-sm-3 col-xs-12">
                                <input name="submit" class="submit submitbutton" type="submit"
                                    value="Submit Now!">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="bookMeetingContent">
                <div class="bookMeetingContentTitle">
                    <h2>Shape What's Next: Engineering the Future at MD&M West 2026</h2>
                    <p>MD&M West (formerly Informa Markets Engineering West) unites five powerful industry sectors—MedTech, Automation, Design & Manufacturing, Plastics, and Packaging—creating the West Coast's most comprehensive manufacturing event.

                    </p>
                </div>
                <div class="cardEvent mt-3">
                    <div class="cardEventImg">
                        <img src="assets/imgs/exhibitions/md-and-m.png" alt="MD&M West">
                    </div>
                    <div class="cardEventContent">
                        <h5>MD&M West</h5>
                        <p><i class="fa-solid fa-calendar"></i><span>03-05 Feb, 2026</span></p>
                        <!-- <p><i class="fa-solid fa-table"></i><span><b>Hall: </b>TBA, <b>Stall:</b> TBA</span></p> -->
                        <p><i class="fa-solid fa-location-pin"></i><span>Anaheim Convention Center, Anaheim, CA</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include('footer.php'); ?>