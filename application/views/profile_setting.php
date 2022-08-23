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
                         <h3 class="text-center my-2">Update Your Profile Settings</h3>
                      <hr>
                            <?php 
                               if ($this->session->flashdata('warning_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-warning col-md-12 py-3">'.$this->session->flashdata('warning_msg').'</div>'; 
                                endif;
                             ?>
                      
                      
                      <form method="post" action="<?php echo  base_url(); ?>/welcome/profile_set">
                        <div class="card-body d-flex flex-column justify-content-center ps-lg-15">

                          <input type="hidden" name="id" id="id" value="<?php echo $result->id; ?>">

                          <div class="form-row">
                            <label class="form-label">User Name</label>
                            <input type="text" name="user_name" class="form-control" id="user_name" value="<?php echo $result->user_name; ?>">
                            <span class="text-danger"><?php echo form_error("user_name"); ?></span>
                          </div>
                           <div class="form-row">
                            <label class="form-label">Email Address</label>
                            <input type="text" name="user_email" class="form-control" id="user_email"value="<?php echo $result->user_email; ?>">
                             <span class="text-danger"><?php echo form_error("user_email"); ?></span> 
                          </div>
                           <div class="form-row">
                            <label class="form-label">Mobile No</label>
                            <input type="number" name="user_mobile" class="form-control" id="user_mobile"value="<?php echo $result->user_mobile; ?>">
                             <span class="text-danger"><?php echo form_error("user_mobile"); ?></span>
                          </div>
                           <div class="form-row">
                            <label class="form-label">Employee Id</label>
                            <input type="text" name="user_id" class="form-control" id="user_id"value="<?php echo $result->user_id; ?>">
                             <span class="text-danger"><?php echo form_error("user_id"); ?></span>
                          </div>
                           <div class="form-row">
                            <label class="form-label">Date Of Birth</label>
                            <input type="date" name="user_dob" class="form-control" id="user_dob"value="<?php echo $result->date_of_birth; ?>">
                             <span class="text-danger"><?php echo form_error("user_dob"); ?></span>
                          </div>
                           <div class="form-row">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="user_company" class="form-control" id="user_compa"value="<?php echo $result->company_name; ?>">
                             <span class="text-danger"><?php echo form_error("user_compa"); ?></span>
                          </div>
                           <div class="form-row">
                            <label class="form-label">Department Name</label>
                             <!-- <input type="text" name="user_department" class="form-control" id="user_department"value="<?php echo $result->department; ?>"> -->

                             <select class="form-control form-select" name="user_department" id="user_depart" aria-label="Default select example" placeholder="" value="">

                              <?php foreach($dept as $dept_val){ ?>
                               
                                     <option <?php echo  ($result->department == $dept_val->dept_name) ? "selected" : ""; ?> value="<?php echo $dept_val->dept_name; ?>"><?php echo $dept_val->dept_name; ?></option>
                                     
                              <?php } ?>
                                      
                              </select>

                             <span class="text-danger"><?php echo form_error("user_depart"); ?></span>
                              
                          </div>
                           <div class="form-row">
                            <label class="form-label">Designation Name</label>
                            <!-- <input type="text" name="user_designation" class="form-control" id="user_designation"value="<?php echo $result->designation; ?>"> -->

                            <select class="form-control form-select" name="user_designation" id="user_designat" aria-label="Default select example" placeholder="" value="">
                               
                                  <?php foreach($desig as $desig_val){ ?>
                               
                                     <option <?php echo  ($result->designation == $desig_val->designation_name) ? "selected" : ""; ?> value="<?php echo $desig_val->designation_name; ?>"><?php echo $desig_val->designation_name; ?></option>
                                     
                                  <?php } ?>   
                                     

                                      
                                 </select>
 

                             <span class="text-danger"><?php echo form_error("user_designat"); ?></span>
                          </div>

                           <div class="form-row">
                            
                                    <label class="form-label">Password</label>
                                  
                                     <input class="form-control" type="text" name="user_password" id="user_password" placeholder="Password" value="<?php echo $result->password; ?>">
                                  
                                    <span class="text-danger"><?php echo form_error("user_password"); ?></span>
                               
                          </div>


                           <div class="form-row">
                              <label class="form-label">Address</label>
                             <!--  <input type="text" name="user_name" class="form-control"> -->
                             <textarea class="form-control" placeholder="Enter Your Address" name="user_address" id="user_address"><?php echo $result->address; ?></textarea>
                              <span class="text-danger"><?php echo form_error("user_address"); ?></span>
                          </div>

                          
                          <div class="form-row d-flex my-4">
                            <input type="submit" class=" btn btn-success mx-2" name="submit" id="">
                           <!--  <input type="reset" class="btn btn-danger mx-2" name="" placeholder="Cancel"> -->
                           <a href="<?php echo base_url(); ?>welcome/list" class="btn btn-danger mx-2">Back</a>
                            
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