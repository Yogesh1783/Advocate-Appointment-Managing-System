<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/Home/insertAdvocate');?>" method="POST" enctype="multipart/form-data">

                         <?php echo validation_errors(); ?>
                       <?php echo form_open('adddoctor_ad'); ?>
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Register here as advocate </h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page" style="color:white">Join us</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                                        <div class="mb-3">
                            <button class="btn ripple btn-main-primary" style="background-color: blue;"> <a style="color:white" href="<?php echo base_url('index.php/home/Register_ci')?>">Client</a></button>
                            <button class="btn ripple btn-main-primary" style="background-color: blue;"> <a style="color:white" href="<?php echo base_url('index.php/home/Register_adv')?>">Advocate</a></button>
                            
                            </div>
                        </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                      
                                        <div class="row">
           
                                            <div class="col-lg-4">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Name</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_AdvocateName" placeholder="" type="text" required pattern="[a-z , A-Z]*" title="Please enter alphabets only">
                                                </div>
                                            </div>
                                               
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Email</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_AdvocateEmail" placeholder="" type="email" required >
                                                </div>
                                            </div>
                                          
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Mobile No</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_AdvocateMobileNo" placeholder="" type="text" pattern="[0-9]{10}" title required >
                                                </div>
                                            </div>   
                                        </div>
                                             
                                           

                                          
                                        </div>

                                        <div class="row row-sm mg-t-20">
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Address</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_AdvocateAddress" placeholder="" type="Textarea" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Department</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                     <select class="form-control" name="Reg_AdvocateDepartment" required >
                <option value="">Select</option>
                                                   
                                                    <option value="Tax lawyer">Tax lawyer</option>
                <option value="Corporate lawyer">Corporate lawyer</option>
                <option value="Immigration lawyer">Immigration lawyer</option>
                <option value="Criminal lawyer">Criminal lawyer</option>
                <option value="Civil Rights lawyer">Civil Rights lawyer</option>
                <option value="Family lawyer">Family lawyer</option>
                <option value="Environmental lawyer">Environmental lawyer</option>
                <option value="Civil Litigation lawyer">Civil Litigation lawyer</option>
                <option value="Constitutional lawyer">Constitutional lawyer</option>
                <option value="Real Estate lawyer">Real Estate lawyer</option>
                <option value="Bankruptcy lawyer">Bankruptcy lawyer</option>
                <option value="Labor lawyer">Labor lawyer</option>
                <option value="Malpractice lawyer">Malpractice lawyer</option>
                <option value="Personal Injury lawyer">Personal Injury lawyer</option>
                <option value="Family lawyer">Family lawyer</option>
                <option value="Contract lawyer">Contract lawyer</option>
                <option value="Employment lawyer">Employment lawyer</option>
                                                                            
        </select>
                                                </div>
                                            </div>
                                           
                                           </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Certificate No</label>
                                                     </div>
                                                    <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_AdvocateCertificate" placeholder="" type="text"  required>
                                                </div>
                                                </div>
                                            </div>
                                            
                                           

                                        </div>
                                       
                                        
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Register</button>
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
            <!-- End Main Content-->