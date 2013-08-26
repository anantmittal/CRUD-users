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
<div class="container" >
	<div class="row" >
		<div class="span11" align="center">
			<h3>Update user</h3>
			<?php echo validation_errors(); ?>
			<?php echo form_open('users/update'); ?> 
			
			<p>
				<label for="id">Id:</label>
				<input type="text" name="id" id="id" readonly="readonly" value="<?php echo $id; ?>"style="height: 35px;"/>
			</p>
			<hr />
			<p>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" value="<?php echo $name; ?>"style="height: 35px;"/>
			</p>
			<hr />
			<p>
				<label for="phone_number">Phone Number:</label>
				<input type="text" name="phone_number" id="phone_number" value="<?php echo $phone_number; ?>"style="height: 35px;"  />
			</p>
			<hr />
			<p>
				<label for="email">Email id:</label>
				<input type="text" name="email" id="email"  value="<?php echo $email; ?>"style="height: 35px;"/>
			</p>
			<hr />
			<p>
				<label for="street">Street:</label>
				<input type="text" name="street" id="street" value="<?php echo $street; ?>"style="height: 35px;"/>
			</p>
			<hr />
			<p>
				<label for="city">City:</label>
				<input type="text" name="city" id="city"  value="<?php echo $city; ?>"style="height: 35px;"/>
			</p>
			<hr />
			<p>
				<label for="state">State:</label>
				<input type="text" name="state" id="state"  value="<?php echo $state; ?>"style="height: 35px;"/>
			</p>
			<hr />
			<p>
				<label for="country">Country:</label>
				<input type="text" name="country" id="country"  value="<?php echo $country; ?>"style="height: 35px;"/>
			</p>
			<hr />
			<p>
				<input class="btn btn-primary" type="submit" value="Submit" />
			</p>
			
			<hr />

		</div>

	<?php echo form_close(); ?> 
	</div>
</div>
</body>

</html>
