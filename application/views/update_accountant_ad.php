<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/Admin/updateAccountant/'.$this->uri->segment(3)); ?>" method="POST">
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 class="main-content-title tx-30">Accountant</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Add Accountant</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                              <button class="btn ripple btn-main-primary" style="background-color: blue;"><a style="color:white" href="<?php echo base_url('index.php/admin/accountantlist_ad')?>">View Accountant</a></button>
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
                                                    <label class="mg-b-0">Name</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                     <input class="form-control" name="AdminAccountantName" placeholder="" value="<?php echo $accountant->AdminAccountantName?>" type="text" required pattern="[a-z , A-Z]*" title="Please enter alphabets only">
                                                </div>
                                            </div>
                                               
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Email</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AdminAccountantEmail" placeholder="" value="<?php echo $accountant->AdminAccountantEmail?>"  type="email" required>
                                                </div>
                                            </div>
                                          
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Password</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AdminAccountantPassword" placeholder="" value="<?php echo $accountant->AdminAccountantPassword?>" type="Password" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g">
                                                </div>
                                            </div>   
                                        </div>
                                             
                                           

                                          
                                        </div>

                                        <div class="row row-sm mg-t-20">
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Address</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AdminAccountantAddress" placeholder="" value="<?php echo $accountant->AdminAccountantAddress?>" type="Textarea" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                        <div class="col-md-3">
                                                    <label class="mg-b-0">Mobile</label>
                                                        </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AdminAccountantMobile" placeholder="" value="<?php echo $accountant->AdminAccountantMobile?>" type="text" pattern="[0-9]{10}" title="Please enter the valid mobile no" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                            
                                        </div>
                                       
                                           
                                           
                                            
                                            
                                             
                                          
                                        
                                        
                                         <div class=" mg-t-3" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Update Accountant</button>
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