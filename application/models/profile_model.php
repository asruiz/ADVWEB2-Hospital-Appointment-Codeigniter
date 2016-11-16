<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

		// get user
  function get_user_by_id($id)
  {
      $this->db->where('id', $id);
      $query = $this->db->get('user');
      return $query->result();
  }

	function edit($pro_id,$data_products)
	{
		//guery update FROM .. WHERE id->products
		return $this->db->where('pro_id',$pro_id)
				->update('product',$data_products);
	}

}
?>
