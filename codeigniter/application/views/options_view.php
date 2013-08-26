<html lang="en">

<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Untitled</title>
	<link href="<?php echo $this->config->item('base_url'); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="<?php echo $this->config->item('base_url'); ?>assets/js/bootstrap.min.js"></script>
	<style type="text/css" media="screen">
		label{display:block;}
	</style>
	<style>
          body { background:  rgb(238,233,233); }
          .container { background: rgb(238,233,233); }
        </style>

</head>

<body>
<div class="container">
	<div class="row">
		<div class="span6" align="center">
			<h3>Create a user</h3>
			<?php echo validation_errors(); ?>
			<?php echo form_open('users/create'); ?> 
			
			<p>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" style="height: 35px;" placeholder="Type name..." />
			</p>
			<hr />
			<p>
				<label for="phone_number">Phone Number:</label>
				<input type="text" name="phone_number" id="phone_number"style="height: 35px;" placeholder="Type phone number..."/>
			</p>
			<hr />	
			<p>
				<label for="email">Email id:</label>
				<input type="text" name="email" id="email"style="height: 35px;" placeholder="Type email id..."/>
			</p>
			<hr />
			<p>
				<label for="street">Street:</label>
				<input type="text" name="street" id="street"style="height: 35px;" placeholder="Type street..." />
			</p>
			<hr />
			<p>
				<label for="city">City:</label>
				<input type="text" name="city" id="city"style="height: 35px;" placeholder="Type city..." />
			</p>
			<hr />
			<p>
				<label for="state">State:</label>
				<input type="text" name="state" id="state"style="height: 35px;" placeholder="Type state..."/>
			</p>
			<hr />
			<p>
				<label for="country">Country:</label>
				<input type="text" name="country" id="country" style="height: 35px;"placeholder="Type country..."/>
			</p>
			<hr />
			<p>
				<input class="btn btn-primary" type="submit" value="Submit" style="height: 35px;"/>
			</p>
	
			<hr />

		</div>
	
	<div class="span6" align="center">
	<h3>List all users</h3>
	<?php if(isset($records)) : foreach($records as $row) : ?>
		<div>Name: <?php echo $row->name; ?></div>
		<div>Phone Number: <?php echo $row->phone_number; ?></div>
		<div>Email id: <?php echo $row->email; ?></div>
		<div>Street: <?php echo $row->street; ?></div>
		<div>City: <?php echo $row->city; ?></div>
		<div>State: <?php echo $row->state; ?></div>
		<div>Country: <?php echo $row->country; ?></div>
		<div>User Creation Time: <?php echo $row->user_creation_time; ?></div>
		<div><?php echo anchor("users/delete/$row->id", "Delete this user") ?> </div>
		<div><?php echo anchor("users/update/$row->id", "Update this user's information") ?> </div>
		<br />
		<?php endforeach; ?>
	<?php else : ?>
		<h3>No records.</h3>
	
	</div>
	<?php endif; ?>
	
	<?php echo form_close(); ?> 
</div>
</div>
</body>

</html>
