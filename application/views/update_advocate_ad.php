<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/advocate/updateAdvocate/'.$this->uri->segment(3)); ?>" method="POST">

                         <?php echo validation_errors(); ?>
                       <?php echo form_open('adddoctor_ad'); ?>
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 class="main-content-title tx-30">Advocate</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Add Advocate</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                             <button class="btn ripple btn-main-primary" style="background-color: blue;"> <a style="color:white" href="<?php echo base_url('index.php/Admin/advocatelist_ad')?>">View Doctor</a></button>
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
                                                    <input class="form-control" value="<?=$advocate->AdminAdvocateName  ?>" name="AdminAdvocateName" placeholder="" type="text" required pattern="[a-z , A-Z]*" title="Please enter alphabets only">
                                                </div>
                                            </div>
                                               
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Email</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" value="<?=$advocate->AdminAdvocateEmail  ?>" name="AdminAdvocateEmail" placeholder="" type="email" required >
                                                </div>
                                            </div>
                                          
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Password</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AdminAdvocatePassword" placeholder="" value="<?=$advocate->AdminAdvocatePassword  ?>" type="Password" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" >
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
                                                    <input class="form-control" value="<?=$advocate->AdminAdvocateAddress?>" name="AdminAdvocateAddress" placeholder="" type="Textarea" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Advocate Mobile no</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AdminAdvocateMobile" placeholder="" value="<?=$advocate->AdminAdvocateMobile?>" type="text" pattern="[0-9]{10}" title="Please enter the valid mobile no" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Advocate Department</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                              
                
<select class="form-control" name="AdminAdvocateDepartment" required>
<option value="">Select</option>
<option <?php echo $advocate->CaseType=="Tax Case" ? "selected":""; ?> value="Tax Case">Tax Case</option>
<option <?php echo $advocate->CaseType=="Corporate Case" ? "selected":""; ?> value="Corporate Case">Corporate Case</option>
<option <?php echo $advocate->CaseType=="Immigration Case" ? "selected":""; ?> value="Immigration Case">Immigration Case</option>
<option <?php echo $advocate->CaseType=="Criminal Case" ? "selected":""; ?> value="Criminal Case">Criminal Case</option>
<option <?php echo $advocate->CaseType=="Civil Rights Case" ? "selected":""; ?> value="Civil Rights Case">Civil Rights Case</option>
<option <?php echo $advocate->CaseType=="Family Case" ? "selected":""; ?> value="Family Case">Family Case</option>
<option <?php echo $advocate->CaseType=="Environmental Case" ? "selected":""; ?> value="Environmental Case">Environmental Case</option>
<option <?php echo $advocate->CaseType=="Civil Litigation Case" ? "selected":""; ?> value="Civil Litigation Case">Civil Litigation Case</option>
<option <?php echo $advocate->CaseType=="Constitutional Case" ? "selected":""; ?> value="Constitutional Case">Constitutional Case</option>
<option <?php echo $advocate->CaseType=="Real Estate Case" ? "selected":""; ?> value="Real Estate Case">Real Estate Case</option>
<option <?php echo $advocate->CaseType=="Bankruptcy Case" ? "selected":""; ?> value="Bankruptcy Case">Bankruptcy Case</option>
<option <?php echo $advocate->CaseType=="Labor Case" ? "selected":""; ?> value="Labor Case">Labor Case</option>
<option <?php echo $advocate->CaseType=="Malpractice Case" ? "selected":""; ?> value="Malpractice Case">Malpractice Case</option>
<option <?php echo $advocate->CaseType=="Personal Injury Case" ? "selected":""; ?> value="Personal Injury Case">Personal Injury Case</option>
<option <?php echo $advocate->CaseType=="Family Case" ? "selected":""; ?> value="Family Case">Family Case</option>
<option <?php echo $advocate->CaseType=="Contract Case" ? "selected":""; ?> value="Contract Case">Contract Case</option>
<option <?php echo $advocate->CaseType=="Employment Case" ? "selected":""; ?> value="Employment Case">Employment Case</option>
                                                                            
</select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                       <div class="row row-sm mg-t-20">
                                        <div class="col-lg-4 mb-4">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Certificate no</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                        <input class="form-control" value="<?=$advocate->AdminAdvocateCertificate ?>" name="AdminAdvocateCertificate" placeholder="" type="text" required pattern="[a-z , A-Z]*" title="Please enter alphabets only">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                          
                                        </div>
                                        
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Update Advocate</button>
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