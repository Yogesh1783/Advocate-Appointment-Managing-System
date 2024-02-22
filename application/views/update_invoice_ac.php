
<!-- Main Content-->

            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/Accountant/updateInvoice/'.$this->uri->segment(3)); ?>" method="POST">
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 class="main-content-title tx-30">Invoice</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Update Invoice</li>
                                </ol>
                            </div>
                            <div class="page-header-1">
                              <button class="btn ripple btn-main-primary" style="background-color: blue;"><a style="color:white" href="<?php echo base_url('index.php/Accountant/invoice_ac')?>">View Invoice</a></button>
                            </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                      
                                        <div class="row">
                                            <div class="col-lg-4">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                        <div class="col-md-3">
                                                    <label class="mg-b-0">Date</label>
                                                        </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                     <input class="form-control" name="AccountantInvoiceDate" value="<?php echo $invoice->AccountantInvoiceDate?>" placeholder="" type="date" required>
                                                     
                                                </div>
                                            </div>
                                               
                                        </div>
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Payment Type</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                  <select class="form-control" name="AccounatantInvoicePayment" required>

                                                     <option disabled selected></option>
                                                      <option <?php echo $invoice->AccounatantInvoicePayment=="UPI" ? "selected":""; ?> value="UPI">UPI</option>
                                                     <option <?php echo $invoice->AccounatantInvoicePayment=="Cash" ? "selected":""; ?> value="Cash">Cash</option>
                                                </select>
                                                </div>
                                            </div>
                                           
                                           </div>
                                           <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Transaction Id</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AccountantInvoiceTransaction" value="<?php echo $invoice->AccountantInvoiceDate?>" placeholder="" type="text" required>
                                                     
                                                </div>
                                            </div>
                                           
                                           </div>
                                          
                                        
                                             
                                           

                                          
                                        </div>

                                        <div class="row row-sm mg-t-20">
                                            <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Patient</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                  <select class="form-control" name="AccounatantInvoicePatientName" required>

                                                     <option disabled selected></option>
                                                      <option <?php echo $invoice->AccounatantInvoicePatientName=="ABC" ? "selected":""; ?> value="ABC">ABC</option>
                                                     <option <?php echo $invoice->AccounatantInvoicePatientName=="MNO" ? "selected":""; ?> value="MNO">MNO</option>
                                                </select>
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Title</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AccounatantInvoiceTitle" value="<?php echo $invoice->AccounatantInvoiceTitle?>" placeholder="" type="text" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0">Amount</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                 <input class="form-control" name="AccounatantInvoiceAmount" value="<?php echo $invoice->AccounatantInvoiceAmount?>" placeholder="" type="Textarea" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       <div class="row row-sm mg-t-20">
                                        <div class="col-lg-4 mb-4">
                                                
                                            
                                            
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Description</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AccounatantInvoiceDescription" value="<?php echo $invoice->AccounatantInvoiceDescription?>" placeholder="" type="text" required >
                                                </div>
                                            </div>
                                           
                                           </div>
                                        <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">   
                                            <div class="row row-xs align-items-center mg-b-20">
                                                        <div class="col-md-3">
                                                    <label class="mg-b-0">Status</label>
                                                        </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <select class="form-control" name="AccounatantInvoiceStatus" required>

                                                     <option disabled selected></option>
                                                      <option <?php echo $invoice->AccounatantInvoiceStatus=="Paid" ? "selected":""; ?> value="Paid">Paid</option>
                                                     <option <?php echo $invoice->AccounatantInvoiceStatus=="Unpaid" ? "selected":""; ?> value="Unpaid">Unpaid</option>
                                                </select>
                                                   
                                                </div>
                                            </div>
                                        </div>

                                             <div class="col-lg-4 mg-t-10 mg-lg-t-0 mb-3">   
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Address</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="AccounatantInvoiceAddress" value="<?php echo $invoice->AccounatantInvoiceAddress?>" placeholder="" type="Textarea" required>
                                                </div>
                                            </div>
                                          
                                        </div>
                                           
                                            
                                            
                                             
                                          
                                        </div>
                                        
                                         <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Update Invoice</button>
                                        </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                 

                   </form>

                      

                </div>
            </div>
            <!-- End Main Content-->