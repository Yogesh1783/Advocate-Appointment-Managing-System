<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/Home/insertClient'); ?>" method="POST">

                         <?php echo validation_errors(); ?>
                       <?php echo form_open('adddoctor_ad'); ?>
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Register here as client</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page" style="color: white;">Join us</li>
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
                                                    <label class="mg-b-0">Client Name</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_ClientName" placeholder="" type="text" required pattern="[a-z , A-Z]*" title="Please enter alphabets only">
                                                </div>
                                            </div>
                                               
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Client Email</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_ClientEmail" placeholder="" type="email" required >
                                                </div>
                                            </div>
                                          
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Client Address</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_ClientAddress" placeholder="" type="Textarea" required >
                                                </div>
                                            </div>   
                                        </div>
                                             
                                           

                                          
                                        </div>

                                        <div class="row row-sm mg-t-20">
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Client Mobile no</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Reg_ClientMobileno" placeholder="" type="" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Client CaseType</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                    <select class="form-control" name="Reg_ClientCaseType" required >
                <option value="">Select</option>
                                                   
                                                    <option value="Tax case">Tax case</option>
                <option value="Corporate case">Corporate case</option>
                <option value="Immigration case">Immigration case</option>
                <option value="Criminal case">Criminal case</option>
                <option value="Civil Rights case">Civil Rights case</option>
                <option value="Family case">Family case</option>
                <option value="Environmental case">Environmental case</option>
                <option value="Civil Litigation case">Civil Litigation case</option>
                <option value="Constitutional case">Constitutional case</option>
                <option value="Real Estate case">Real Estate case</option>
                <option value="Bankruptcy case">Bankruptcy case</option>
                <option value="Labor case">Labor case</option>
                <option value="Malpractice case">Malpractice case</option>
                <option value="Personal Injury case">Personal Injury case</option>
                <option value="Family case">Family case</option>
                <option value="Contract case">Contract case</option>
                <option value="Employment case">Employment case</option>
                                                                            
        </select>


                                                </div>
                                            </div>
                                           
                                           </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Client Age</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                               
                                                <input class="form-control" type="text" name="Reg_ClientAge" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="row row-sm mg-t-20">
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Client Gender</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                     <select class="form-control mb-3" name="Reg_ClientGender" >
                                                     <option disabled selected>select</option>
                                                      <option value="Male">Male</option>
                                                     <option value="Female">Female</option>
                                                </select>
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