<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
$companyname = "SEVITSIL";
$phone = "+91 97277 38001"; /* FORMATE: +91 00000 00000 */
$whatappphone = $whatappphone1 = "919727738001";/* FORAMTE: 91000000000 */
$email = "global@sevitsil.com";
$logo = "../assets/images/logo/sevitsil-logo.webp"; /* FORMATE: images/logo3.png */
$message = "Hello Team " . $companyname . ", I was going through your Website, Please connect me for product discussion.";
?>
<div class="sticklist">
    <input type="hidden" id="ismobile" value="<?= isMobile(); ?>">
    <button class="open-close-arrow">
        <span class="open-arrow"><i class="fa fa-chevron-right"></i></span>
        <span class="close-arrow"><i class="fa fa-chevron-left"></i></span>
    </button>
    <ul>
        <li class="none-li inquiery-icon  imgnone">
            <a href="javascript:;" class="click1">
                <span class="icon1"> <i class="fa fa-envelope"></i></span> <span class="btn-text"> Send Inquiry</span>
            </a>
        </li>
        <li class="none-li inquiery-icon  imgnone" style="background-color: #000 !important;">
            <a href="tel:<?php echo str_replace(" ", "", $phone); ?>">
                <span class="icon1"> <i class="fa fa-phone"></i></span> <span class="btn-text"> Call</span>
            </a>
        </li>
        <!-- <li class="download-pdf none-li inquiery-icon  imgnone">
            <a href="javascript:;" pdf="veer-air-receiver.pdf" class="click2">
                <span class="icon"> <i class="fa fa-file-pdf"></i></span> <span class="btn-text">Catalogue</span>
            </a>
        </li> -->
        <li class="whataspp-icon none-li imgnone">
            <a onclick="gtag('event', 'send', { 'event_category': 'click on whatsapp', 'event_action': 'Mobile', 'event_label': '+<?= $whatappphone1; ?>' });"
                href="https://api.whatsapp.com/send?phone=<?= $whatappphone1; ?>&amp;text=<?= $message; ?>" target="_blank">
                <span class="icon1"> <i class="fab fa-whatsapp"></i></span> <span class="btn-text"> Whatsapp</span></a>
        </li>
    </ul>
</div>
<div class="modal fade bs-example-modal-sm cstm-modal-top-header my-custom-modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" id="onload">
    <div class="modal-dialog modal-lg">
        <input type="hidden" id="ispopupopen" value="1">
        <div class="modal-content">
            <div class="modal-body stick_popup">
                <h5 class="modal-title">Get Your Free Quote…!</h5>
                <div class="stick_close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></div>
                <div class="row mt-40">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-widgets tag-widget">
                            <input id="inquiery-model" value="<?= $_COOKIE['inquierymodel']; ?>" type="hidden" />
                            <input id="isloadopenmodel" value="<?= $_COOKIE['isloadopenmodel']; ?>" type="hidden" />
                            <input name="junk_trap" class="junk_trap" type="hidden" />
                            <!-- <form class="form-horizontal form1" action="inquiry-action.php" method="post" novalidate="novalidate">
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
                                                <input name="company_name" id="company_name" type="text" placeholder="Company Name"
                                                    class="form-control">
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
                                                    <div class="col-md-12 col-sm-12 col-xs-12 mybottom" style="padding: 0px 10px;">
                                                        <select id="country" name="country" class="form-control"></select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 mybottom" style="display: none;">
                                                        <select name="code" id="state" class="form-control"
                                                            style="padding-right: 0;color: #999;">
                                                            <option value="">+00</option>
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
                                        <div class="form-group has-feedback class-feedback">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 mybottom" style="padding: 0px 10px;">
                                                        <select id="requirement_priority" name="requirement_priority" class="form-control">
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
                                            <input class="rad" type="checkbox" name="productType[]" value="Silicone Tubing">Silicone Tubing
                                        </div>
                                        <div class="col-md-12 text-left cstm-btm-check">
                                            <input class="rad" type="checkbox" name="productType[]" value="Silicone Extrusion">Silicone Extrusion
                                        </div>
                                        <div class="col-md-12 text-left cstm-btm-check">
                                            <input class="rad" type="checkbox" name="productType[]" value="Silicone Moulded Product">Silicone Moulded Product
                                        </div>
                                        <div class="col-md-12 text-left cstm-btm-check form-group has-feedback">
                                            <input class="form-control rad" type="text" name="productType[]" placeholder="Other Product" style="width: 100% !important;">
                                        </div>

                                        <div class="text-left">
                                            <label class="control-label"><strong>Type of Customer:</strong></label>
                                        </div>

                                        <div class="col-md-12 text-left cstm-btm-check">
                                            <input class="rad" type="checkbox" name="customerType[]" value="OEM">OEM
                                        </div>
                                        <div class="col-md-12 text-left cstm-btm-check">
                                            <input class="rad" type="checkbox" name="customerType[]" value="End User">End User
                                        </div>
                                        <div class="col-md-12 text-left cstm-btm-check">
                                            <input class="rad" type="checkbox" name="customerType[]" value="Reseller/Trader">Reseller / Trader
                                        </div>
                                        <div class="col-md-12 text-left cstm-btm-check form-group has-feedback">
                                            <input class="form-control rad" type="text" name="customerType[]" placeholder="Other Type" style="width: 100% !important;">
                                        </div>

                                        <div class="form-group has-feedback">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-8 col position-relative">
                                                        <input name="captcha" id="captcha" placeholder="Captcha Code"
                                                            class="form-control" type="text">
                                                    </div>
                                                    <div class="col-md-4 col">
                                                        <img src="../captcha.php" class="capside">
                                                    </div>
                                                </div>
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
                            </form> -->
                            <form class="form-horizontal form1" action="inquiry-action.php" method="post" novalidate="novalidate">
                                <div class="row">

                                    <!-- Name & Company Name in Half Width -->
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-feedback">
                                            <input name="name" id="name" type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-feedback">
                                            <input name="company_name" id="company_name" type="text" placeholder="Company Name" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Email Full Width -->
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-feedback">
                                            <input name="email" id="email" type="text" placeholder="E-Mail Address" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Country Full Width -->
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-feedback class-feedback">
                                            <select id="country" name="country" class="form-control"></select>
                                            <div class="col-md-4 col-sm-4 col-xs-4 mybottom" style="display: none;">
                                                <select name="code" id="state" class="form-control"
                                                    style="padding-right: 0;color: #999;">
                                                    <option value="">+00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- City & Phone Half Width -->
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-feedback class-feedback">
                                            <input name="city" id="city" type="text" placeholder="City" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-feedback">
                                            <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15"
                                                minlength="10" class="form-control number21">
                                        </div>
                                    </div>

                                    <!-- Requirement Priority Full Width -->
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-feedback class-feedback">
                                            <select id="requirement_priority" name="requirement_priority" class="form-control">
                                                <option value="">Select Requirement Priority</option>
                                                <option value="Urgent">Urgent</option>
                                                <option value="1 Week">1 Week</option>
                                                <option value="2 Week">2 Week</option>
                                                <option value="3 Week">3 Week</option>
                                                <option value="4 Week">4 Week</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Product Type & Customer Type Half Width -->
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-feedback">
                                            <select id="productType" name="productType" class="form-control">
                                                <option value="">Select Product Type</option>
                                                <option value="Silicone Tubing">Silicone Tubing</option>
                                                <option value="Silicone Extrusion">Silicone Extrusion</option>
                                                <option value="Silicone Moulded Product">Silicone Moulded Product</option>
                                                <option value="Silicone Hoses">Silicone Hoses</option>
                                                <option value="Other Product">Other Product</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-feedback">
                                            <select id="customerType" name="customerType" class="form-control">
                                                <option value="">Select Type of Customer</option>
                                                <option value="OEM">OEM</option>
                                                <option value="End User">End User</option>
                                                <option value="Reseller/Trader">Reseller/Trader</option>
                                                <option value="Other Type">Other Type</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Message Full Width -->
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-feedback">
                                            <textarea class="form-control" name="message" id="message"
                                                placeholder="Requirement"></textarea>
                                        </div>
                                    </div>

                                    <!-- Captcha Section -->
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-feedback">
                                            <div class="row">
                                                <div class="col-md-6 col-12 position-relative">
                                                    <input name="captcha" id="captcha" placeholder="Captcha Code"
                                                        class="form-control" type="text">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="../captcha.php" class="capside">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button Full Width -->
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-feedback">
                                            <div class="col-md-12 col-sm-3 col-xs-12">
                                                <input name="submit" class="submit submitbutton" type="submit"
                                                    value="Submit Now!">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p><i class="fa-regular fa-clock"></i> Response within 12 Hours</p> -->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- End My Model -->
<!-- <div class="whatsapp-button">
    <div class="pulse"></div>
    <div class="pulse"></div>
    <div class="pulse"></div>
    <a onclick="gtag('event', 'send', { 'event_category': 'click on whatsapp', 'event_action': 'Mobile', 'event_label': '+<?php #echo $whatappphone; ?>' });"
        style="color: #fff" target="blank"
        href="https://api.whatsapp.com/send?phone=<?php #echo $whatappphone; ?>&amp;text=Hello Team <?php #echo $companyname; ?>, I was going through your Website, Please connect me for product discussion."
        class="whatsapp-info pulse">
        <span class="whatsapp">
            <i class="fab fa-whatsapp"></i>
        </span>
    </a>
</div> -->
<!-- catelog model -->
<div class="modal fade bs-example-modal-sm cstm-modal-top-header my-custom-modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" id="onload1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body ">
                <h5 class="modal-title">Catalogue Request Form…!</h5>
                <div class="stick_close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></div>
                <div class="row mt-40">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class=" footer-widgets tag-widget formtop">
                            <form class="form-horizontal form2" action="catalogue-action.php" method="post">
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <input name="name" id="name2" type="text" placeholder="Name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <input name="company_name" id="company_name2" type="text" placeholder="Company Name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <input name="email" id="email2" type="text" placeholder="E-Mail Address"
                                            class="form-control">
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
                                        <input name="number" id="number2" type="tel" placeholder="Phone" maxlength="10"
                                            minlength="10" class="form-control number21">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8 position-relative">
                                                <input name="captcha" id="captcha2" placeholder="Captcha Code"
                                                    class="form-control" type="text">
                                            </div>
                                            <div class="col-md-4">
                                                <img src="../captcha.php" class="capside">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group inline4">
                                            <input type="hidden" id="pt" name="path" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="col-md-12 col-sm-3 col-xs-12">
                                        <input name="submit2" id="submit2" class="submit submitbutton" type="submit"
                                            value="Download Now">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end catelog model -->
<div class="footer-box" style="display: none;">
    <div class="book-app" style="background:#3E4095;" id="req-apnmt2">
        <a class="nav_up click1" href="javascript:;" style="color:#FFF; font-size:10px;font-weight:600;"><i
                class="fa fa-envelope" style="margin-right: 5px;"></i> Enquire Now</a>
    </div>
    <!-- <div class="book-app" style="background: #222;">
        <a class="nav_up click2" href="javascript:;" pdf="veer-air-receiver.pdf" style="color:#FFF; font-size:12px;font-weight:600;"><i
                class="fa fa-file-pdf-o" style="margin-right: 5px;"></i> Catalogue</a>
    </div> -->
    <div class="book-app" style="background:#f82d3b;">
        <a href="tel:<?php echo str_replace(" ", "", $phone); ?>" style="color:#FFF; font-size:12px;font-weight:600;"><i class="fa fa-phone"
                style="margin-right: 5px;"></i> Call</a>
    </div>
    <div class="book-app" style="background: #2db640;">
        <a onclick="gtag('event', 'send', { 'event_category': 'click on whatsapp', 'event_action': 'Mobile', 'event_label': '+<?= $whatappphone1; ?>' });"
            href="https://api.whatsapp.com/send?phone=<?= $whatappphone1; ?>&amp;text=<?= $message; ?>" target="_blank"
            style="color:#FFF; font-size:12px;font-weight:600;"><i class="fab fa-whatsapp"
                style="margin-right: 5px;"></i> Whatsapp</a>
    </div>
</div>
<!-- End My Model -->