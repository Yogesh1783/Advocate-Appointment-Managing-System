<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/advocate/updateAppointment/'.$this->uri->segment(3)); ?>" method="POST">
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 class="main-content-title tx-30">Appointment</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Update Appointment</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                              <button class="btn ripple btn-main-primary" style="background-color: blue;"><a style="color:white" href="<?php echo base_url('index.php/doctor/appointmentlist_dr')?>">View Appointment</a></button>
                            </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                      
                                        <div class="row">
                                           
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0">
                                                   <p class="mg-b-10">Name   Dr. Michael Ojonugwa</p>
                                              
                                            </div>
                                           

                                          
                                        </div>
                                        <div class="row row-sm mg-t-20">
                                              <div class="col-lg-3 mg-t-10 mg-lg-t-0">
                                               <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Patient</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                 <select class="form-control mb-3" name="AppointmentPatientName"  required>
                                                    <option disabled selected></option>
                                                      <option <?php echo $appointment->AppointmentPatientName=="ABC" ? "selected":""; ?>  value="ABC">ABC</option>
                                                     <option <?php echo $appointment->AppointmentPatientName=="MNO" ? "selected":""; ?>  value="MNO">MNO</option>
                                                       <option <?php echo $appointment->AppointmentPatientName=="XYZ" ? "selected":""; ?>  value="XYZ">XYZ</option>
                                                     
                                                </select>
                                                    </div>
                                                </div>
                                                  </div>
                                                   <div class="col-lg-3 mg-t-10 mg-lg-t-0">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Date</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="AppointmentDate" value="<?php echo $appointment->AppointmentDate?>" placeholder="" type="date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Update Appointment</button>
                                        </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                 

                   </form

                      

                </div>
            </div>
            <!-- End Main Content-->