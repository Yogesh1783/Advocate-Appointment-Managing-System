<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="#" method="POST">
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 class="main-content-title tx-30">Appointment</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Add Appointment</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                              
                            </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                      
                                        
                                        <div class="row row-sm mg-t-20">
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0">
                                               
                                                 
                                               
                                             
                                                    <div class="row row-xs align-items-center mg-b-20">
                                                        <div class="col-md-3">
                                                            <label class="mg-b-0">Email Id:</label>
                                                        </div>
                                                        <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                             <?php $index=1; 
                                                            foreach($advocates as $advocate){?>
                                                            
                                                             <td><?php echo $advocate->AdminAdvocateEmail ?></td>
                                                             <?php $index++;}?>
                                                             
                                                        </div>
                                                  </div>
                                              </div>
                                                  <div class="col-lg-3 mg-t-10 mg-lg-t-0">
                                                    <div class="row row-xs align-items-center mg-b-20">
                                                        <div class="col-md-5">
                                                            <label class="mg-b-0">Password :</label>
                                                        </div>
                                                         <div class="col-lg-18 mg-t-5 mg-lg-t-0">
                                                            <?php $index=1; 
                                                            foreach($advocates as $advocate){?>
                                                            
                                                             <td><?php echo $advocate->AdminAdvocatePassword ?></td>
                                                             <?php $index++;}?>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                             
                                            
                                             <div class="row">
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success"><a style="color:white" href="<?php echo base_url('index.php/advocate/changepwd_adv/'.$advocate->AdminAdvocateId)?>">Edit</a></button> 
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