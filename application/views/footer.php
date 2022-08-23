 




            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer">
              <!--begin::Footer container-->
              <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                  <span class="text-muted fw-bold me-1">2022©</span>
                  <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2">About</a>
                  </li>
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2">Support</a>
                  </li>
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2">Purchase</a>
                  </li>
                </ul>
                <!--end::Menu-->
              </div>
              <!--end::Footer container-->
            </div>
            <!--end::Footer-->









          </div>
          <!--end:::Main-->



        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
<!--end::Scrolltop-->




 <!--begin::Javascript-->
    <script>var hostUrl = "/good/assets/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo base_url(); ?>/assets/js/plugins.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/scripts.bundle.js"></script>
    <!--end::Glob<?php echo base_url(); ?> Javascript Bundle-->
    <!--begin::Pa<?php echo base_url(); ?> Vendors Javascript(used by this page)-->
    <script src="<?php echo base_url(); ?>/assets/js/datatables.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/vis-timeline.bundle.js"></script>
    <!--end::Page<?php echo base_url(); ?>endors Javascript-->
    <!--begin::Pa<?php echo base_url(); ?> Custom Javascript(used by this page)-->
    <script src="<?php echo base_url(); ?>/assets/js/widgets.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/widgets.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/chat.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/intro.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/upgrade-plan.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/type.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/budget.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/settings.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/team.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/targets.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/files.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/complete.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/create-app.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/create-campaign.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/users-search.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>index_vendor/js/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->






    <script type="text/javascript">
      $(document).ready(function(){
  
  
       $(this).scrollTop(0);
            

            $('#user_company').click(function(){


              // alert("this is company");
              $.ajax({
                type: "POST",         
                url: "<?php echo base_url(); ?>welcome/get_department",
                // async: true,
                dataType: 'json',
               
               success: function(data)               
               {   

                  // alert(data.length);
                     $('#user_department').html('');  
                    var options = '';  
                    options += '<option value="">Select Department</option>';  
                    for (var i = 0; i < data.length; i++) {  
                        options += '<option value="' + data[i]['dept_name'] + '">' + data[i]['dept_name'] + '</option>';  
                    } 
                    options += '<option value="Others">Others</option>';
                    $('#user_department').append(options);  
                                 
                 }
              
             });

           });




             $('#user_department').click(function(){


              // alert("this is company");
              $.ajax({
                type: "POST",         
                url: "<?php echo base_url(); ?>welcome/get_designation",
                // async: true,
                dataType: 'json',
               
               success: function(data)               
               {   

                  // alert(data.length);
                     $('#user_designation').html('');  
                    var options = '';  
                    options += '<option value="">Select Designation</option>';  
                    for (var i = 0; i < data.length; i++) {  
                        options += '<option value="' + data[i]['designation_name'] + '">' + data[i]['designation_name'] + '</option>';  
                    } 
                    options += '<option value="Others">Others</option>';
                    $('#user_designation').append(options);  
                                 

                
                 }
              
               });


            });










    });
      



    </script>
  </body>
  <!--end::Body-->
</html>