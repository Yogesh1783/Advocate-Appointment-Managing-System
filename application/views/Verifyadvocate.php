 
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Admin Panel</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white" class="breadcrumb-item active" aria-current="page">advocate List</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                            
                                 <a href="<?php echo base_url('index.php/Admin/addadvocate_ad')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Add advocate</button></a>
                            </div>
                        </div>
                          <div class="page-header">
                            <div class="page-header-1">
                                <div class="page-header-1">
                                        <button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print</button>

                            </div>
                            </div>
                        </div> -->
                        <!-- End Page Header -->

                      

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                     
                                        <div class="table-responsive">
                                            <table style="width:100%" id="example3" class="table table-striped table-bordered text-nowrap" >
                                                <thead>
                                                    <tr>
                                                        <th style="width:2%">Sl no</th>
                                                         <th style="width:2%">advocate name</th>
                                                        <th style="width:2%">Department</th>
                                                        <th style="width:2%">Mobile No</th>
                                                        <th style="width:2%">Email Address</th>
                                                        <th style="width:2%">Address</th>
                                                        <th style="width:2%">Department</th>

                                                        
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $index=1; 
                                                    foreach($advocates as $advocate){?>
                                                    <tr>
                                                        <td><?php echo $index?></td>
                                                        <td><?php echo $advocate->Reg_AdvocateName?></td>
                                                        <td><?php echo $advocate->Reg_AdvocateEmail?></td>
                                                        <td><?php echo $advocate->Reg_AdvocateAddress?></td>
                                                        <td><?php echo $advocate->Reg_AdvocateMobileNo?></td>
                                                         <td><?php echo $advocate->Reg_AdvocateCertificate?></td>
                                                         <td><?php echo $advocate->Reg_AdvocateDepartment?></td>
                                                         


                                                        
                                                       
                                                        <!-- Small modal -->
            
            <!-- End Small Modal -->
                                                    </tr>
                                                   <?php $index++;}?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->


                 
                </div>
            </div>
            <!-- End Main Content-->

           