<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                  <div align="center">
                    <form action="<?php echo base_url('index.php/admin/index') ?>" method="POST" enctype="multipart/form-data">

                         <?php echo validation_errors(); ?>
                       <?php echo form_open('adddoctor_ad'); ?>
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white;" class="main-content-title tx-30">Advocate </h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Contact</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                                        <div class="mb-3">
                            <button class="btn ripple btn-main-primary" style="background-color: blue;"> <a style="color:white" href="<?php echo base_url('index.php/admin/send_ci')?>">Client</a></button>
                            <button class="btn ripple btn-main-primary" style="background-color: blue;"> <a style="color:white" href="<?php echo base_url('index.php/admin/send_adv')?>">Advocate</a></button>
                            
                            </div>
                        </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Row -->
                        <div class="row">

                            <div class="col-lg-10 col-md-9">
                              <div align="center">
                                <div class="card">
                                    <div class="card-body">
                                      
                                        <div class="row">
           
                                            <div class="col-lg-6 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Email</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="mailTo" placeholder="" type="email" >
                                                </div>
                                            </div>
                                               
                                        </div>
                                      </div>
                                      <div class="row">
                                            <div class="col-lg-6 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Subject</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="mailsubject" placeholder="" type="text" required >
                                                </div>
                                            </div>
                                          
                                        </div>
                                      </div>
                                      <div class="row">
                                            <div class="col-lg-6 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Message</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                  <textarea class="form-control" name="body"></textarea>
                                                    
                                                </div>
                                            </div>   
                                        </div>
                                             
                                           

                                          
                                        </div>

                                        
                                        
                                         <div class=" mg-t-1" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Send</button>
                                        </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Row -->

                 

                   

                      
                    </form>
                  </div>
                </div>
            </div>
            <!-- End Main Content-->