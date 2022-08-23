


            <!--begin::Content wrapper-->
           <div class="d-flex flex-column flex-column-fluid">


              <!--begin::Content-->
              <div id="kt_app_content" class="app-content flex-column-fluid">


                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">



                    <!--begin::Row-->
                  <div class="row g-5 g-xxl-10">

                      <!--begin::Col-->
                    <div class="col-xl-12 col-xxl-12 mb-5 mb-xxl-12">
                      <!--begin::Engage widget 2-->
                      <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px h-xl-100 border-0 bg-gray-200" style="background-position: 100% 100%;background-size: 500px auto;background-image:url('/good/assets/media/misc/city.png')">
                        <!--begin::Body-->
                        <div class="col-md-12 d-flex my-3">
                            <div class="col-md-10">
                                 <h3 class="text-center my-2">All Department List</h3>
                            </div>
                            <div class="m-0">
                                <a href='#' class="btn btn-danger fw-bold" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Create Department</a>
                            </div>
                            
                        </div>
                       
                      <hr>
                        <div class="card-body d-flex flex-column justify-content-center ps-lg-15">
                            
                            <?php 
                               if ($this->session->flashdata('success_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-success col-md-12 py-3">'.$this->session->flashdata('success_msg').'</div>'; 
                                endif;
                             ?>
                           
                        <div class="table-responsive">

                         <table class="table table-striped table-bordered text-center">
                            <thead>
                                <th>Department Name</th>
                                 <th>Created Date & Time</th>
                               
                                <th>Options</th>
                                
                            </thead>
                            <tbody>
                            <?php foreach($result as $d) { ?> 
                                <tr>
                                    <td><?php echo $d->dept_name; ?></td>
                                    <td><?php echo $d->create_at; ?></td>
                                    
                                    <td>
                                        
                                        <a class="btn btn-info" href="<?php echo base_url('Welcome/edit_dept_view/'.$d->id.'');?>">Edit</a>
                                       
                                        <!-- <a class="btn btn-danger" href="<?php// echo base_url('Welcome/delete_dept_row/'.$d->id.'');?>">Delete</a> -->
                                    </td>
                                </tr>
                            <?php } ?>
                                                        

                            </tbody>
                             


                         </table>
                         </div>
                          
                        </div>
                        <!--end::Body-->
                      </div>
                      <!--end::Engage widget 2-->
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
                <form class="form" novalidate="novalidate" id="kt_modal_create_app_form" method="post" action="<?php echo  base_url(); ?>/welcome/add_department">
                  <!--begin::Step 1-->
                  <div class="current" data-kt-stepper-element="content">
                    <div class="w-100">
                      <!--begin::Input group-->
                      
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">Create Department</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="dept_name" placeholder="" />
                        <!--end::Input-->
                      </div>
                     
                     
                      
                       <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary" value="Create">
                    
                     
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
