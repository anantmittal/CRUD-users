
<?php

class Users extends CI_Controller
{

	//This function loads the main page, where you can create a user and list all users
	function index()
	{
		$user=array();
		if($query = $this->users_model->get_records())
		{
			$user['records']=$query;
		}
		$this->load->view('options_view',$user);
	}	
	
	//This is to create a user
	function create()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|alpha');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('street', 'Street', 'alpha_dash');
		$this->form_validation->set_rules('city', 'City', 'alpha');					
		$this->form_validation->set_rules('state', 'State', 'alpha');
		$this->form_validation->set_rules('country', 'Country', 'alpha');
		//If information is valid, user is created
		if ($this->form_validation->run() == TRUE)
		{
			$user = array(
			'name' => $this->input->post('name'),
			'phone_number' => $this->input->post('phone_number'),
			'email	' => $this->input->post('email'),
			'street' => $this->input->post('street'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'country' => $this->input->post('country')
			);
	
			$this->users_model->add_record($user);
			$this->index();
		}
		//If the information is not valid, the main page (options_view.php) is loaded again with validation errors
		else
		{
			$this->index();
		}
	}
	
	//This is to delete a user
	function delete()
	{

		$this->users_model->delete_row($this->uri->segment(3));
		$this->index();

	}
	
	function update()
	{
		
		$this->form_validation->set_rules('id', 'Id', 'required|numeric');
		$this->form_validation->set_rules('name', 'Name', 'required|alpha');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('street', 'Street', 'alpha_dash');
		$this->form_validation->set_rules('city', 'City', 'alpha');					
		$this->form_validation->set_rules('state', 'State', 'alpha');
		$this->form_validation->set_rules('country', 'Country', 'alpha');
		//If information is valid, user is updated and the main page is loaded
		if ($this->form_validation->run() == TRUE)
		{
			
			$user = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'phone_number' => $this->input->post('phone_number'),
			'email	' => $this->input->post('email'),
			'street' => $this->input->post('street'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'country' => $this->input->post('country')
			);
			
			$this->users_model->update_record($user);
			$this->index();
		}
		//If information is invalid, view to update the user (update_view) is loaded again with validation errors
		else
		{
			
			$user=array();
			//OR condition is present here because when update method is called for the second time from update_view.php, it won't have $this->uri->segment(3))
			if(($query = $this->users_model->get_record($this->uri->segment(3))) || ($query = $this->users_model->get_record($this->input->post('id'))))
			{
				foreach($query as $q)
				{
					$this->data['id']= $q->id;
					$this->data['name']= $q->name;
					$this->data['phone_number']= $q->phone_number;
					$this->data['email']= $q->email;
					$this->data['street']= $q->street;
					$this->data['city']= $q->city;
					$this->data['state']= $q->state;
					$this->data['country']= $q->country;
				}
				$this->load->view('update_view',$this->data);	
			}
			
		}
	}
		
}





?>
