<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                     <form  action="<?php echo base_url('index.php/advocate/updateClient/'.$this->uri->segment(3)); ?>" method="POST">
                         <?php echo validation_errors(); ?>
                       <?php echo form_open('addpatient_ad'); ?>
                        <!-- Page Header -->
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 class="main-content-title tx-30">Client</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Add Client</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                             <button class="btn ripple btn-main-primary" style="background-color: blue;"><a style="color:white" href="<?php echo base_url('index.php/Admin/Clientlist_ad')?>">View Client</a></button>
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
                                                    <label class="mg-b-0">CaseType</label>
                                                </div>
<div class="col-md-9 mg-t-5 mg-md-t-0">
<select class="form-control" name="CaseType" >
<option value="">Select</option>
<option <?php echo $client->CaseType=="Tax Case" ? "selected":""; ?> value="Tax Case">Tax Case</option>
<option <?php echo $client->CaseType=="Corporate Case" ? "selected":""; ?> value="Corporate Case">Corporate Case</option>
<option <?php echo $client->CaseType=="Immigration Case" ? "selected":""; ?> value="Immigration Case">Immigration Case</option>
<option <?php echo $client->CaseType=="Criminal Case" ? "selected":""; ?> value="Criminal Case">Criminal Case</option>
<option <?php echo $client->CaseType=="Civil Rights Case" ? "selected":""; ?> value="Civil Rights Case">Civil Rights Case</option>
<option <?php echo $client->CaseType=="Family Case" ? "selected":""; ?> value="Family Case">Family Case</option>
<option <?php echo $client->CaseType=="Environmental Case" ? "selected":""; ?> value="Environmental Case">Environmental Case</option>
<option <?php echo $client->CaseType=="Civil Litigation Case" ? "selected":""; ?> value="Civil Litigation Case">Civil Litigation Case</option>
<option <?php echo $client->CaseType=="Constitutional Case" ? "selected":""; ?> value="Constitutional Case">Constitutional Case</option>
<option <?php echo $client->CaseType=="Real Estate Case" ? "selected":""; ?> value="Real Estate Case">Real Estate Case</option>
<option <?php echo $client->CaseType=="Bankruptcy Case" ? "selected":""; ?> value="Bankruptcy Case">Bankruptcy Case</option>
<option <?php echo $client->CaseType=="Labor Case" ? "selected":""; ?> value="Labor Case">Labor Case</option>
<option <?php echo $client->CaseType=="Malpractice Case" ? "selected":""; ?> value="Malpractice Case">Malpractice Case</option>
<option <?php echo $client->CaseType=="Personal Injury Case" ? "selected":""; ?> value="Personal Injury Case">Personal Injury Case</option>
<option <?php echo $client->CaseType=="Family Case" ? "selected":""; ?> value="Family Case">Family Case</option>
<option <?php echo $client->CaseType=="Contract Case" ? "selected":""; ?> value="Contract Case">Contract Case</option>
<option <?php echo $client->CaseType=="Employment Case" ? "selected":""; ?> value="Employment Case">Employment Case</option>
                                                                            
</select>
</div>
</div>
                                               
</div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Client Name</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="ClientName" placeholder="" value="<?=$client->ClientName?>" type="text">
                                                </div>
                                            </div>
                                          
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Client Email</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="ClientEmail" placeholder="" value="<?=$client->ClientEmail?>" type="text">
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
                                                    <input class="form-control" name="ClientMobile" placeholder="123456789" value="<?=$client->ClientMobile?>" type="text">
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Client Age</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="ClientAge" placeholder="" value="<?=$client->ClientAge?>" type="text">
                                                </div>
                                            </div>
                                           
                                           </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">BirthDate</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="ClientBirth" placeholder="" value="<?=$client->ClientBirth?>" type="date">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                       <div class="row row-sm mg-t-20">
                                        <div class="col-lg-4 mb-4">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Client Gender</label>
                                                     </div>
<div class="col-md-9 mg-t-5 mg-md-t-0">
<select class="form-control mb-3" name="ClientGender" >
<option disabled selected>select</option>
<option <?php echo $client->ClientGender=="Male" ? "selected":""; ?> value="Male">Male</option>
<option <?php echo $client->ClientGender=="Female" ? "selected":""; ?> value="Female">Female</option>
</select>
</div>
                                                </div>
                                            </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Password</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="ClientPassword" placeholder="" value="<?=$client->ClientPassword?>" type="Password">
                                                </div>
                                            </div>
                                           
                                           </div>
                                           <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">   
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Address</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="ClientAddress" placeholder="" value="<?=$client->ClientAddress?>" type="Textarea">
                                                </div>
                                            </div>
                                          
                                        </div>
                                           
                                            
                                            
                                            
                                        
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Update Client</button>
                                        </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                 

                   

                      

                </div>
            </div>
            <!-- End Main Content-->