


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
                        <h3 class="text-center my-2">Document View</h3>
                      <hr>
                        <div class="card-body d-flex flex-column justify-content-center ps-lg-15">
                            
                            <?php 
                               if ($this->session->flashdata('success_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-success col-md-12 py-3">'.$this->session->flashdata('success_msg').'</div>'; 
                                endif;
                                // print_r($result);
                             ?>
                             <div class="table-responsive">

                                  <table class="table table-striped table-bordered ">
                                    <tr>
                                        <a class="btn btn-primary text-center" href="<?php echo base_url(); ?>welcome/document_list">Back</a>
                                    </tr>

                                    <tr>
                                        <td colspan="4">
                                        <div class="card">
                                            <div>
                                            
                                            <iframe
                                                src="<?php echo base_url(); ?>document_uploads/<?php echo $result->upload_by_id; ?>/<?php echo $result->d_title_name; ?>/<?php echo $result->doc_upload_name; ?>"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="100%"
                                                width="100%"
                                            ></iframe>
                                            </div>
                                            <div class="bg-dark d-flex col-md-12 my-4">
                                                <div class="text-center text-white col-md-6 my-3 py-2">
                                                    <a href="<?php echo base_url(); ?>document_uploads/<?php echo $result->d_title_name; ?>/<?php echo $result->doc_upload_name; ?>"><h3 class="text-center text-white"><?php echo $result->doc_upload_name; ?></h3></a>
                                                    
                                                </div>
                                                <div class="text-center text-white col-md-6 my-3 py-2">
                                                    <h2>
                                                        <a class="btn btn-secondary" href="<?php echo base_url('welcome/download/'.$result->id.''); ?>"><i class="fa fa-download"></i></a>
                                                        <a class="btn btn-white" href="<?php echo base_url(); ?>document_uploads/<?php echo $result->upload_by_id; ?>/<?php echo $result->d_title_name; ?>/<?php echo $result->doc_upload_name; ?>"><i class="fa fa-eye"></i></a>
                                                    </h2>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        </td>
                                       
                                    </tr>
                                     <tr>
                                        <td>
                                            
                                         <p><h4>File Title: </h4><?php echo $result->d_title_name; ?></p>
                                                
                                        </td>
                                        <td>
                                            
                                          <p><h4>Document Id: </h4><?php echo $result->document_id; ?></p>
                                                 
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>
                                            <p><h4>Details: </h4><?php echo $result->d_details; ?></p>
                                        </td>
                                        <td>
                                            <p><h4>Uploaded By: </h4><?php echo $result->doc_upload_by_name; ?></p>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <p><h4>Uploader Department: </h4><?php echo $result->upload_by_department; ?></p>
                                        </td>
                                        <td>
                                            <p><h4>Uploader Designation: </h4><?php echo $result->upload_by_designation; ?></p>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <p><h4>Uploader Company: </h4><?php echo $result->upload_by_company; ?></p>
                                        </td>
                                        <td>
                                            <p><h4>Upload Date Time: </h4><?php echo $result->upload_date_time; ?></p>
                                        </td>
                                    </tr>
                                    
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


