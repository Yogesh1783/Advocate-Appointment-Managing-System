<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                     <form  action="<?php echo base_url('index.php/Admin/insertClient'); ?>" method="POST">
                         <?php echo validation_errors(); ?>
                       <?php echo form_open('addpatient_ad'); ?>
                        <!-- Page Header -->
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Client</h1>
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
                                                           
                <option value="Tax Case">Tax Case</option>
                <option value="Corporate Case">Corporate Case</option>
                <option value="Immigration Case">Immigration Case</option>
                <option value="Criminal Case">Criminal Case</option>
                <option value="Civil Rights Case">Civil Rights Case</option>
                <option value="Family Case">Family Case</option>
                <option value="Environmental Case">Environmental Case</option>
                <option value="Civil Litigation Case">Civil Litigation Case</option>
                <option value="Constitutional Case">Constitutional Case</option>
                <option value="Real Estate Case">Real Estate Case</option>
                <option value="Bankruptcy Case">Bankruptcy Case</option>
                <option value="Labor Case">Labor Case</option>
                <option value="Malpractice Case">Malpractice Case</option>
                <option value="Personal Injury Case">Personal Injury Case</option>
                <option value="Family Case">Family Case</option>
                <option value="Contract Case">Contract Case</option>
                <option value="Employment Case">Employment Case</option>
                                                                            
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
                                                    <input class="form-control" name="ClientName" placeholder="" type="text">
                                                </div>
                                            </div>
                                          
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Client Email</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="ClientEmail" placeholder="" type="Email">
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
                                                    <input class="form-control" name="ClientMobile" placeholder="123456789" type="text">
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Client Age</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="ClientAge" placeholder="" type="text">
                                                </div>
                                            </div>
                                           
                                           </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">BirthDate</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="ClientBirth" placeholder="123456789" type="date">
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
                                                      <option value="Male">Male</option>
                                                     <option value="Female">Female</option>
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
                                                    <input class="form-control" name="ClientPassword" placeholder="" type="Password">
                                                </div>
                                            </div>
                                           
                                           </div>
                                           <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">   
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Address</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="ClientAddress" placeholder="" type="Textarea">
                                                </div>
                                            </div>
                                          
                                        </div>
                                           
                                            
                                            
                                            
                                        
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Add Client</button>
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