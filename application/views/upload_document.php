
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
                         <h3 class="text-center my-2">Create New Document</h3>
                      <hr>
                      <?php 
									       if ($this->session->flashdata('error_msg') != ''): 
									            echo 
									            '<div class="text-center text-dark bg-danger col-md-12 py-3">'.$this->session->flashdata('error_msg').'</div>'; 
									        endif;
									     ?>
									      <?php 
                               if ($this->session->flashdata('success_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-success col-md-12 py-3">'.$this->session->flashdata('success_msg').'</div>'; 
                                endif;
                             ?>





















					 <form  method="post" action="<?php echo base_url(); ?>welcome/upload_document_operation" enctype="multipart/form-data" class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
							                <!--begin::Step 1-->
							                <div class="current" data-kt-stepper-element="content">
							                  <!--begin::Wrapper-->
							                  <div class="w-100">
							                    <!--begin::Heading-->
							                   <!--  <div class="pb-10 pb-lg-15">
							                     
							                      <h2 class="fw-bolder d-flex align-items-center text-dark">Setup Document Details 
							                      <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports"></i></h2>
							                      
							                    </div> -->
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
							                      <input type="text" class="form-control form-control-lg form-control-solid" name="doc_tittle" id="doc_tittle" placeholder="" value="">
							                      <span class="text-danger"><?php echo form_error("doc_tittle"); ?></span>
							                      <!--end::Input-->
							                    </div>

							                     <div class="mb-10 fv-row">
							                      <!--begin::Label-->
							                      <label class="required form-label mb-2">Upload Document</label>
							                      <!--end::Label-->
							                      <!--begin::Input-->
							                      <input type="file" class="form-control form-control-lg form-control-solid" name="doc_file" id="doc_file" placeholder="" value="">
							                      <span class="text-danger"><?php echo form_error("doc_file"); ?></span> 
							                      <!--end::Input-->
							                    </div>
							           

							                    <div class="mb-10 fv-row">
							                      <!--begin::Label-->
							                      <label class="required form-label mb-2">Document Type</label>
							                      <!--end::Label-->
							                      <!--begin::Input-->
							                      <!-- <input type="text"   /> -->
							                      <select class="form-control form-select form-control-lg form-control-solid" name="doc_type" id="doc_type" aria-label="Default select example" placeholder="" value="">
							                        <option selected>Select Document Type</option>
							                        <option value="pdf">pdf</option>
							                        <option value="png">png</option>
							                        <option value="jpg">jpg</option>
							                        <option value="jpeg">jpeg</option>
							                        <option value="jfif">jfif</option>
							                        <option value="txt">txt</option>
							                        <option value="mp4">mp4</option>
							                        <option value="xlsx">xlsx</option>
							                        <option value="csv">csv</option>
							                      </select>
							                       <span class="text-danger"><?php echo form_error("doc_type"); ?></span>
							                      <!--end::Input-->
							                    </div>
							                     <div class="mb-10 fv-row">
							                      <!--begin::Label-->
							                      <label class="required form-label mb-2">Enter Date</label>
							                      <!--end::Label-->
							                      <!--begin::Input-->
							                      <input type="date" class="form-control form-control-lg form-control-solid" name="doc_upload_date" id="doc_upload_date" placeholder="" value="">
							                       <span class="text-danger"><?php echo form_error("doc_upload_date"); ?></span>
							                      <!--end::Input-->
							                    </div>

							                   

							                    <div class="mb-10 fv-row">
							                      <!--begin::Label-->
							                      <label class="required form-label mb-2">Document Details</label>
							                      <!--end::Label-->
							                      <!--begin::Input-->
							                      <!-- <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" /> -->
							                      <textarea class="form-control form-control-lg form-control-solid" rows="5" name="doc_details" id="doc_details"></textarea>
							                       <span class="text-danger"><?php echo form_error("doc_details"); ?></span>
							                      <!--end::Input-->
							                    </div>
							                    <!--end::Input group-->
							                   

							                    <!--end::Input group-->
							                  </div>
							                  <!--end::Wrapper-->
							                </div>
							                <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary" value="Continue">
							               
							               
							             
							              
							              </form>


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



