<!DOCTYPE html>
<?php
require 'registration-mailer.php';
?>
<html>

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<meta charset="utf-8"/>
<title>Account Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
<script type="text/javascript">
//<![CDATA[
var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-56895490-1']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();//]]>
</script><script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"9120150e6bae2cda50a9ea500094ecb9",petok:"746de4d4a0ce79241b8f543b9849f25c838838ec-1496985938-1800",zone:"revox.io",rocket:"0",apps:{"ga_key":{"ua":"UA-56895490-1","ga_bs":"1"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d85b614c0f6/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css"/>
<!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
<script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
</head>
<body class="fixed-header ">
<div class="register-container full-height sm-p-t-30">
<div class="container-sm-height full-height">
<div class="row row-sm-height">
<div class="col-sm-12 col-sm-height col-middle">
<img src="assets/img/hh-logo1.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="280" height="66">
<h3>New Account Registration</h3>
<p>
<small>
After completing this form an account manager will contact you with a username and password. It may take one to two days to create your account.
</small>
</p>
<form id="form-register" class="p-t-15" role="form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
<div class="row">
<div class="col-sm-6">
<div class="form-group form-group-default">
<label>First Name</label>
<input type="text" name="fname" placeholder="Jane" class="form-control" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-group-default">
<label>Last Name</label>
<input type="text" name="lname" placeholder="Smith" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Company Name</label>
<input type="text" name="company" placeholder="ABC Inc. (this can be changed later)" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Email</label>
<input type="email" name="email" placeholder="We will send login details to you" class="form-control" required>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-md-6">
</div>
<div class="col-md-6 text-right">
<a href="https://homesteadheath.com/contactus/" class="text-info small">Help? Contact Support</a>
</div>
</div>
<button class="btn btn-primary btn-cons m-t-10" type="submit">Submit Information</button>
</form>
</div>
</div>
</div>
</div>
<div class=" full-width">
<div class="register-container m-b-10 clearfix">
<div class="inline pull-left">
</div>
<div class="col-md-10 m-t-15">
<p class="hinted-text small inline ">This web service is managed and maintained by Matt Cameron. http://www.mtmc.ca</p>
</div>
</div>
</div>

<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
<script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
<script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

<script src="pages/js/pages.min.js"></script>
<script>
    $(function()
    {
      $('#form-register').validate()
    })
    </script>
</body>

<!-- Mirrored from pages.revox.io/dashboard/latest/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2017 05:26:00 GMT -->
</html>
