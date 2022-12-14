         <!--begin::sidebar-->
          <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
            <!--begin::Logo-->


            <!--end::Logo-->
            <div class="separator d-none d-lg-block"></div>
            <!--begin::Toolbar-->
            <div class="app-sidebar-toolbar d-flex flex-stack py-6 px-8">
              <!--begin::Select-->
              <span class="form-control form-select-custom fw-bolder"><b>Menu List</b>
               
              </span>
              <!--end::Select-->
              <!--begin::Button-->
              <!-- <a href="#" class="btn btn-icon btn-custom fw-bolder flex-shrink-0 ms-3" data-bs-toggle="modal" > -->
                 <!-- data-bs-target="#kt_modal_create_project" -->
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
               <!--  <span class="svg-icon svg-icon-2qx">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                  </svg>
                </span> -->
                <!--end::Svg Icon-->
              <!-- </a> --> 
              <!--end::Button-->
            </div>
            <!--end::Toolbar-->

            <div class="separator"></div>
            <!--begin::Sidebar menu-->
            <div class="app-sidebar-menu app-sidebar-menu-arrow hover-scroll-overlay-y my-5 my-lg-5 px-3" id="kt_app_sidebar_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_toolbar, #kt_app_sidebar_footer" data-kt-scroll-offset="0">
              <!--begin::Menu-->
              <div class="menu menu-column menu-sub-indention menu-active-bg fw-bold" id="#kt_sidebar_menu" data-kt-menu="true">


                 <div class="menu-item">
                  <a class="menu-link" href="<?php echo base_url(); ?>/welcome/main" >
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                      <span class="svg-icon svg-icon-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                          <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </div>



  <?php if($this->session->userdata('emp_type')=="admin"){ ?>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                      <span class="svg-icon svg-icon-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                          <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">User Management</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                  
                    <div class="menu-item">
                      <a class="menu-link" href="<?php echo base_url(); ?>/welcome/create">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create User</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link" href="<?php echo base_url(); ?>/welcome/list">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">User List</span>
                      </a>
                    </div>
                   <!--  <div class="menu-item">
                      <a class="menu-link" href="<?php echo base_url(); ?>/welcome/application_list">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Application</span>
                      </a>
                    </div>     -->                                                    
        
                  </div>
                </div>


<?php } ?>



                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                      <span class="svg-icon svg-icon-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                          <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Document Management</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <a class="menu-link" href="<?php echo base_url(); ?>welcome/document_list">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Document List</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link" href="<?php echo base_url(); ?>welcome/upload_document">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create Document</span>
                      </a>
                    </div>
            
                    <div class="menu-item">
                      <a class="menu-link" href="<?php echo base_url(); ?>welcome/link_list">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Document Link</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link" href="<?php echo base_url(); ?>welcome/upload_link_view">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Upload Link</span>
                      </a>
                    </div>
              
                    
                    
                  </div>
                </div>
                <div class="menu-item pt-5">
                  <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">Settings</span>
                  </div>
                </div>
               
              <?php if($this->session->userdata('emp_type')=="admin"){ ?>
                 
                <div class="menu-item">
                  <a class="menu-link" href="<?php echo base_url(); ?>/welcome/department_list" >
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                      <span class="svg-icon svg-icon-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                          <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Manage Department</span>
                  </a>
                </div>


                <div class="menu-item">
                  <a class="menu-link" href="<?php echo base_url(); ?>/welcome/designation_list">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                      <span class="svg-icon svg-icon-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                          <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Manage Designation</span>
                  </a>
                </div>


                 <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                      <span class="svg-icon svg-icon-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                          <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">menu item1</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <a class="menu-link" href="#">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Department List</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link" href="#">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create Department</span>
                      </a>
                    </div>                                                       
                  </div>
                </div>




              <?php } ?>

                
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Sidebar menu-->





            <!--begin::User-->
            <div class="app-sidebar-user d-flex flex-stack py-5 px-8">
              <!--begin::User avatar-->
              <div class="d-flex me-5">
                <!--begin::Menu wrapper-->
                <div class="me-5">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-40px cursor-pointer" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('profile_img'); ?>" alt="" />
                  </div>
                  <!--end::Symbol-->
                  <!--begin::User account menu-->
                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                          <img alt="Logo" src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('profile_img'); ?>" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                          <div class="fw-bolder d-flex align-items-center fs-5"><?php echo $this->session->userdata('user_name'); ?>
                          <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"><?php echo $this->session->userdata('emp_designation'); ?></span></div>
                          <a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?php echo $this->session->userdata('user_email'); ?></a>
                        </div>
                        <!--end::Username-->
                      </div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                      <a href="<?php echo base_url(); ?>welcome/profile_page" class="menu-link px-5">My Profile</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                   
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-end">
                      <a href="<?php echo base_url(); ?>welcome/document_list" class="px-5">
                        <span class="menu-title">My Documents</span>
                        <span class="menu-arrow"></span>
                      </a>
                      <!--begin::Menu sub-->
                     <!--  <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        
                        <div class="menu-item px-3">
                          <a href="/good/account/referrals.html" class="menu-link px-5">Referrals</a>
                        </div>
                       
                        <div class="menu-item px-3">
                          <a href="/good/account/billing.html" class="menu-link px-5">Billing</a>
                        </div>
                      
                        <div class="menu-item px-3">
                          <a href="/good/account/statements.html" class="menu-link px-5">Payments</a>
                        </div>
                       
                        <div class="menu-item px-3">
                          <a href="/good/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements 
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                        </div>
                       
                        <div class="separator my-2"></div>
                       
                        <div class="menu-item px-3">
                          <div class="menu-content px-3">
                            <label class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                              <span class="form-check-label text-muted fs-7">Notifications</span>
                            </label>
                          </div>
                        </div>
                       
                      </div> -->
                      <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                   
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                   
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5 my-1">
                      <a href="<?php echo base_url('Welcome/profile_setting/'.$this->session->userdata('id').'');?>" class="menu-link px-5">Account Settings</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                      <a href="<?php echo base_url(); ?>welcome/logout" class="menu-link px-5">Sign Out</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    
                    
                    <!--end::Menu item-->
                  </div>
                  <!--end::User account menu-->
                </div>
                <!--end::Menu wrapper-->
                <!--begin::Info-->
                <div class="me-2">
                  <!--begin::Username-->
                  <a href="#" class="app-sidebar-username text-gray-800 text-hover-primary fs-6 fw-bold lh-0"><?php echo $this->session->userdata('user_name'); ?></a>
                  <!--end::Username-->
                  <!--begin::Description-->
                  <span class="app-sidebar-deckription text-gray-400 fw-bold d-block fs-8"><?php echo $this->session->userdata('emp_designation'); ?></span>
                  <!--end::Description-->
                </div>
                <!--end::Info-->
              </div>
              <!--end::User avatar-->
              <!--begin::Action-->
              <a href="<?php echo base_url(); ?>welcome/logout" class="btn btn-icon btn-active-color-primary btn-icon-custom-color me-n4" data-bs-toggle="tooltip" title="End session and singout">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                <span class="svg-icon svg-icon-2 svg-icon-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor" />
                    <path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor" />
                    <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </a>
              <!--end::Action-->
            </div>
            <!--end::User-->


          </div>
          <!--end::sidebar-->


          <!--begin::Main-->
          <div class="app-main flex-column flex-row-fluid" id="kt_app_main">