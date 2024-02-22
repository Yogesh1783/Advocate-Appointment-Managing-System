 
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Advocate</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white" class="breadcrumb-item active" aria-current="page">appointmentment List</li>
                                </ol>
                            </div>
                            <div class="page-header-1">

                            </div>
                             
                        </div>
                        <div class="page-header">
                            <div class="page-header-1">
                                <div class="page-header-1">
                              
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
                                            <table style="width:100%" id="example3" class="table table-striped table-bordered text-nowrap" >
                                                <thead>
                                                    <tr>
                                                        <th style="width:2%">sl no</th>
                                                        <th style="width:2%">date</th>
                                                        <th style="width:2%">Client</th>
                                                        <th style="width:2%">Advocate</th>
                                                        <th style="width:2%">option</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                                   
                                                    $index=1; 
                                                    foreach($appointments as $appointment){?>
                                                    <tr>
                                                        <td><?php echo $index?></td>
                                                      
                                                        <td><?php echo $appointment->AppointmentClientDate?></td>
                                                          
                                                        <td><?php echo $appointment->AppointmentClientEmail?></td>
                                                        <td><?php echo $appointment->AppointmentClientAdvocateEmail?></td>
                                                        <td><a href="<?php echo base_url('index.php/Patient/update_appointment_pt/'.$appointment->AppointmentClientId)?>"><i  class="fe fe-edit-3"></i></a>
                                                            &nbsp;
                                                            <a href=<?php echo base_url('index.php/advocate/delete')?> ><i  class="fe fe-trash-2"></i></a></td>
                                                       
                                                        
                                                       
                                                        <!-- Small modal -->
            <div class="modal" id="modaldemo2<?php echo $appointment->AppointmentClientId;?>">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Doctor</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this row?</p>
                            <?php echo $appointment->AppointmentClientId;?>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href=<?php echo base_url('index.php/advocate/deleteAppointment/'.$appointment->AppointmentClientId)?>"><button 
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