<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/Admin/insertAdvocate'); ?>" method="POST"  >

                         <?php echo validation_errors(); ?>
                       <?php echo form_open('adddoctor_ad'); ?>
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Advocate</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white" class="breadcrumb-item active" aria-current="page">Add Advocate</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                             <button class="btn ripple btn-main-primary" style="background-color: blue;"> <a style="color:white" href="<?php echo base_url('index.php/Admin/advocatelist_ad')?>">View Advocate</a></button>
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
                                                    <input class="form-control" name="AdminAdvocateName" placeholder="" type="text" required pattern="[a-z , A-Z]*" title="Please enter alphabets only">
                                                </div>
                                            </div>
                                               
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Email</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AdminAdvocateEmail" placeholder="" type="email" required >
                                                </div>
                                            </div>
                                          
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Password</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                        <input class="form-control" name="AdminAdvocatePassword" id="password"  placeholder="password" type="Password" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" >
                       
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
                                                    <input class="form-control" name="AdminAdvocateAddress" placeholder="" type="Textarea" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Mobile no</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AdminAdvocateMobile" placeholder="" type="text" pattern="[0-9]{10}" title="Please enter the valid mobile no" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Advocate Department</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
        <select class="form-control" name="AdminAdvocateDepartment" required >
                <option value="">Select</option>
                                                           
                <option value="Tax Lawyer">Tax Lawyer</option>
                <option value="Corporate Lawyer">Corporate Lawyers</option>
                <option value="Immigration Lawyer">Immigration Lawyers</option>
                <option value="Criminal Lawyer">Criminal Lawyer</option>
                <option value="Civil Rights Lawyer">Civil Rights Lawyer</option>
                <option value="Family Lawyer">Family Lawyer</option>
                <option value="Environmental Lawyer">Environmental Lawyer</option>
                <option value="Civil Litigation Lawyer">Civil Litigation Lawyers</option>
                <option value="Constitutional Lawyer">Constitutional Lawyers</option>
                <option value="Real Estate Lawyers">Real Estate Lawyers</option>
                <option value="Bankruptcy Lawyers">Bankruptcy Lawyers</option>
                <option value="Labor Lawyers">Labor Lawyers</option>
                <option value="Malpractice Lawyers">Malpractice Lawyers</option>
                <option value="Personal Injury Lawyers">Personal Injury Lawyers</option>
                <option value="Family Lawyers">Family Lawyers</option>
                <option value="Contract Lawyer">Contract Lawyer</option>
                <option value="Employment Lawyer">Employment Lawyer</option>
                                                                            
        </select>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                       <div class="row row-sm mg-t-20">
                                        <div class="col-lg-4 mb-4">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Enrollment no</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                        <input class="form-control" name="AdminAdvocateCertificate" placeholder="" type="text" required >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-4">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Profile </label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="AdvocateImage"  type="file" >
                                                    </div>
                                                </div>
                                            </div>
                                           
                                          
                                        </div>
                                        
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Add Advocate</button>
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
            <script>
                Function viewpassword(){
                    var password=document.getElementById('password');
                    var passtatus=document.getElementById('');
                }
            </script>