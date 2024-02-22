<?php

// Username is root
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Management";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Checking for connections

// SQL query to select data from database
$sql = "SELECT * FROM accountant_ad";
$result = $conn->query($sql);
$conn->close();
?>
<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 class="main-content-title tx-30">Accountant</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Accountant List</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                              <a href="<?php echo base_url('index.php/Admin/addaccountant_ad')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Add Accountant</button></a>
                            </div>
                        </div>
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
                                                        <th style="width:2%">sl No</th>
                                                         <th style="width:2%">accountant name</th>
                                                        <th style="width:2%">email</th>
                                                        <th style="width:2%">address</th>
                                                        <th style="width:2%">mobile</th>
                                                        <th style="width:2%">option</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $index=1; 
                                                    foreach($accountants as $accountant){?>
                                                    <tr>
                                                        <td><?php echo $index?></td>
                                                        <td><?php echo $accountant->AdminAccountantName?></td>
                                                        <td><?php echo $accountant->AdminAccountantEmail?></td>
                                                        <td><?php echo $accountant->AdminAccountantAddress?></td>
                                                        <td><?php echo $accountant->AdminAccountantMobile?></td>
                                                        
                                                         
                                                        <td><a href="<?php echo base_url('index.php/Admin/update_accountant_ad/'.$accountant->AdminAccountantId)?>"><i  class="fe fe-edit-3"></i></a>
                                                             &nbsp;
                                                            <a data-target="#modaldemo2<?php echo $accountant->AdminAccountantId;?>" data-toggle="modal" ><i  class="fe fe-trash-2"></i></a></td>
                                                        </td>
                                                       
                                                        
                                                       
                                                       
                                                   <div class="modal" id="modaldemo2<?php echo $accountant->AdminAccountantId;?>">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Accountant</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this row?</p>
                            <?php echo $accountant->AdminAccountantId;?>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href=<?php echo base_url('index.php/Admin/deleteAccountant/'.$accountant->AdminAccountantId)?>"><button 
                                class="btn ripple btn-primary" type="button">Delete</button></a>
                            <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
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