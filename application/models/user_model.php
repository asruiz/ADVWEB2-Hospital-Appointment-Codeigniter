<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	function getAllDoctors() {
		$query = $this->db->query("SELECT fname,lname,specialization FROM doctor WHERE location='Manila'");
		return $query->result();
	}

	function form_insert($data){
	// Inserting in Table(students) of Database(college)
	return $this->db->insert('students', $data);
	}

	function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('user');
		return $query->result();
	}

	// get user
    function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->result();
    }

	// insert
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}

	//update_user
	function update_user($data)
    {
		return $this->db->update('user', $data);
	}


    // ANOTHER //
	public function select() {
        //data is retrive from this query
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Manila'");
				$this->db->order_by('specialization', "asc");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectcaloocan() {
        //data is retrive from this query
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Caloocan'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectlaspinas() {
        //data is retrive from this query
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Las Pinas'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectmakati() {
        //data is retrive from this query
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Makati'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectmalabon() {
        //data is retrive from this query
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Malabon'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectmandaluyong() {
        //data is retrive from this query
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Mandaluyong'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectmarikina() {
        //data is retrive from this query
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Marikina'");
        $query = $this->db->get('doctor');
        return $query;
    }


    public function selectmuntinlupa() {
        //data is retrive from this query
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Muntinlupa'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectnavotas() {
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Navotas'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectparanaque() {
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Paranaque'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectpasay() {
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Pasay'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectpasig() {
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Pasig'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectquezoncity() {
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Quezon City'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectsanjuan() {
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='San Juan'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selecttaguig() {
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Taguig'");
        $query = $this->db->get('doctor');
        return $query;
    }

    public function selectvalenzuela() {
        $this->db->select('fname, lname, email, location, specialization, facility, day, fromtime, totime');
        $this->db->where("location='Valenzuela'");
        $query = $this->db->get('doctor');
        return $query;
    }
}
?>
