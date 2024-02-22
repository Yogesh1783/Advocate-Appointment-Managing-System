   
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Client</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white" class="breadcrumb-item active" aria-current="page">client List</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                              <a href="<?php echo base_url('index.php/advocate/addclient_adv')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Add Client</button></a>
                            </div>
                        </div>
                         <div class="page-header">
                            <div class="page-header-1">
                                <div class="page-header-1">
                              <a href="<?php echo base_url('index.php/doctor/addclient_dr')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Download as pdf</button></a>
                            </div>
                            </div>
                            </div>

                        <!-- End Page Header -->

                      

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                     
                                        <div class="table-responsive">
                                            <table style="width: 100%;" id="example3" class="table table-striped table-bordered text-nowrap" >
                                                <thead>
                                                    <tr>
                                                        <th style="width:2%">sl No</th>
                                                         <th style="width:2%">client name</th>
                                                        <th style="width:2%">age</th>
                                                        <th style="width:2%">gender</th>
                                                       
                                                        <th style="width:2%">birth date</th>
                                                         <th style="width:2%">mobile</th>
                                                          <th style="width:2%">address</th>
                                                        <th style="width:2%">type</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                      
                                                   <?php  $index=1; // LOOP TILL END OF DATA
                                                  foreach($users as $user)
                                                    {
                                                    ?>
            
                                                    <tr>
                                                       <td><?php echo $index?></td>
                                                        <td><?php echo $user->ClientName?></td>
                                                        <td><?php echo $user->ClientAge?></td>
                                                        <td><?php echo $user->ClientGender?></td>
                                                        
                                                         <td><?php echo $user->ClientBirth?></td>
                                                         <td><?php echo $user->ClientMobile?></td>
                                                         <td><?php echo $user->ClientAddress?></td>
                                                         <td><?php echo $user->CaseType?></td>
                                                        
                                                    
                                                       
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