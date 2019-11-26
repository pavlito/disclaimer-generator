<?php require '_global.php'; ?>
<?php require '_head.php'; ?>
<body>
    <div class="wrapper py-5">
        <div class="page">
            <section class="sect-live">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if (!isset($_GET['token'])) {
                            $s = 'Missing or Invalid Token.';
                            } else {
                            // Agreement Download Call
                            $fields = [
                            'user_email=' . $_ENV['LCG_API_ACCESS_USER'],
                            'access_token=' . $_ENV['LCG_API_ACCESS_TOKEN'],
                            'agreement_token=' . $_GET['token'],
                            ];
                            $curl = curl_init($_ENV['LCG_API_URL_BASE'] . 'agreement_download?' . join('&', $fields));
                            curl_setopt($curl, CURLOPT_HEADER, false);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            $resp = curl_exec($curl);
                            curl_close($curl);
                            if ($resp === false) {
                            echo 'Query error';
                            } else {
                            $agreement_text = json_decode($resp, true)['agreement_text'];
                            }
                            echo $agreement_text['en'];
                            }
                            ?>
                        </div>
                        <div class="col-md-12">
                            <h1>Disclaimer for MyCompany</h1>
                            <p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us.</p>
                            <h2>Disclaimers for mycompany.com</h2>
                            <p>All the information on this website - compa.com - is published in good faith and for general information purpose only. mycompany.com does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (mycompany.com), is strictly at your own risk. mycompany.com will not be liable for any losses and/or damages in connection with the use of our website. Our Disclaimer was generated with the help of the <a href="https://www.disclaimergenerator.org/">Disclaimer Generator</a> and the <a href="https://www.termsandcondiitionssample.com">Terms and Conditions Template</a>.</p>
                            <p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>
                            <p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>
                            <h2>Consent</h2>
                            <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
                            <h2>Update</h2>
                            <p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>