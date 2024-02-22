
 
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Find Lawyer</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white" class="breadcrumb-item active" aria-current="page">Search</li>
                                </ol>
                            </div>
                             
                        </div>
                       
                      

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                     
                                        <div class="table-responsive">
                                            <table style="width:100%" id="example3" class="table table-striped table-bordered text-nowrap" >
                                                <thead>
                                                    <tr style="color: white;">
                                                        <th style="width:2%">SL.NO</th>
                                                        <th style="width:2%">Profile</th>
                                                         <th style="width:2%">Advocate name</th>
                                                        <th  style="width:2%">Department</th>
                                                        
                                                        <th style="width:2%"></th>
                                                      
                                                        <th style="width:2%"></th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $index=1; 
                                                    foreach($advocates as $advocate){?>
                                                    <tr>
                                                        <td><?php echo $index?></td>
                                                        <td>
                                                            <img src="<?php echo base_url('./public/upload/image/'). $advocate->AdvocateImage?>" width="45px" height="45px">
                                                        </td>
                                                        <td><?php echo $advocate->AdminAdvocateName?> </td>
                                                        <td><?php echo $advocate->AdminAdvocateDepartment?></td>
                                                        <td><span class="text-muted"><i class="far fa-check-circle text-success mr-1"></i>Verified</span></td>
                                                        <td>
                                                            <button class="btn ripple btn-main-primary" style="background-color: blue;"><a style="color:white" href="<?php echo base_url('index.php/Client/login_ci')?>">View Profile</a></button>
                                                            
                                                        </td>
                                                        
                                                         
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

           
 
 
    
                    
           