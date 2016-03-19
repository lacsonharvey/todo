<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model {

    public function __construct()
    {
      	 
    }

    public function getAllUsers()
    {
	$sql = 'SELECT * FROM `users`';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
