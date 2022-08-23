


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
                        <h3 class="text-center my-2">All Users List</h3>
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
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Mobile No</th>
                                <th>Employee Id</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Options</th>
                                
                            </thead>
                            <tbody>
                            <?php foreach($result as $d) { ?> 
                                <tr>
                                    <td><?php echo $d->user_name; ?></td>
                                    <td><?php echo $d->user_email; ?></td>
                                    <td><?php echo $d->user_mobile; ?></td>
                                    <td><?php echo $d->user_id; ?></td>
                                    <td><?php echo $d->date_of_birth; ?></td>
                                    <td><?php echo $d->department; ?></td>
                                    <td><?php echo $d->designation; ?></td>
                                    <td>
                                        
                                        <a class="btn btn-info" href="<?php echo base_url('Welcome/edit_view/'.$d->id.'');?>">Edit</a>
                                       <!-- <a class="btn btn-danger" href="<?php// echo base_url('Welcome/delete_row/'.$d->id.'');?>">Delete</a> -->
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


