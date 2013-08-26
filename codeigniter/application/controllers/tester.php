<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller 
{

	public function index()
	{

		//Test 1
		if(($query = $this->users_model->get_record(22)))  
		{
			foreach($query as $q)
			{

				$test = $q->name;
				$expected_result = "Kailash";
				$test_name = 'Checks whether a single record can be fetched or not';
			
			
				$this->unit->run($test, $expected_result, $test_name); 
			}
		}
		//Test 2, to test this, change id value of 31 to any random numeric value greater than zero
		$user = array(
			'id' => '31',
			'name' => 'Nitish',
			'phone_number' => '9990808080',
			'email	' => 'nitishgl@yahoo.com',
			'street' => 'Hush',
			'city' => 'Pune',
			'state' => 'Maharashtra',
			'country' => 'India'
			);
	
		$test = $this->users_model->add_record($user);
		$expected_result = NULL;
		$test_name = 'Checks whether a single record can be added or not';
		$this->unit->run($test, $expected_result, $test_name); 
		
		//Test 3, to test this, id value of the user should be equal to id value of the user in test number 2 
		$user = array(
			'id' => '31',
			'name' => 'Shaily',
			'phone_number' => '9990808080',
			'email	' => 'nitishgl@yahoo.com',
			'street' => 'Hush',
			'city' => 'Pune',
			'state' => 'Maharashtra',
			'country' => 'India'
			);
	
		$test = $this->users_model->update_record($user);
		$expected_result = NULL;
		$test_name = 'Checks whether a single record can be updated or not';
		$this->unit->run($test, $expected_result, $test_name); 
		
		//Test 4, to test this, id value of the user should be equal to id value of the user in test number 2 
		$user = array(
			'id' => '31',
			'name' => 'Shaily',
			'phone_number' => '9990808080',
			'email	' => 'nitishgl@yahoo.com',
			'street' => 'Hush',
			'city' => 'Pune',
			'state' => 'Maharashtra',
			'country' => 'India'
			);
	
		$test = $this->users_model->update_record($user);
		$expected_result = NULL;
		$test_name = 'Checks whether a single record can be updated or not';
		$this->unit->run($test, $expected_result, $test_name); 
		
		//Test 5, to test this, id value should be equal to the id of a user which already exists. 
		$id = 32;
		$test = $this->users_model->delete_row($id);
		$expected_result = NULL;
		$test_name = 'Checks whether a single record can be deleted or not';
		$this->unit->run($test, $expected_result, $test_name); 
		
	 	echo $this->unit->report();
	}
}

?>


