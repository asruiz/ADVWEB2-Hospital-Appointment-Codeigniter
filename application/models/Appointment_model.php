<?php
class Appointment_model extends CI_Model {

  public function __construct() {
    function __construct() {
    parent::__construct();
  }

  function form_insert($data){
  // Inserting in Table(students) of Database(college)
  $this->db->insert('students', $data);
  }
}
?>
