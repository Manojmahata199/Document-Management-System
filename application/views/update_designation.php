


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
                         <h3 class="text-center my-2">Create New Designation</h3>
                      <hr>
                      
                      <form method="post" action="<?php echo  base_url(); ?>/welcome/update_designation">
                        <div class="card-body d-flex flex-column justify-content-center ps-lg-15">
                          <input type="hidden" name="id" value="<?php echo $result->id; ?>">

                          <div class="form-row">
                            <label class="form-label">Designation Name</label>
                            <input type="text" name="designation_name" class="form-control" id="designation_name" value="<?php echo $result->designation_name; ?>">
                            <span class="text-danger"><?php echo form_error("designation_name"); ?></span>
                          </div>
                           
                          <div class="form-row d-flex my-4">
                            <input type="submit" class=" btn btn-success mx-2" name="submit" id="">
                            <!-- <input type="reset" class="btn btn-danger mx-2" name="" placeholder="Cancel"> -->
                            <a href="<?php echo  base_url(); ?>/welcome/designation_list" class="btn btn-danger mx-2">Back</a>
                            
                          </div>
                          
                        </div>
                      </form>
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



