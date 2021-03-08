<!DOCTYPE html>
<html>
<head>
	<title>updation Bus Notification</title>

	<style>
		
		fieldset{
			width:500px;
			height: 400px;
		}
	</style>
</head>
<body>

<form method="post" action="<?php echo base_url()?>main/admin_update">



	<center>
		
		<fieldset>
			<h1>Upadate notification</h1>

		Notification:

			<?php 
	if(isset($user_data))
	{
		

		foreach ($user_data->result()as $row1) 
		{
			
		?>
			<textarea placeholder="Notification" name="notification"><?php echo $row1->notification;?></textarea><br><br>
			<input type="hidden" name="id" value="<?php echo $row1->nid;?>">
			<?php
	}
	}
	
	?>
			<input type="submit" name="update" value="Update">

		</fieldset>
	</center>
	

</form>

</body>
</html>