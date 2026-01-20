<?php include('header.php'); ?>
<!-- page title area start  -->
<section class="page-title-area CustomBred">
  <div class="container large">
    <div class="page-title-area-inner section-spacing-top">
      <div class="page-title-wrapper">
        <h2 class="page-title fade-anim">Contact</h2>
      </div>
    </div>
  </div>
</section>
<!-- page title area end  -->

<!-- contact area start  -->
<section class="contact-area-contact-page CustomBorderTop CustomContactUs">
  <div class="container large">
    <div class="contact-area-contact-page-inner">
      <div class="section-header fade-anim">
        <div class="section-title-wrapper">
          <div class="subtitle-wrapper">
            <span class="section-subtitle">Get In Touch</span>
          </div>
          <div class="title-wrapper">
            <h2 class="section-title font-sequelsans-romanbody mb-4">We're Here to Help</h2>
            <p>At Sevitsil, we value our clients and are committed to providing the best service possible. Whether you have questions about our services, need support, or want to discuss potential business opportunities, we're here to assist you.</p>
          </div>
        </div>
      </div>

      <section class="feature-area contact-feature-area">
        <div class="container large">
          <div class="feature-area-inner">
            <div class="features-wrapper-box fade-anim">
              <div class="features-wrapper">
                <div class="feature-box">
                  <div class="thumb">
                    <img src="assets/imgs/inner-pages/contact/india.webp" alt="image">
                  </div>
                  <div class="content">
                    <h3 class="title">India</h3>
                    <p class="text">
                      <a href="mailTo:web@sevitsil.com">web@sevitsil.com</a><br>
                      Call Us: <a href="tel:+918141601666">(+91) 81416 01666</a><br>
                     
                    </p>
                  </div>
                </div>
                <div class="feature-box">
                  <div class="thumb">
                    <img src="assets/imgs/inner-pages/contact/usa.webp" alt="image">
                  </div>
                  <div class="content">
                    <h3 class="title">USA</h3>
                    <p class="text">
                      <a href="mailTo:global@sevitsil.com">global@sevitsil.com</a><br>
                      Call Us: <a href="tel:+13479253345">+1 (347) 925-3345</a><br>
                       Whatsapp: <a href="https://api.whatsapp.com/send?phone=919727738001&text=Hello Team SEVITSIL, I was going through your Website, Please connect me for product discussion.">(+91) 97277 38001</a>
                    </p>
                  </div>
                </div>
                <div class="feature-box">
                  <div class="thumb">
                    <img src="assets/imgs/inner-pages/contact/europe.webp" alt="image">
                  </div>
                  <div class="content">
                    <h3 class="title">Europe</h3>
                    <p class="text">
                      <a href="mailTo:europe@sevitsil.com">europe@sevitsil.com</a><br>
                      Call Us: <a href="tel:+447760410018">+44 7760 410018</a><br>
                      Whatsapp: <a href="https://api.whatsapp.com/send?phone=919727738001&text=Hello Team SEVITSIL, I was going through your Website, Please connect me for product discussion.">(+91) 97277 38001</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-content-wrapper fade-anim">
        <div class="section-content">
          <div class="contact-mail">
            <p class="title">Get in touch</p>
            <p class="text">Business Hours</p>
            <ul class="contat-check-list">
              <li><i class="fa-solid fa-square-check"></i> Monday to Saturday: 9:00 AM – 6:00 PM</li>
              <!-- <li><i class="fa-solid fa-square-check"></i> Saturday: 10:00 AM – 2:00 PM</li> -->
              <li><i class="fa-solid fa-square-check"></i> Sunday: Closed</li>
            </ul>
          </div>
          <div class="contact-mail mt-5">
            <p class="text">Corporate & Manufacturing Units</p>
            <p class="contact-mail-p">
              C1/55/57/58/137, GIDC Phase-2, Dediyasan <br>
              City: Mehsana<br>
              Pincode: 384002<br>
              State: Gujarat<br>
              Country: india
            </p>
          </div>
          <!-- <div class="contact-social">
            <p class="title">Follow</p>
            <div class="social-links">
              <a href="javascript:;">Facebook</a>
              <a href="javascript:;">Twitter</a>
              <a href="javascript:;">Youtube</a>
            </div>
          </div> -->
        </div>
        <div class="contact-wrap my-custom-modal">
          <form class="form-horizontal form3" action="inquiry-action.php" method="post" novalidate="novalidate">
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
                      <div class="col-md-12 col-sm-12 col-xs-12 mybottom">
                        <select id="country4" name="country" class="form-control"></select>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4 mybottom" style="display: none;">
                        <select name="code" id="state4" class="form-control"
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
                      <div class="col-md-12 col-sm-12 col-xs-12 mybottom">
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
                  <input name="submit" class="submit submitbutton" type="submit"
                    value="Submit Now!">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="contact-map-area pb-100">
        <div class="row">
          <div class="col-lg-6">
            <iframe width="100%" height="480" src="https://www.google.com/maps/d/embed?mid=1-RaL4gAqsqvpGI315EpvWnbqIDMQyew&amp;ehbc=2E312F"></iframe>
          </div>
          <div class="col-lg-6">
            <iframe width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7312.792957319527!2d72.3485661!3d23.5901097!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x395c421de2ea8d33%3A0xde28bbd4e9bf3602!2sSEVITSIL%20-%20Solutions%20in%20Silicone%20(Suresh%20Enterprises)%20C-1%2F55%20GIDC%20Phase-II%2C%20Dediyasan%20Mehsana%2C%20Gujarat%20384002!3m2!1d23.5901097!2d72.3485661!5e0!3m2!1sen!2sin!4v1721207093505!5m2!1sen!2sin"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact area end  -->
<?php include('footer.php'); ?>