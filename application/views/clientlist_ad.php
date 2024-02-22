 
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Admin</h1>
                                <ol class="breadcrumb">
                                    <li style="color: white;" class="breadcrumb-item active" aria-current="page">client List</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                              <a href="<?php echo base_url('index.php/admin/addclient_ad')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Add Client</button></a>
                            </div>
                        </div>
                         <div class="page-header">
                            <div class="page-header-1">
                                <div class="page-header-1">
                                        <button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print </button>
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
                                                        <th style="width:2%">option</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                      
                                                   <?php  $index=1; // LOOP TILL END OF DATA
                                                  foreach($clients as $client)
                                                    {
                                                    ?>
            
                                                    <tr>
                                                       <td><?php echo $index?></td>
                                                        <td><?php echo $client->ClientName?></td>
                                                        <td><?php echo $client->ClientAge?></td>
                                                        <td><?php echo $client->ClientGender?></td>
                                                        
                                                         <td><?php echo $client->ClientBirth?></td>
                                                         <td><?php echo $client->ClientMobile?></td>
                                                         <td><?php echo $client->ClientAddress?></td>
                                                         <td><?php echo $client->CaseType?></td>
                                                        <td><a href="<?php echo base_url('index.php/Admin/update_client_ad/'.$client->ClientId)?>"><i  class="fe fe-edit-3"></i></a>
                                                         &nbsp;
                                                            <a data-target="#modaldemo2<?php echo $client->ClientId;?>" data-toggle="modal" ><i  class="fe fe-trash-2"></i></a></td>
                                                        
                                                        <div class="modal" id="modaldemo2<?php echo $client->ClientId;?>">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Client</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this row?</p>
                            <?php echo $client->ClientId;?>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href=<?php echo base_url('index.php/Admin/deleteClient/'.$client->ClientId)?>"><button 
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