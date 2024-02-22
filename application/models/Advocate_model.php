  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advocate_model extends CI_Model {


  

public function insertClient()
  {
  if($this->input->post('CaseType')){

    $data=array(
    'CaseType' => $this->input->post('CaseType'),
    'ClientName' => $this->input->post('ClientName'),  
    'ClientEmail' => $this->input->post('ClientEmail'),  
    'ClientMobile'   => $this->input->post('ClientMobile'),  
    'ClientAge' => $this->input->post('ClientAge'),
    'ClientBirth' => $this->input->post('ClientBirth'),
    'ClientGender' => $this->input->post('ClientGender'),
    'ClientPassword' => $this->input->post('ClientPassword'),
    'ClientAddress' => $this->input->post('ClientAddress'),
    
     );
    
    $this->db->insert('addclient_ad',$data);
    
  
    redirect('advocate/Clientlist_adv');

  }
 }
 public function insertClient_adv($id)
 {
  if($this->input->post('CaseType')){

    $data=array(
    'CaseType' => $this->input->post('CaseType'),
    'ClientName' => $this->input->post('ClientName'),  
    'ClientEmail' => $this->input->post('ClientEmail'),  
    'ClientMobile'   => $this->input->post('ClientMobile'),  
    'ClientAge' => $this->input->post('ClientAge'),
    'ClientBirth' => $this->input->post('ClientBirth'),
    'ClientGender' => $this->input->post('ClientGender'),
    
    'ClientAddress' => $this->input->post('ClientAddress'),
                            'AddedBy'=>$this->session->AdminAdvocateEmail,
                         
    
     );
    
    $this->db->insert('client_adv',$data);
    
  
    redirect('advocate/Clientlist_adv');

  }
 }
 public function updateClient_adv()
 {
  if($this->input->post('CaseType')){

    $data=array(
    'CaseType' => $this->input->post('CaseType'),
    'ClientName' => $this->input->post('ClientName'),  
    'ClientEmail' => $this->input->post('ClientEmail'),  
    'ClientMobile'   => $this->input->post('ClientMobile'),  
    'ClientAge' => $this->input->post('ClientAge'),
    'ClientBirth' => $this->input->post('ClientBirth'),
    'ClientGender' => $this->input->post('ClientGender'),
    
    'ClientAddress' => $this->input->post('ClientAddress'),
                            'AddedBy'=>$this->session->AdminAdvocateEmail,
                         
    
     );
         $this->db->where('ClientId',$id);
    $this->db->update('client_adv',$data);
    
  
    redirect('advocate/Clientlist_adv');

  }
 }
 public function getUserList(){
  
    $data=$this->db->where('AddedBy',$this->session->AdminAdvocateEmail)->get('client_adv')->result();
   return $data;
 
 }
  public function getByIdUserList($id){
   $data=$this->db->where('ClientId',$id)->get('client_adv')->row();
   return $data;
 }
 


 public function updateClient($id)
    {
    if($this->input->post('CaseType')){

    $data=array(
    'CaseType' => $this->input->post('CaseType'),
   
    'ClientName' => $this->input->post('ClientName'),  
    'ClientEmail' => $this->input->post('ClientEmail'),  
    'ClientMobile'   => $this->input->post('ClientMobile'),  
    'ClientAge' => $this->input->post('ClientAge'),
    'ClientBirth' => $this->input->post('ClientBirth'),
    'ClientGender' => $this->input->post('ClientGender'),
    'ClientPassword' => $this->input->post('ClientPassword'),
    'ClientAddress' => $this->input->post('ClientAddress')
    

    
    

    );
     $this->db->where('ClientId',$id);
    $this->db->update('addclient_ad',$data);
    redirect('advocate/clientlist_adv');

    }
 }
 public function deleteClient($id)
 {


$this->db->where('ClientId',$id);
$this->db->delete('addclient_ad');
redirect('advocate/clientlist_adv');
 }







 public function getClientList(){
 $data=$this->db->get('addclient_ad')->result();
   return $data;
 }
  public function getByIdClientList($id){
   $data=$this->db->where('ClientId',$id)->get('addclient_ad')->row();
   return $data;
 }
 public function insertAppointment()
    {
    if($this->input->post('AppointmentClientName')){
 $data=array(
    
                        'AppointmentClientName' => $this->input->post('AppointmentClientName'),
                        'AppointmentClientAdvocateEmail' => $this->input->post('AppointmentClientAdvocateEmail'),
                        'AppointmentClientDate' => $this->input->post('AppointmentClientDate'),
                        'AddedBy'=>$this->session->ClientEmail,
                         

                        );  
        //insert data into database table.  
        $this->db->insert('appointment_ci',$data);  
  
        redirect("Client/appointmentlist_ci");  

    }
 }
  public function updateAppointment($id)
    {
    if($this->input->post('AppointmentClientName')){
 $data=array(
    
                        'AppointmentClientName' => $this->input->post('AppointmentClientName'),
                        'AppointmentClientAdvocateName' => $this->input->post('AppointmentClientAdvocateName'),
                        'AppointmentClientDate' => $this->input->post('AppointmentClientDate')
                         
                        );  
        //insert data into database table.  
        $this->db->where('AppointmentClientId',$id);

        $this->db->update('appointment_ci',$data);  
  
        redirect("Client/appointmentlist_ci");  

    }
 }
 
 public function deleteAppointment($id)
 {


$this->db->where('AppointmentClientId',$id);
$this->db->delete('appointment_ci');
redirect('Client/appointmentlist_ci');
 }


 public function getAppointmentList(){
  
    $data=$this->db->where('AddedBy',$this->session->ClientEmail)->get('appointment_ci')->result();
   return $data;
 
 }
  public function getByIdAppointmentList($id){
   $data=$this->db->where('AppointmentClientId',$id)->get('appointment_ci')->row();
   return $data;
 }
  
 public function updateBed($id)
    {
      if($this->input->post('BedNumber')){
  
        $data = array(  
                        'BedNumber' => $this->input->post('BedNumber'),
                        'BedType' => $this->input->post('BedType'),
                        'BedDoctorName' => $this->input->post('BedDoctorName'),
                        'BedClientName' => $this->input->post('BedClientName'),  
                        'BedAllotmentTime' => $this->input->post('BedAllotmentTime'),  
                        'BedDischargeTime'   => $this->input->post('BedDischargeTime'),
                        'AddedBy'=>$this->session->AdminAdvocateEmail,

                        );  
        $this->db->where('BedId',$id);

      
        $this->db->update('bed_dr',$data);  
  
        redirect("Doctor/bedlist_dr");  

    }
 }
 
 public function insertPrescription()
    {
    if($this->input->post('PrescriptionDoctorName')){
             $data=array(
                        'PrescriptionDoctorName' => $this->input->post('PrescriptionDoctorName'),
                        'PrescriptionClientName' => $this->input->post('PrescriptionClientName'),  
                        'PrescriptionCaseHistory' => $this->input->post('PrescriptionCaseHistory'),  
                        'PrescriptionDate'   => $this->input->post('PrescriptionDate'),  
                        'PrescriptionMedication' => $this->input->post('PrescriptionMedication'),
                        'PrescriptionDescription' => $this->input->post('PrescriptionDescription'),
                         'AddedBy'=>$this->session->AdminAdvocateEmail,

                        );  
      
        $this->db->insert('prescription_dr',$data);  
  
        redirect("Doctor/prescriptionlist_dr");  

    }
 }
 public function updatePrescription($id)
    {
    if($this->input->post('PrescriptionDoctorName')){
             $data=array(
                        'PrescriptionDoctorName' => $this->input->post('PrescriptionDoctorName'),
                        'PrescriptionClientName' => $this->input->post('PrescriptionClientName'),  
                        'PrescriptionCaseHistory' => $this->input->post('PrescriptionCaseHistory'),  
                        'PrescriptionDate'   => $this->input->post('PrescriptionDate'),  
                        'PrescriptionMedication' => $this->input->post('PrescriptionMedication'),
                        'PrescriptionDescription' => $this->input->post('PrescriptionDescription'),
                         'AddedBy'=>$this->session->AdminAdvocateEmail,

                        );  
      
        $this->db->where('PrescriptionId',$id); 
        $this->db->update('prescription_dr',$data);  
  
        redirect("Doctor/prescriptionlist_dr"); 

    }
 }
 public function deletePrescription($id)
 {


$this->db->where('PrescriptionId',$id);
$this->db->delete('prescription_dr');
redirect('Doctor/prescriptionlist_dr');
 }
 public function getPrescriptionList(){
  $data=$this->db->where('AddedBy',$this->session->AdminAdvocateEmail)->get('prescription_dr')->result();
   return $data;
 
 }
  public function getByIdPrescriptionList($id){

   $data=$this->db->where('PrescriptionId',$id)->get('prescription_dr')->row();
   return $data;
 }
 public function insertReport()
    {
    if($this->input->post('ReportDate')){
           $data = array(  
                        'ReportDate' => $this->input->post('ReportDate'),
                        'ReportDoctorName' => $this->input->post('ReportDoctorName'),  
                        'ReportClientName' => $this->input->post('ReportClientName'),  
                        'ReportDescription'   => $this->input->post('ReportDescription'),  
                        'ReportAddress' => $this->input->post('ReportAddress'), 
                         'AddedBy'=>$this->session->AdminAdvocateEmail,

                        );  
      
        $this->db->insert('report_dr',$data);  
  
        redirect("Doctor/operation_dr");  

    }
 }
  public function updateReport($id)
    {
    if($this->input->post('ReportDate')){
           $data = array(  
                        'ReportDate' => $this->input->post('ReportDate'),
                        'ReportDoctorName' => $this->input->post('ReportDoctorName'),  
                        'ReportClientName' => $this->input->post('ReportClientName'),  
                        'ReportDescription'   => $this->input->post('ReportDescription'),  
                        'ReportAddress' => $this->input->post('ReportAddress'), 
                         'AddedBy'=>$this->session->AdminAdvocateEmail,

                        );  
      $this->db->where('ReportId',$id);
        $this->db->update('report_dr',$data);  
  
        redirect("Doctor/operation_dr");  

    }
 }

 public function deleteReport($id)
 {


$this->db->where('ReportId',$id);
$this->db->delete('report_dr');
redirect('Doctor/operation_dr');
 }
 public function getReportList(){
   $data=$this->db->where('AddedBy',$this->session->AdminAdvocateEmail)->get('report_dr')->result();
   return $data;
 }
  public function getByIdReportList($id){
   $data=$this->db->where('ReportId',$id)->get('report_dr')->row();
   return $data;
 }


  public function insertDocter()
 {
  if($this->input->post('AdminDoctorName')){

    $data=array(
   'AdminDoctorName'=>$this->input->post('AdminDoctorName'),
   'AdminDoctorAdminAdvocateEmail'=>$this->input->post('AdminDoctorAdminAdvocateEmail'),
   'AdminDoctorAdminAdvocatePassword'=>$this->input->post('AdminDoctorAdminAdvocatePassword'),
   'AdminDoctorAddress'=>$this->input->post('AdminDoctorAddress'),
   'AdminDoctorMobile'=>$this->input->post('AdminDoctorMobile'),
   'AdminDoctorDepartment'=>$this->input->post('AdminDoctorDepartment'),
    'AdminDoctorProfile'=>$this->input->post('AdminDoctorProfile'),
    


    );
    $this->db->insert('doctor_ad',$data);
    redirect('Admin/profile_dr');

  }
 }
 
 public function updateDocter($id)
 {
    if($this->input->post('AdminAdvocateEmail')){

    $data=array(
   
   'AdminAdvocateEmail'=>$this->input->post('AdminAdvocateEmail'),
   'AdminAdvocatePassword'=>$this->input->post('AdminAdvocatePassword'),
   


    );
    $this->db->where('AdminDoctorId',$id);
    $this->db->update('doctor_ad',$data);
    redirect('doctor/profile_dr');

    }
 }
 public function deleteDocter($id)
 {


$this->db->where('AdminDoctorId',$id);
$this->db->delete('doctor_ad');
redirect('Admin/profile_dr');
 }
 public function getDoctorList(){
   $data=$this->db->get('doctor_ad')->result();
   return $data;
 }
  public function getByIdDoctorList($id){
   $data=$this->db->where('AdminDoctorId',$id)->get('doctor_ad')->row($id);
   return $data;
 }
  

public function login($AdminAdvocateEmail,$AdminAdvocatePassword){
  $data=array(

'AdminAdvocateEmail'=>$AdminAdvocateEmail,
'AdminAdvocatePassword'=>$AdminAdvocatePassword);
  $query=$this->db->where($data);
  $login=$this->db->get('advocate_ad');
  if($login!=NULL){
    return $login->row();
  }
}
public function logout(){
  $this->session->sess_destroy();
  redirect('index.php/advocate/Login_adv','refresh');
}

  



 
 

    
 
 } 
?>
