<?php require '_global.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport"  content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<!-- Important for Download page -->
<meta name="robots" content="noindex" />
<!-- Important for Download page -->

<title>Done! Privacy Policy Generator &#8211; Easily Create Your Own Privacy Policy</title>

<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="/assets/css/style.min.css" rel="stylesheet" />

</head>
<body>
	<div class="wrapper">
	    
      <?php include('_header.php'); ?>

      <br />

	    <div class="page">
            <div class="container">

                <div class="content download-wrapper">
                    <div class="row">
                         <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
                             <div class="main copy">
                                 <h2>Link to your Privacy Policy</h2>
                                 <p>Link to your generated Privacy Policy by using the link below. <strong>Hosting is free, forever.</strong></p>
                                 <p><a href="#" id="copy-link-button" class="btn btn-primary">Copy link to clipboard</a></p>
                                 <input id="copy-link" class="form-control" value="AGREEMENT_LIVE_LINK_GOES_HERE" />
                             </div>
                              <div class="main copy">
                                  <h2>Download your Privacy Policy</h2>
                                  <p>Copy your generated Privacy Policy to your clipboard. <strong>You're done.</strong></p>
                                  <p><a href="#" id="copy-text-button" class="btn btn-primary">Copy text to clipboard</a></p>
                                  <textarea id="copy-text" class="form-control">AGREEMENT_TEXT_GOES_HERE</textarea>
                              </div>
                          </div>
                          <div class="col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6">
                              <div class="main">
                                  <h3>Preview your Privacy Policy</h3>
                                  <hr />
                                  <div class="preview">
                                  AGREEMENT_TEXT_GOES_HERE
                                  </div>
                              </div>
                          </div>
                     </div>
                 </div>
                 
            </div>
		</div>
        
    <?php include('_footer.php'); ?>

	</div><!-- end wrapper -->

    <script src="/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/clipboard.min.js" type="text/javascript"></script>
    <script src="/assets/js/notify.min.js" type="text/javascript"></script>
    <script src="/assets/js/download.min.js" type="text/javascript"></script>

</body>
</html>
