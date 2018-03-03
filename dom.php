<?php

set_include_path('library');

require_once 'GooglePlay/InAppBilling/GooglePlayResponseData.php';
require_once 'GooglePlay/InAppBilling/GooglePlayResponseValidator.php';

//Your key, copy and paste from https://market.android.com/publish/editProfile
define('PUBLIC_KEY', 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAon6x8F20czo7N8enhKSvDOnl2Pbb/xWB+N9SG+wCGW2sI/qhjyhAo/BiyM741UYYfBDut1IkjdP+pr/AD/Sd6GSLsb16BgPM79d20a/mM2gqDyYuF8pyNerh/lh37JmVJvRnI4hgfjhhy7dVG1HGr2NSPX5Sz9776Y76whSZr3p3pd1niHlgYbJclEOcs1N8nGPUq0tnDVO67iDWDmaC3+ifzPY+89hPFGztPMpZTOHAiXxU0GH+Ouotj+jHaat44lriJhDFGrQQ9Bc7PBQf/yIo3h2OnY0mNTQRLJnWtAaOB0pP1fSA+NmwXgcrYx4tFb9aVFn0gcwInhL2Ytp3UQIDAQAB');
//Your app's package name, e.g. com.example.yourapp
define('PACKAGE_NAME', 'com.kokak.DoomGLES');

//The | delimited response data from the licensing server
//$responseData = $_GET['Resp'];
//The signature provided with the response data (Base64)
//$signature = $_GET['Sign'];


//$validator = new GooglePlayResponseValidator(PUBLIC_KEY, PACKAGE_NAME);
//$valid = $validator->verify($responseData, $signature);

//if ($valid)
//	echo '1';
//else
//	echo '0';


echo 'Glouc';

exit;
?>