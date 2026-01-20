<?php include('header.php'); ?>
<!-- page title area start  -->
<section class="page-title-area">
	<div class="container large">
		<div class="page-title-area-inner section-spacing-top">
			<div class="page-title-wrapper">
				<h2 class="page-title fade-anim">Career</h2>
			</div>
		</div>
	</div>
</section>
<!-- page title area end  -->
<!-- business top area start  -->
<section class="about-area-details business-opportunity-content  CustomBorderTop CustomBusinessOpportunityContent">
	<div class="container large">
		<div class="about-area-details-inner">
			<div class="section-header fade-anim">
				<div class="section-title-wrapper">
					<div class="subtitle-wrapper">
						<span class="section-subtitle">Join Us</span>
					</div>
					<div class="title-wrapper">
						<h2 class="section-title font-sequelsans-romanbody">At Sevitsil, we value innovation, integrity, and teamwork. Join our dynamic team to grow your career in a supportive and collaborative environment.</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- business top area end  -->

<!-- client area start  -->
<div class="client-area-3 career-items-new CustomPartneringForm mt-0">
	<div class="client-area-3-inner">
		<div class="container large">
			<div class="section-header fade-anim">
				<div class="text-wrapper">
					<h2>Current Openings</h2>
				</div>
				<div class="blog-details-area">
					<div class="section-details">
						<div class="comment-wrap">
							<form action="career-action.php" method="post" enctype="multipart/form-data" class="business-form form4" novalidate="novalidate">

								<div class="comment-formwrap">

									<div class="comment-formfield">
										<input type="text" name="name" id="name" placeholder="Full Name *" required>
									</div>

									<div class="comment-formfield">
										<input type="email" name="email" id="email" placeholder="Email *" required>
									</div>

									<div class="comment-formfield">
										<input type="tel" name="number" id="number" placeholder="Phone *" maxlength="15" minlength="10" required>
									</div>

									<div class="comment-formfield UploadInput">
										<label>Upload CV/Resume *</label>
										<input type="file" name="userFile" id="userFile" accept=".pdf,.doc,.docx" required>
										<small>Allowed Type(s): .pdf, .doc, .docx</small>
									</div>

									<div class="comment-formfield message">
										<textarea name="cover_letter" id="cover_letter" placeholder="Cover Letter *" rows="5" required style="width: 100%;"></textarea>
									</div>

									<label class="terms-label">
										<input type="checkbox" name="agree" id="agree" required>
										By using this form you agree with the storage and handling of your data by this website. *
									</label>

								</div>

								<div class="submit-btn">
									<button type="submit" class="rr-btn">
										<span class="btn-wrap">
											<span class="text-one">Submit</span>
											<span class="text-two">Submit</span>
										</span>
									</button>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- client area end  -->
<?php include('footer.php'); ?>