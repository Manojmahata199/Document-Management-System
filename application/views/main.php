
            <!--begin::Content wrapper-->
           <div class="d-flex flex-column flex-column-fluid">


              <!--begin::Content-->
              <div id="kt_app_content" class="app-content flex-column-fluid">


                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">




                  <!--begin::Row-->
                  <div class="row g-5 g-xxl-10">

                            <?php 
                               if ($this->session->flashdata('success_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-success col-md-12 py-3">'.$this->session->flashdata('success_msg').'</div>'; 
                                endif;
                             ?>


                    <!--begin::Col-->
                    <div class="col-xl-5 col-xxl-4 mb-xl-5 mb-xxl-10">
                      <!--begin::Card widget 4-->
                      <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                          <!--begin::Title-->
                          <div class="card-title d-flex flex-column">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                              <!--begin::Currency-->
                              <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">Total</span>
                              <!--end::Currency-->
                              <!--begin::Amount-->
                              <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2"><?php echo $doc_num; ?></span>
                              <!--end::Amount-->
                              <!--begin::Badge-->
                              <span class="badge badge-light-success fs-base">
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                              <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                  <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->2.2%</span>
                              <!--end::Badge-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-400 pt-1 fw-bold fs-6">Document Here</span>
                            <!--end::Subtitle-->
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-4 d-flex align-items-center">
                          <!--begin::Chart-->
                          <div class="d-flex flex-center me-5 pt-2">
                            <div id="kt_card_widget_4_chart" style="min-width: 125px; min-height: 125px" data-kt-size="125" data-kt-line="18"></div>
                          </div>
                          <!--end::Chart-->
                          <!--begin::Labels-->
                          <div class="d-flex flex-column content-justify-center w-100">
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-bold align-items-center">
                              <!--begin::Bullet-->
                              <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                              <!--end::Bullet-->
                              <!--begin::Label-->
                              <div class="text-gray-500 flex-grow-1 me-4">Document File</div>
                              <!--end::Label-->
                              <!--begin::Stats-->
                              <div class="fw-boldest text-gray-700 text-xxl-end"><?php echo $doc_num; ?></div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-bold align-items-center my-3">
                              <!--begin::Bullet-->
                              <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                              <!--end::Bullet-->
                              <!--begin::Label-->
                              <div class="text-gray-500 flex-grow-1 me-4">Link File</div>
                              <!--end::Label-->
                              <!--begin::Stats-->
                              <div class="fw-boldest text-gray-700 text-xxl-end"><?php echo $link_num; ?></div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-bold align-items-center">
                              <!--begin::Bullet-->
                              <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                              <!--end::Bullet-->
                              <!--begin::Label-->
                              <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                              <!--end::Label-->
                              <!--begin::Stats-->
                              <div class="fw-boldest text-gray-700 text-xxl-end">0</div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                          </div>
                          <!--end::Labels-->
                        </div>
                        <!--end::Card body-->
                      </div>
                      <!--end::Card widget 4-->
                    </div>
                    <!--end::Col-->

         
                    <!--begin::Col-->
                    <div class="col-xl-7 col-xxl-8 mb-5 mb-xxl-10">
                      <!--begin::Engage widget 2-->
                      <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px h-xl-100 border-0 bg-gray-200" style="background-position: 100% 100%;background-size: 500px auto;background-image:url('<?php echo base_url(); ?>/assets/media/misc/city.png')">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-center ps-lg-15">
                          <!--begin::Title-->
                          <h3 class="text-gray-800 fs-2qx fw-boldest mb-4 mb-lg-8">Good admin theme 
                          <br />is a tool of enthusiasm</h3>
                          <!--end::Title-->
                          <!--begin::Action-->
                     <?php if($this->session->userdata('emp_type')=="admin"){ ?>
                          <div class="m-0">
                            <a href='#' class="btn btn-danger fw-bold" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Create User</a>
                          </div>
                      <?php } ?>
                          <!--begin::Action-->
                        </div>
                        <!--end::Body-->
                      </div>
                      <!--end::Engage widget 2-->
                    </div>
                    <!--end::Col-->
           


                  </div>
                  <!--end::Row-->
















                  <!--begin::Row-->
                  <div class="row g-5 g-xxl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-5 mb-xxl-10">
                      <!--begin::List widget 3-->
                      <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                          <!--begin::Title-->
                          <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark fs-2hx"><?php echo $result_user_num; ?></span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all Department</span>
                          </h3>
                          <!--end::Title-->
                          <!--begin::Toolbar-->







                         








                          <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                          <!--begin::Item-->


                     <?php foreach($result as $d) { ?> 
                            
                          




                          <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center me-3">
                              <!--begin::Icon-->
                              <img src="<?php echo base_url(); ?>/images/dribbble-icon-1.svg" class="me-3 w-30px" alt="" />
                              <!--end::Icon-->
                              <!--begin::Section-->
                              <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bolder lh-0"><?php echo $d->dept_name; ?></a>
                                <span class="text-gray-400 fw-bold d-block fs-6">Community</span>
                              </div>
                              <!--end::Section-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center w-100 mw-125px">
                              <!--begin::Progress-->
                              <div class="progress h-6px w-100 me-2 bg-light-success">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <!--end::Progress-->
                              <!--begin::Value-->
                              <span class="text-gray-400 fw-bold">65%</span>
                              <!--end::Value-->
                            </div>
                            <!--end::Statistics-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Separator-->
                          <div class="separator separator-dashed my-4"></div>



                     <?php } ?>
                         
                                                            
                        </div>
                        <!--end::Body-->
                      </div>
                      <!--end::List widget 3-->
                    </div>
                    <!--end::Col-->




                    <!--begin::Col-->
                    <div class="col-xl-8 mb-5 mb-xxl-10">
                      <!--begin::Table Widget 3-->
                      <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header py-7">
                          <!--begin::Tabs-->
                          <div class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0" data-kt-table-widget-3="tabs_nav">
                            <!--begin::Tab item-->
                            <div class="fs-4 fw-bolder pb-3 border-bottom border-3 border-primary cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Show All">All Document (<?php echo $doc_num; ?>)</div>
                            <!--end::Tab item-->
                            
                          </div>
                          <!--end::Tabs-->
                          <!--begin::Create campaign button-->

                          <?php if($this->session->userdata('emp_type')=="admin"){ ?>
                              <div class="card-toolbar">

                                <div class="dropdown">
                                  <a class="btn btn-danger dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Upload
                                  </a>

                                  <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>welcome/upload_document" type="button" class="bg-danger dropdown-item border border-3 rounded-2">Upload Document</a></li>
                                    <li><a  class="dropdown-item bg-danger border border-3 rounded-2" type="button"  href="<?php echo base_url(); ?>welcome/upload_link_view">Upload Link</a></li><!-- data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign-2" -->
                                    <li><a class="dropdown-item bg-danger border border-3 rounded-2" type="button"  href="#">Upload Folder</a></li><!-- data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign-3" -->
                                  </ul>
                                </div>


                                
                              </div>

                            <?php } ?>
                          <!--end::Create campaign button-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-1">
                          <!--begin::Sort & Filter-->






                          <!--end::Sort & Filter-->
                          <!--begin::Seprator-->
                          <div class="separator separator-dashed my-5"></div>
                          <!--end::Seprator-->
                          <!--begin::Table-->
                          <table id="kt_widget_table_3" class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3" data-kt-table-widget-3="all">
                            <thead class="d-none">
                              <tr>
                                <th>Campaign</th>
                                <th>Platforms</th>
                                <th>Status</th>
                                <th>Team</th>
                                <th>Date</th>
                                <th>Progress</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>


                          <?php foreach($result as $c) { ?>



                              <tr>
                                <td class="min-w-175px">
                                  <div class="position-relative ps-6 pe-3 py-2">
                                    <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
                                    <a href="#" class="mb-1 text-dark text-hover-primary fw-bolder"><?php echo $c->dept_name; ?></a>
                                    <div class="fs-7 text-muted fw-bolder">Created on <?php echo $c->create_at ?></div>
                                  </div>
                                </td>
                                
                                <td>
                                  <span class="badge badge-light-success">Active User</span>
                                </td>
                                <td class="min-w-125px">
                                  <!--begin::Team members-->
                                  <div class="symbol-group symbol-hover mb-1">
                                    <!--begin::Member-->


                                    <?php foreach($result_user as $value_user) { ?>
                                      
                                      <div class="symbol symbol-circle symbol-25px">
                                        <img src="<?php echo base_url(); ?>/uploads/<?php echo $value_user->profile_img; ?>" alt="" />
                                      </div>
                                    <?php } ?>
                                      <!--end::Member-->
                                    
                                    <!--end::Member-->
                                    <!--begin::Member-->
                                    <div class="symbol symbol-circle symbol-25px">
                                      <div class="symbol-label bg-light-danger">
                                        <span class="fs-7 text-danger">E</span>
                                      </div>
                                    </div>
                                    <!--end::Member-->
                                    <!--begin::More members-->
                                    <div class="symbol symbol-circle symbol-25px">
                                      <div class="symbol-label bg-dark">
                                        <span class="fs-9 text-white">+0</span>
                                      </div>
                                    </div>
                                    <!--end::More members-->
                                  </div>
                                  <!--end::Team members-->
                                  <div class="fs-7 fw-bolder text-muted">Team Members</div>
                                </td>
                                <td class="min-w-150px">
                                  <div class="mb-2 fw-bolder">Document List</div>
                                  <div class="fs-7 fw-bolder text-muted">See all</div>
                                </td>
                                <td class="d-none">Pending</td>
                                <td class="text-end">
                                  <a href="<?php echo base_url('welcome/document_list/'.$c->dept_name.''); ?>" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                    <span class="svg-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </a>
                                </td>
                              </tr>


                           <?php } ?>



                             



                            </tbody>
                            <!--end::Table-->
                          </table>
                          <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                      </div>
                      <!--end::Table Widget 3-->
                    </div>
                    <!--end::Col-->
                  </div>
                  <!--end::Row-->



                  
              
                </div>
                <!--end::Content container-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Content wrapper-->



    <!--begin::Modal - Create App-->
    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header">
            <!--begin::Modal title-->
            <h2>Create User</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                  <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--end::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body py-lg-10 px-lg-10">
            <!--begin::Stepper-->
            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
             



              <!--begin::Aside-->
              <!--begin::Content-->
              <div class="flex-row-fluid py-lg-5 px-lg-15">
                <!--begin::Form-->
                <form class="form" novalidate="novalidate" id="kt_modal_create_app_form" method="post" action="<?php echo  base_url(); ?>/welcome/create">
                  <!--begin::Step 1-->
                  <div class="current" data-kt-stepper-element="content">
                    <div class="w-100">
                      <!--begin::Input group-->
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">User Name</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="user_name" placeholder="" value="" />
                        <!--end::Input-->
                      </div>
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Mobile Number</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" class="form-control form-control-lg form-control-solid" name="user_mobile" placeholder="" value="" />
                        <!--end::Input-->
                      </div>
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Email Address</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="email" class="form-control form-control-lg form-control-solid" name="user_email" placeholder="" value="" />
                        <!--end::Input-->
                      </div>
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Employee Id</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="user_id" placeholder="" value="" />
                        <!--end::Input-->
                      </div>
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Date Of Birth</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="date" class="form-control form-control-lg form-control-solid" name="user_dob" placeholder="" value="" />
                        <!--end::Input-->
                      </div>
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Company Name</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="user_company" id="user_company" placeholder="" value="" />
                        <!--end::Input-->
                      </div>
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Department</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <!-- <input type="text" class="form-control form-control-lg form-control-solid" name="user_department" placeholder="" value="" /> -->
                        <select class="form-control form-select form-control-lg form-control-solid" name="user_department" id="user_department" aria-label="Default select example" placeholder="" value="">
                               
                                     
                                     

                                      
                        </select>
                        <!--end::Input-->
                      </div>
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Designation</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <!-- <input type="text" class="form-control form-control-lg form-control-solid" name="user_designation" placeholder="" value="" /> -->
                         <select class="form-control form-select form-control-lg form-control-solid" name="user_designation" id="user_designation" aria-label="Default select example" placeholder="" value="">
                               
                                     
                                     

                                      
                          </select>
                        <!--end::Input-->
                      </div>
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Address</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea class="form-control form-control-lg form-control-solid" name="user_address"></textarea>
                        <!-- <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" /> -->
                        <!--end::Input-->
                      </div>
                       <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary" value="Continue">
                    
                     
                    </div>
                  </div>
                  
                 
                  
                  
                  
                </form>
                <!--end::Form-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Stepper-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create App-->
















    <!--begin::Modal - Create Campaign-->
    <div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
          <!--begin::Modal header-->
          <div class="modal-header py-7 d-flex justify-content-between">
            <!--begin::Modal title-->
            <h2>Upload Document</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                  <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body scroll-y m-3">
            <!--begin::Stepper-->
            <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
             
              <!--begin::Form-->
              <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form" method="post" action="<?php echo base_url(); ?>welcome/upload_document">
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                      <!--begin::Title-->
                      <h2 class="fw-bolder d-flex align-items-center text-dark">Setup Document Details 
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports"></i></h2>
                      
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->

                    <input type="hidden" name="doc_upload_by_id" value="<?php echo $this->session->userdata('id'); ?>">
                     <input type="hidden" name="doc_upload_by_emp_id" value="<?php echo $this->session->userdata('emp_id'); ?>">
                      <input type="hidden" name="doc_upload_by__name" value="<?php echo $this->session->userdata('user_name'); ?>">
                       <input type="hidden" name="doc_upload_by_department" value="<?php echo $this->session->userdata('user_department'); ?>">
                        <input type="hidden" name="doc_upload_by_designation" value="<?php echo $this->session->userdata('emp_designation'); ?>">
                         <input type="hidden" name="doc_upload_by_company" value="<?php echo $this->session->userdata('company_name'); ?>">
                    <div class="mb-4 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-2">Document Tittle</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-lg form-control-solid" name="doc_tittle" placeholder="" value=""  required />
                      <!--end::Input-->
                    </div>

                     <div class="mb-10 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-2">Upload Document</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="file" class="form-control form-control-lg form-control-solid" name="doc_file" placeholder="" value=""  required />
                      <!--end::Input-->
                    </div>
           

                    <div class="mb-10 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-2">Document Type</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <!-- <input type="text"   /> -->
                      <select class="form-control form-select form-control-lg form-control-solid" name="doc_type" aria-label="Default select example" placeholder="" value="" required >
                        <option selected>Select Document Type</option>
                        <option value="1">pdf</option>
                        <option value="2">png</option>
                        <option value="3">jpg</option>
                        <option value="1">jpeg</option>
                        <option value="2">jfif</option>
                        <option value="3">txt</option>
                        <option value="1">mp4</option>
                        <option value="2">xlsx</option>
                        <option value="3">csv</option>
                      </select>
                      <!--end::Input-->
                    </div>
                     <div class="mb-10 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-2">Enter Date</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="date" class="form-control form-control-lg form-control-solid" name="doc_upload_date" placeholder="" value=""  required />
                      <!--end::Input-->
                    </div>

                   

                    <div class="mb-10 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-2">Document Details</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <!-- <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" /> -->
                      <textarea name=""  class="form-control form-control-lg form-control-solid" name="doc_details" required ></textarea>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                   

                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary" value="Continue">
               
               
             
              
              </form>
              <!--end::Form-->
            </div>
            <!--end::Stepper-->
          </div>
          <!--begin::Modal body-->
        </div>
      </div>
    </div>
    <!--end::Modal - Create Campaign-->





    <!--begin::Modal - Create Campaign-->
    <div class="modal fade" id="kt_modal_create_campaign-2" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
          <!--begin::Modal header-->
          <div class="modal-header py-7 d-flex justify-content-between">
            <!--begin::Modal title-->
            <h2>Upload Link</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                  <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body scroll-y m-5">
            <!--begin::Stepper-->
            <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
             
              <!--begin::Form-->
              <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                      <!--begin::Title-->
                      <h2 class="fw-bolder d-flex align-items-center text-dark">Setup Document Details 
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports"></i></h2>
                      
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-3">Document Name</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value=""  required />
                      <!--end::Input-->
                    </div>

                     <div class="mb-10 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-3">Upload Link</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value=""  required />
                      <!--end::Input-->
                    </div>
           

                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary" value="Continue">
               
               
             
              
              </form>
              <!--end::Form-->
            </div>
            <!--end::Stepper-->
          </div>
          <!--begin::Modal body-->
        </div>
      </div>
    </div>
    <!--end::Modal - Create Campaign-->





    <!--begin::Modal - Create Campaign-->
    <div class="modal fade" id="kt_modal_create_campaign-3" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
          <!--begin::Modal header-->
          <div class="modal-header py-7 d-flex justify-content-between">
            <!--begin::Modal title-->
            <h2>Upload Folder</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                  <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body scroll-y m-5">
            <!--begin::Stepper-->
            <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
             
              <!--begin::Form-->
              <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-15">
                      <!--begin::Title-->
                      <h2 class="fw-bolder d-flex align-items-center text-dark">Setup Document Details 
                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports"></i></h2>
                      
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-3">Folder Name</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value=""  required />
                      <!--end::Input-->
                    </div>

                     <div class="mb-10 fv-row">
                      <!--begin::Label-->
                      <label class="required form-label mb-3">Upload Folder</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="file" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value=""  required />
                      <!--end::Input-->
                    </div>
           

                    <!--end::Input group-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary" value="Continue">
               
               
             
              
              </form>
              <!--end::Form-->
            </div>
            <!--end::Stepper-->
          </div>
          <!--begin::Modal body-->
        </div>
      </div>
    </div>
    <!--end::Modal - Create Campaign-->






















 

