<?php require '_global.php'; ?>
<?php $page = 'download'; ?>
<?php require '_head.php'; ?>
<body>
	<div class="wrapper">
		<!-- header -->
		<?php include('_header.php'); ?>
		<div class="page">
			<section class="download-container">
				<div class="container">
					<?php
								// if (!isset($_GET['token'])) {
															// 	$s = 'Missing or Invalid Token.';
								// } else {
															// 	// Agreement Download Call
															// 	$fields = [
																						// 		'user_email=' . $_ENV['LCG_API_ACCESS_USER'],
																						// 		'access_token=' . $_ENV['LCG_API_ACCESS_TOKEN'],
																						// 		'agreement_token=' . $_GET['token'],
															// 	];
															// 	$curl = curl_init($_ENV['LCG_API_URL_BASE'] . 'agreement_download?' . join('&', $fields));
															// 	curl_setopt($curl, CURLOPT_HEADER, false);
															// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
															// 	$resp = curl_exec($curl);
															// 	curl_close($curl);
															// 	if ($resp === false) {
																						// 		echo 'Query error';
															// 	} else {
																						// 		$agreement_text = json_decode($resp, true)['agreement_text'];
					?>
					<div class="row">
						<div class="col-lg-6">
							<!-- live link start -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Link to your Disclaimer</h4>
									<p>Link to your generated Disclaimer by using the link below. <strong>Hosting is free, forever.</strong></p>
									<div class="input-group mt-4 mb-3">
										<input type="text" class="form-control" id="copy-link" value="<?php echo $_ENV['WEBSITE_URL']; ?>/live.php?token=<?php echo $_GET['token']; ?>">
										<div class="input-group-append">
											<button class="btn btn-outline-primary" type="button" id="copy-link-button">Copy</button>
										</div>
									</div>
								</div>
							</div>
							<!-- live link end -->
							<!-- copy code start -->
							<div class="card mt-5">
								<div class="card-body">
									<h4 class="card-title">Download your Disclaimer</h4>
									<p>Copy your generated Disclaimer to your clipboard. <strong>You're done.</strong></p>
									<div class="form-group mt-4">
										<textarea class="form-control" id="copy-text" rows="8"><?php echo $agreement_text['en']; ?></textarea>
									</div>
									<button type="button" class="btn btn-primary btn-block" id="copy-text-button">Copy text to clipboard</button>
								</div>
							</div>
							<!-- copy code end -->
						</div>
						<!-- preview start -->
						<div class="col-lg-6 mt-5 mt-lg-0">
							<div class="card">
								<div class="card-body">
									<div class="preview">
										<div class="header d-flex align-items-center">
											<div class="icons">
												<svg xmlns="http://www.w3.org/2000/svg" width="68" height="15" viewBox="0 0 68 15">
													<g id="Group_37" data-name="Group 37" transform="translate(-1436 -1500)">
														<circle id="Ellipse_8" data-name="Ellipse 8" cx="7.5" cy="7.5" r="7.5" transform="translate(1489 1500)" fill="#ff4848"/>
														<circle id="Ellipse_9" data-name="Ellipse 9" cx="7.5" cy="7.5" r="7.5" transform="translate(1462 1500)" fill="#ffc848"/>
														<circle id="Ellipse_10" data-name="Ellipse 10" cx="7.5" cy="7.5" r="7.5" transform="translate(1436 1500)" fill="#5fcc00"/>
													</g>
												</svg>
											</div>
											<p class="text-muted mb-0 font-weight-normal ml-auto">Disclaimer Preview</p>
										</div>
										<div class="content">
											<div class="content">
												<h1>Disclaimer for asdf</h1>
												<p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us.</p>
												<h2>Disclaimers for aasdf</h2>
												<p>All the information on this website - asdf - is published in good faith and for general information purpose only. aasdf does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (aasdf), is strictly at your own risk. aasdf will not be liable for any losses and/or damages in connection with the use of our website. Our Disclaimer was generated with the help of the <a href="https://www.disclaimergenerator.org/">Disclaimer Generator</a> and the <a href="https://www.termsandcondiitionssample.com">Terms and Conditions Template</a>.</p>
												<p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>
												<p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>
												<h2>Consent</h2>
												<p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
												<h2>Update</h2>
												<p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p> </div>
												<?php // echo $agreement_text['en']; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- preview end -->
						</div>
						
						
						
					</div>
				</div>
			</section>
			<!-- footer -->
			<?php include('_footer.php'); ?>
			<script src="/assets/js/jquery.min.js" type="text/javascript"></script>
			<script src="/assets/js/clipboard.min.js" type="text/javascript"></script>
			<script src="/assets/js/notify.min.js" type="text/javascript"></script>
			<script src="/assets/js/download.min.js" type="text/javascript"></script>
		</div>
	</body>
</html>