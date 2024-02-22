 <?php

// Username is root
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Management";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Checking for connections

// SQL query to select data from database
$sql = "SELECT * FROM Laboratorist_ad";
$result = $conn->query($sql);
$conn->close();
?>
<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 class="main-content-title tx-30">Laboratorist</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Laboratorist List</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                              <a href="<?php echo base_url('index.php/Admin/addlabo_ad')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Add Laboratorist</button></a>
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
                                                        <th style="width:2%">laboratorist name</th>
                                                        <th style="width:2%">email</th>
                                                        <th style="width:2%">address</th>
                                                        <th style="width:2%">mobile</th>
                                                        <th style="width:2%">option</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  $index=1; // LOOP TILL END OF DATA
                                                  foreach($labos as $labo)
                                                    {
                                                    ?>
            
                                                    <tr>
                                                       <td><?php echo $index?></td>
                                                        <td><?php echo $labo->AdminLaboratoristName?></td>
                                                        <td><?php echo $labo->AdminLaboratoristEmail?></td>
                                                        <td><?php echo $labo->AdminLaboratoristAddress?></td>
                                                       <td><?php echo $labo->AdminLaboratoristMobile?></td>
                                                        
                                                        
                                                        <td><a href="<?php echo base_url('index.php/Admin/update_labo_ad/'.$labo->AdminLaboratoristId)?>"><i  class="fe fe-edit-3"></i></a>
                                                        &nbsp;
                                                            
                                                        <a data-target="#modaldemo2<?php echo $labo->AdminLaboratoristId;?>" data-toggle="modal" ><i  class="fe fe-trash-2"></i></a></td>
                                                        
                                                       
                                                        <!-- Small modal -->
            <div class="modal" id="modaldemo2<?php echo $labo->AdminLaboratoristId;?>">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Laboratorist</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this row?</p>
                            <?php echo $labo->AdminLaboratoristId;?>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href=<?php echo base_url('index.php/Admin/deleteLaboratorist/'.$labo->AdminLaboratoristId)?>"><button 
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