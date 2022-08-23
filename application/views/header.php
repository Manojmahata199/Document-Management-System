
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Good - Bootstrap 5 HTML Admin Dashboard Template 
Purchase: https://themes.getbootstrap.com/product/good-bootstrap-5-admin-dashboard-template
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
  <!--begin::Head-->
  <head>
    <title>Document Management System-Dashboard</title>
    <meta charset="utf-8" />
    <meta name="description" content="Good admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Good, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard, bootstrap dark mode" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Good - Bootstrap 5 HTML Admin Dashboard Template" />
    <meta property="og:url" content="https://themes.getbootstrap.com/product/good-bootstrap-5-admin-dashboard-template" />
    <meta property="og:site_name" content="Keenthemes | Good" />


     <link rel = "icon" href ="<?php echo base_url(); ?>/images/sanmarglogo.png" type = "image/x-icon">


     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">



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
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
    <!--End::Google Tag Manager -->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">




      <!--begin::Page-->
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">









        <!--begin::Header-->
        <div id="kt_app_header" class="app-header">
          <!--begin::Header container-->
          <div class="app-container container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Mobile menu toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
              <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </div>
            </div>
            <!--end::Mobile menu toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
              <a href="/good/index.html" class="d-lg-none">
                <img alt="Logo" src="<?php echo base_url(); ?>/images/default.svg" class="h-30px" />
              </a>
            </div>
            <!--end::Mobile logo-->
            <!--begin::Header wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
              <!--begin::Page title-->
              <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}" class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bolder fs-3 flex-column justify-content-center my-0">Hello <?php echo $this->session->userdata('user_name'); ?>
                <!--begin::Description-->
                <span class="page-desc text-gray-400 fs-7 fw-bold pt-1">24 New User Register</span>
                <!--end::Description--></h1>
                <!--end::Title-->
              </div>
              <!--end::Page title-->
              <!--begin::Navbar-->
              <div class="app-navbar align-items-center flex-shrink-0">
                <!--begin::Search-->
                          <!--  <div class="app-navbar-item ms-2 ms-lg-4">
                                 
                                  <div  class="header-search d-flex align-items-center w-lg-250px">
                                   
                                    <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                    
                                      <input type="hidden" />
                                     
                                      <span class="svg-icon svg-icon-2 svg-icon-lg-3 svg-icon-gray-800 position-absolute top-50 translate-middle-y ms-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                          <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor" />
                                          <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor" />
                                        </svg>
                                      </span>
                                     
                                      <input type="text" class="search-input form-control form-control-solid ps-13 bg-white" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                     
                                      <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                      </span>
                                    
                                      <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                                      
                                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                          </svg>
                                        </span>
                                       
                                      </span>
                                   
                                    </form>
                                   
                                   
                                  
                                  </div>
                                  
                                </div>
                                              -->           
              </div>
              <!--end::Navbar-->
            </div>
            <!--end::Header wrapper-->
          </div>
          <!--end::Header container-->
        </div>
        <!--end::Header-->
        <hr>


         <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">