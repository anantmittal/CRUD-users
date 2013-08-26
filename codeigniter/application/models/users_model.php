<?php


class Users_model extends CI_Model
{
	//To get a single user record from the database
	function get_record($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('users');
		return $query->result();
	}
	
	//To get all user records from the database
	function get_records()
	{
		$query = $this->db->get('users');
		return $query->result();
	}
	
	//To add a user record to the database
	function add_record($user)
	{
		$this->db->insert('users',$user);
		return;
	}
	
	//To update a user record in the database
	function update_record($user)
	{
		$this->db->where('id',$user['id']);
		$this->db->update('users',$user);
	}
	//To delete a user record from the database
	function delete_row($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users');
	}
}
