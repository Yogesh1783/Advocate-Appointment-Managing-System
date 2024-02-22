<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/Client/insertAppointment'); ?>" method="POST">
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Appointment</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white" class="breadcrumb-item active" aria-current="page">Add Appointment</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                              <button class="btn ripple btn-main-primary" style="background-color: blue;"><a style="color:white" href="<?php echo base_url('index.php/Client/appointmentlist_ci')?>">View Appointment</a></button>
                            </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                      
                                        
                                        <div class="row row-sm mg-t-20">
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Client Name</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="AppointmentClientName"  placeholder=" "  type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-lg-3 mg-t-10 mg-lg-t-0">
                                               <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Advocate Name</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                 <select class="form-control mb-3" name="AppointmentClientAdvocateName"  required>
                                                    <option disabled selected></option>
                                                      <option  value="ABC">ABC</option>
                                                     <option  value="MNO">MNO</option>
                                                       <option  value="XYZ">XYZ</option>
                                                     
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
                                                <input class="form-control" name="AppointmentClientDate"  placeholder=" "  type="date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Add Appointment</button>
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