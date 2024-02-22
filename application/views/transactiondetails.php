 
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Admin</h1>
                                <ol class="breadcrumb">
                                    <li style="color: white;" class="breadcrumb-item active" aria-current="page">Client transaction Details</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                              <a href="<?php echo base_url('index.php/admin/paymentdetails')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Advocate transaction Details</button></a>
                            </div>
                        </div>
                         <div class="page-header">
                            <div class="page-header-1">
                                <div class="page-header-1">
                              <a href="<?php echo base_url('index.php/doctor/addClient_dr')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Download as pdf</button></a>
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
                                                         <th style="width:2%">Client Account Holder Name</th>
                                                        <th style="width:2%">Client Account Number</th>
                                                        <th style="width:2%">Client Transfereed Amount</th>
                                                        <th style="width:2%">UTR ID</th>
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                      
                                                   <?php  $index=1; // LOOP TILL END OF DATA
                                                  foreach($transactions as $transaction)
                                                    {
                                                    ?>
            
                                                    <tr>
                                                       <td><?php echo $index?></td>
                                                        <td><?php echo $transaction->ClientAccountHolderName?></td>
                                                        <td><?php echo $transaction->ClientAccountNumber?></td>
                                                        <td><?php echo $transaction->ClientTransferedAmount?></td>
                                                        
                                                         <td><?php echo $transaction->ClientUTRID?></td>


                                                       
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