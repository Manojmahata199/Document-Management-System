<style type="text/css">
  
.gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}


</style>

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-1 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
                             <?php 
                               if ($this->session->flashdata('success_msg') != ''): 
                                    echo 
                                    '<div class="text-center text-dark bg-success col-md-12 py-3">'.$this->session->flashdata('success_msg').'</div>'; 
                                endif;
                             ?>
      <div class="col col-lg-10 mb-1 mb-lg-0">
        <div class="card mb-1" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-12 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('profile_img'); ?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5><?php echo $this->session->userdata('user_name'); ?></h5>
              <h3><?php echo $this->session->userdata('emp_designation'); ?></h3>
              <a class="btn btn-primary text-center my-2" href="<?php echo base_url(); ?>welcome/upload_picture/<?php echo $this->session->userdata('id'); ?>">Upload picture</a>
              <!-- <i class="far fa-edit mb-5"></i> -->
            </div>
            <div class="col-md-12">
              <div class="card-body p-4">
                <h6>Basic Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('user_email'); ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('user_mobile'); ?></p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Company</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('company_name'); ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Department</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('user_department'); ?></p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Employee Id</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('emp_id'); ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Password</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('password'); ?></p>
                  </div>
                   <div class="col-6 mb-3">
                    <h6>User Type</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('emp_type'); ?></p>
                  </div>
                </div>
                <h6>Personal Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Date Of Birth</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('user_dob'); ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Address</h6>
                    <p class="text-muted"><?php echo $this->session->userdata('user_address'); ?></p>
                  </div>
                </div>
                 
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>