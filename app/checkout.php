<?php
require '_global.php';
// $curl = curl_init($_ENV['LCG_API_URL_BASE'] . 'wizard_checkout');
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_HEADER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_POSTFIELDS, [
	// 	'user_email' => $_ENV['LCG_API_ACCESS_USER'],
	// 	'access_token' => $_ENV['LCG_API_ACCESS_TOKEN'],
	// 	'agreement_name' => 'disclaimer',
	// 	'agreement_version' => '1.0',
	// 	'email_api_responsible' => FALSE,
	// 	'email_lang' => 'en',
	// 	'customer_email' => $_POST['email_address'],
	// 	'fields' => json_encode($_POST),
// ]);
// $resp = curl_exec($curl);
// curl_close($curl);
// if ($resp === false) {
	// 	echo 'Query error';
// } else {
	// 	$data = json_decode($resp, true);
	// 	if ($data['result'] != 0) {
		// 		echo 'Error: ' . $data['result_message'];
	// 	} else {
		// 		$token = $data['agreement_token'];
		// 		$lang = $data['agreement_lang'];
		
?>
<?php require '_head.php'; ?>
<body>
	<div class="wrapper">
		<!-- header -->
		<?php include('_header.php'); ?>
		<div class="page">
			<!-- loading start -->
			<div class="loading-container pt-5 pb-5">
				<div class="container pt-5 pb-5">
					<div class="row pt-2 pb-2 pb-mt-5 pb-md-5">
						<div class="col-12 text-center">
							<h3>Please wait your agreement is loading</h3>
							<div class="loader">
								<div class="inner one"></div>
								<div class="inner two"></div>
								<div class="inner three"></div>
							</div>
							
							<script type="text/javascript">
								window.setTimeout(function(){
							window.location.href = "download.php?lang=en&token=<?php echo $token; ?>";
							}, 0);
							</script>
							
						</div>
					</div>
				</div>
			</div>
			<!-- loading end -->
		</div>
		<!-- footer -->
		<?php include('_footer.php'); ?>
	</div>
</body>
</html>