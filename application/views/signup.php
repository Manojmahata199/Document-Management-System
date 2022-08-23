
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
<!-- <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>/index_vendor/css/main.css"> -->

<style type="text/css">
  a {
  font-family: Oswald-Regular;
  font-size: 14px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
  outline: none !important;
}

a:hover {
  text-decoration: none;
  color: #111111;
}
</style>



<meta name="robots" content="noindex, follow">
<script nonce="f6416c26-408b-4280-a900-783c8b3192f9">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body style=" background-image: url('<?php echo base_url(); ?>register_asset/img/back1.jpg');">
  <div class="main">
    <div class="container border border-3 rounded-3  col-md-4 my-5">
       <h3 class="text-center my-2 text-light">Registration Form</h3>

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
     
                     <form method="post" action="<?php echo  base_url(); ?>/welcome/register">
                        <div class="card-body d-flex flex-column justify-content-center ps-lg-15">

                          <div class="form-row d-flex">
                             <div class="col-xl-12">
                                <label class="form-label text-light">User Name</label>
                                <input type="text" name="user_name" class="form-control" id="user_name">
                                <span class="text-danger"><?php echo form_error("user_name"); ?></span>
                              </div>
                          </div>
                           <div class="form-row d-flex">
                            <div class="col-xl-6">
                               <label class="form-label text-light">Email Address</label>
                              <input type="email" name="user_email" class="form-control" id="user_email">
                               <span class="text-danger"><?php echo form_error("user_email"); ?></span> 

                            </div>
                            <div class="col-xl-6">
                               <label class="form-label text-light">Mobile No</label>
                               <input type="number" name="user_mobile" class="form-control" id="user_mobile">
                               <span class="text-danger"><?php echo form_error("user_mobile"); ?></span>
                            </div>
                           
                          </div>
                           <div class="form-row d-flex">
                             <div class="col-xl-12">
                                  <label class="form-label text-light">Date Of Birth</label>
                                  <input type="date" name="user_dob" class="form-control" id="user_dob">
                                   <span class="text-danger"><?php echo form_error("user_dob"); ?></span>
                              </div>
                          </div>
                          
                           <div class="form-row d-flex">
                              <div class="col-xl-6"> 
                                <label class="form-label text-light">Employee Id</label>
                                <input type="text" name="user_id" class="form-control" id="user_id">
                                 <span class="text-danger"><?php echo form_error("user_id"); ?></span>
                              </div>
                          
                              <div class="col-xl-6">
                                <label class="form-label text-light">Company Name</label>
                                <input type="text" name="user_company" class="form-control" id="user_company">
                                 <span class="text-danger"><?php echo form_error("user_company"); ?></span>
                               </div>
                            </div>
                           <div class="form-row d-flex">
                              <div class="col-xl-6">
                                <label class="form-label text-light">Department Name</label>


                                <!-- <input type="text" name="user_department" class="form-control" id="user_department"> -->
                                 <select class="form-control form-select" name="user_department" id="user_department" aria-label="Default select example" placeholder="" value="">
                                   
                                         
                                         

                                          
                                  </select>
                                 <span class="text-danger"><?php echo form_error("user_department"); ?></span>
                              </div>
                            <div class="col-xl-6">
                              <label class="form-label text-light">Designation Name</label>
                              <!-- <input type="text" name="user_designation" class="form-control" id="user_designation"> -->
                              <select class="form-control form-select" name="user_designation" id="user_designation" aria-label="Default select example" placeholder="" value="">
                                 
                                       
                                       

                                        
                                </select>
                               <span class="text-danger"><?php echo form_error("user_designation"); ?></span>
                            </div>
                          </div>
                          <div class="form-row d-flex">
                             <div class="col-xl-12">
                                <label class="form-label text-light">Password</label>
                                  
                                     <input class="form-control" type="text" name="user_password" id="user_password" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="text-danger"><?php echo form_error("user_password"); ?></span>
                               </div>
                          </div>
                           <div class="form-row d-flex">
                             <div class="col-xl-12">
                                <label class="form-label text-light">Address</label>
                               <!--  <input type="text" name="user_name" class="form-control"> -->
                               <textarea class="form-control" placeholder="Enter Your Address" name="user_address" id="user_address"></textarea>
                                <span class="text-danger"><?php echo form_error("user_address"); ?></span>
                              </div>
                            </div>
                          <div class="form-row d-flex my-1 text-center">
                            <input type="submit" class=" btn btn-success mx-2 bg-success" name="submit" id="" value="Register Now">
                           
                            
                          </div>
                          <div class="flex-col-c p-t-2 my-1">
                              <span class="txt2 p-b-3 text-light">
                              Allready have an account?
                              </span>
                              <a href="<?php echo base_url(); ?>welcome/index" class="txt3 bo1 hov1 text-light">
                            LOGIN NOW
                              </a>
                              </div>
                          
                        </div>
                      </form>
      </div>
  
  </div>

<script src="<?php echo base_url(); ?>register_asset/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>register_asset/js/main.js"></script>
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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"739fb26c6bf233cc","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>

 <script type="text/javascript" src="<?php echo base_url(); ?>index_vendor/js/jquery-3.6.0.min.js"></script>



  <script type="text/javascript">
      $(document).ready(function(){
  
  
       $(this).scrollTop(0);
            

            $('#user_company').click(function(){


              // alert("this is company");
              $.ajax({
                type: "POST",         
                url: "<?php echo base_url(); ?>welcome/get_department",
                // async: true,
                dataType: 'json',
               
               success: function(data)               
               {   

                  // alert(data.length);
                     $('#user_department').html('');  
                    var options = '';  
                    options += '<option value="">Select Department</option>';  
                    for (var i = 0; i < data.length; i++) {  
                        options += '<option value="' + data[i]['dept_name'] + '">' + data[i]['dept_name'] + '</option>';  
                    } 
                    options += '<option value="Others">Others</option>';
                    $('#user_department').append(options);  
                                 
                 }
              
             });

           });




             $('#user_department').click(function(){


              // alert("this is company");
              $.ajax({
                type: "POST",         
                url: "<?php echo base_url(); ?>welcome/get_designation",
                // async: true,
                dataType: 'json',
               
               success: function(data)               
               {   

                  // alert(data.length);
                     $('#user_designation').html('');  
                    var options = '';  
                    options += '<option value="">Select Designation</option>';  
                    for (var i = 0; i < data.length; i++) {  
                        options += '<option value="' + data[i]['designation_name'] + '">' + data[i]['designation_name'] + '</option>';  
                    } 
                    options += '<option value="Others">Others</option>';
                    $('#user_designation').append(options);  
                                 

                
                 }
              
               });


            });

    });
      



    </script>



</body>
</html>