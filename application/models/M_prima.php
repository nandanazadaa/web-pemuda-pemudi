
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prima extends CI_Model {

    function profile()
    {    
        return $this->db->get_where('admin', ['username'=> $this->session->userdata('username')])->row_array();    
    }



}