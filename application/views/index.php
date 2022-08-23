
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form by Colorlib</title>
 <link rel = "icon" href ="<?php echo base_url(); ?>/images/sanmarglogo.png" type = "image/x-icon">


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>register_asset/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>register_asset/css/style.css">

 <link rel="canonical" href="https://preview.keenthemes.com/good" />
    <link rel="shortcut icon" href="/good/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?php echo base_url(); ?>/assets/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />



    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?php echo base_url(); ?>/assets/css/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/animate.css">

<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/select2.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/main.css">



<meta name="robots" content="noindex, follow">
<script nonce="f6416c26-408b-4280-a900-783c8b3192f9">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body style=" background-image: url('<?php echo base_url(); ?>register_asset/img/back1.jpg');">
  <div class="main">
    <div class="container col-md-3 rounded-3 text-light border border-3">

                     	 <?php 
                               if ($this->session->flashdata('success_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-success col-md-12 py-1">'.$this->session->flashdata('success_msg').'</div>'; 
                                endif;
                                if ($this->session->flashdata('error_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-danger col-md-12 py-1">'.$this->session->flashdata('error_msg').'</div>'; 
                                endif;
                             ?>
      

					<form class="" action="<?php echo base_url(); ?>welcome/login" method="post">
						<span class="login100-form-title p-b-40 text-light">
						Login
						</span>

					
					<div class=" form-row validate-input m-b-16 col-md-12 text-center" data-validate="Please enter email: ex@abc.xyz">
						<input class="input100" type="email" name="user_email" id="user_email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					<span class="text-danger"><?php echo form_error("user_email"); ?></span>

					<div class=" form-row validate-input m-b-20 col-md-12 text-center" data-validate="Please enter password">
						<span class="btn-show-pass">
						<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="user_password" id="user_password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<span class="text-danger"><?php echo form_error("user_password"); ?></span>

					<div class="container-login100-form-btn">
					
					     <input class="login100-form-btn btn btn-success bg-success col-md-6" type="submit" id="submit" name="submit" value="Login">
					</div>
					<div class="flex-col-c p-t-24 my-5">
					<span class="txt2 p-b-10 text-light">
					Don’t have an account?
					</span>
					<a href="<?php echo base_url(); ?>welcome/signup" class="txt3 bo1 hov1 text-light">
					Register now
					</a>
					</div>
					</form>
</div>
</div>
</div>















<script src="<?php echo  base_url(); ?>/index_vendor/js/jquery-3.2.1.min.js"></script>

<script src="<?php echo  base_url(); ?>/index_vendor/js/animsition.min.js"></script>

<script src="<?php echo  base_url(); ?>/index_vendor/js/popper.js"></script>
<script src="<?php echo  base_url(); ?>/index_vendor/js/bootstrap.min.js"></script>

<script src="<?php echo  base_url(); ?>/index_vendor/js/select2.min.js"></script>

<script src="<?php echo  base_url(); ?>/index_vendor/js/moment.min.js"></script>
<script src="<?php echo  base_url(); ?>/index_vendor/js/daterangepicker.js"></script>

<script src="<?php echo  base_url(); ?>/index_vendor/js/countdowntime.js"></script>

<script src="<?php echo  base_url(); ?>/index_vendor/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72cac996ca1693bb","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
