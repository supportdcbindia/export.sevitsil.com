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
            <div class="bookMeetingContent">
                <div class="bookMeetingContentTitle">
                    <h2>World Health Expo Dubai 2026 (Arab Health) – Connecting the Global Healthcare Industry</h2>
                    <p>World Health Expo (WHX) Dubai 2026 is one of the world’s largest and most influential healthcare exhibitions and conferences. The event brings together global healthcare professionals, innovators, manufacturers, and decision-makers under one roof. Attendees can explore the latest advancements in medical technology, diagnostics, digital health, hospital equipment, and healthcare solutions. WHX Dubai offers a powerful platform for networking, learning, and discovering innovations that are shaping the future of global healthcare.</p>
                </div>
                <div class="cardEvent mt-3">
                    <div class="cardEventImg">
                        <img src="assets/imgs/exhibitions/whx.webp" alt="World Health Expo Dubai">
                    </div>
                    <div class="cardEventContent">
                        <h5>World Health Expo Dubai 2026</h5>
                        <p><i class="fa-solid fa-calendar"></i><span>09-12 Feb, 2026</span></p>
                        <!-- <p><i class="fa-solid fa-table"></i><span><b>Hall: </b>TBA, <b>Stall:</b> TBA</span></p> -->
                        <p><i class="fa-solid fa-location-pin"></i><span>Dubai Exhibition Centre, Expo City Dubai, UAE</span></p>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</section>



<?php include('footer.php'); ?>