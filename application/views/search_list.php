


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
                      <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px h-xl-100 border-0 bg-gray-200 d-flex" style="background-position: 100% 100%;background-size: 500px auto;background-image:url('/good/assets/media/misc/city.png')">
                        <!--begin::Body-->
                        <div class="d-flex row col-md-12 my-2">
                            <a href=""></a><h3 class="text-center my-2 col-md-10">All Document List</h3></a>
                            <a href="<?php echo base_url('welcome/document_list'); ?>" class="btn btn-info col-md-1 text-center text-white"><i class="fa fa-rotate"></i> Refresh</a>

                            <a href="<?php echo base_url('welcome/upload_document'); ?>" class="btn btn-success col-md-1 text-center text-white"><i class="fa fa-folder-plus"></i> Create</a>
                            <form action="<?php echo base_url(); ?>welcome/search_list" method="post">
                            <div class="input-group mb-3 my-4">
                              
                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" name="search_input" aria-describedby="button-addon2" required>
                                <button  type="submit" name="search_submit" id="search_submit" class="btn btn-outline-secondary btn-secondary">
                                   <i class="fa-solid fa-magnifying-glass"></i>
                               </button>
                                
                               
                            </div>
                            </form>



                           





                
                        </div>
                      <hr>
                        <div class="card-body d-flex flex-column justify-content-center ps-lg-15">
                            
                            <?php 
                               if ($this->session->flashdata('success_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-success col-md-12 py-3">'.$this->session->flashdata('success_msg').'</div>'; 
                                endif;
                                if ($this->session->flashdata('error_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-success col-md-12 py-3">'.$this->session->flashdata('error_msg').'</div>'; 
                                endif;
                             ?>
                           
                        <div class="table-responsive">

                         <table class="table table-striped table-bordered text-left">
                            <thead>
                               
                                <th>Name</th>
                                <th>Tags</th>
                               
                               
                                
                                <th>Date & Time</th>
                                <th>Options</th>
                                
                            </thead>
                            <tbody>
                            <?php foreach($result as $d) { 

                                $login_id=$this->session->userdata('id');
                                $emp_type=$this->session->userdata('emp_type');

                                if($emp_type=="admin"){ ?>



                                    <tr>
                                    
                                        <td><a href="<?php echo base_url('welcome/document_view/'.$d->id.''); ?>" style="height:50px; width:50px;"><i class="fa-solid fa-folder-open"></i> <?php echo $d->doc_upload_name; ?></td></a>

                                        <td><?php echo $d->d_title_name; ?></td>
                                       
                                      
                                       
                                        <td><?php echo $d->upload_date_time; ?></td>
                                        <td>
                                            
                                            <a class="btn btn-secondary" href="<?php echo base_url('welcome/download/'.$d->id.''); ?>"><i class="fa fa-download"></i></a>
                                           <!-- <a  href=""><i class="fa fa-download"></i></a> -->
                                           <!-- <a class="btn btn-info" href=""><i class="fa-solid fa-pen-to-square"></i></a> -->
                                           <a class="btn btn-info" href="<?php echo base_url(); ?>document_uploads/<?php echo $d->upload_by_id; ?>/<?php echo $d->d_title_name; ?>/<?php echo $d->doc_upload_name; ?>"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>

                                <?php 
                                }else{


                                        if($d->upload_by_id==$login_id){  ?>


                                            <tr>
                                                
                                                <td><a href="<?php echo base_url('welcome/document_view/'.$d->id.''); ?>" style="height:50px; width:50px;"><i class="fa-solid fa-folder-open"></i> <?php echo $d->doc_upload_name; ?></td></a>

                                                <td><?php echo $d->d_title_name; ?></td>
                                               
                                              
                                               
                                                <td><?php echo $d->upload_date_time; ?></td>
                                                <td>
                                                    
                                                    <a class="btn btn-secondary" href="<?php echo base_url('welcome/download/'.$d->id.''); ?>"><i class="fa fa-download"></i></a>
                                                   <!-- <a  href=""><i class="fa fa-download"></i></a> -->
                                                   <!-- <a class="btn btn-info" href=""><i class="fa-solid fa-pen-to-square"></i></a> -->
                                                   <a class="btn btn-info" href="<?php echo base_url(); ?>document_uploads/<?php echo $d->upload_by_id; ?>/<?php echo $d->d_title_name; ?>/<?php echo $d->doc_upload_name; ?>"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                  <?php }

                                }
                            }
                            ?>
                                                        

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


