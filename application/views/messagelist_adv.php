 
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color: white;" class="main-content-title tx-30">Admin Panel</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white" class="breadcrumb-item active" aria-current="page">Message List</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                            
                                 <a href="<?php echo base_url('index.php/Admin/send_adv')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Send message</button></a>
                            </div>
                        </div>
                        <div class="page-header">
                            <div class="page-header-1">
                                <div class="page-header-1">
                                        <button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print </button>

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
                                                        <th style="width:2%"> Sl no</th>
                                                        <th style="width:2%">Message Id</th>
                                                        <th style="width:2%">From</th>
                                                        
                                                         <th style="width:2%">To Advocate Email Address</th>
                                                        <th style="width:2%">Subject</th>
                                                        <th style="width:2%">Message</th>
                                                        
                                                        <th style="width:2%">Action</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $index=1; 
                                                    foreach($messages as $message){?>
                                                    <tr>
                                                        <td><?php echo $index?></td>
                                                        <td><?php echo $message->MessageId?></td>
                                                        <td><?php echo $_SESSION['AdminEmail']; ?></td>


                                                        <td><?php echo $message->mailTo?></td>
                                                        <td><?php echo $message->mailsubject?></td>
                                                        <td><?php echo $message->body?></td>
                                                         


                                                        <td><a href="<?php echo base_url('index.php/Admin/update_message_ad/'.$message->MessageId)?>"><i class="fe fe-edit-3" ></i></a>
                                                             &nbsp;
                                                                <a data-target="#modaldemo2<?php echo $message->MessageId;?>" data-toggle="modal" ><i  class="fe fe-trash-2"></i></a></td>
                                                        
                                                        
                                                       
                                                        <!-- Small modal -->
            <div class="modal" id="modaldemo2<?php echo $message->MessageId;?>">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete message</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this row?</p>
                            <?php echo $message->MessageId;?>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href=<?php echo base_url('index.php/Admin/deletemessage/'.$message->MessageId)?>"><button 
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

           