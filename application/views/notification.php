<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>admin/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Academic Calendar
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>admin/assets/demo/demo.css" rel="stylesheet" />
</head>

<body>

      <div class="logo"><a href="<?php echo base_url()?>main/trainer" class="simple-text logo-normal">
          ACADEMIC CALENDER
        </a></div>

	

<form method="post" action="<?php echo base_url()?>main/notification_add" class="form-group">
	<div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-success">
              <h3 class="card-title ">Notifications</h3>
          </div>
          <div class="card-body">
                  <form method="post" action="<?php echo base_url()?>main/examdetails">
                    <div class="container">
                    <div class="row">
                      <div class="col-md-5 mt-5">
                        <div class="form-group">
      

		
		
		
			<label class="bmd-label-floating">SELECT BATCH:</label>
			<select name="bname" class="form-select form-control">
			<?php 
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
					{
			?>
                
				<option value="<?php echo $row->id;?>"><?php echo $row->bname;?>
					
				</option>
			
			<?php

				}
			}
			?>
			</select>
			<textarea placeholder="Notification" name="notification" class="form-control"></textarea><br><br>

			
			<input type="submit" name="submit" value="Notify" class="btn btn-warning">
			<button  class="btn btn-primary "><a class="text-white" href="<?php echo base_url()?>main/notiadmin">VIEW Notification</a></button>
		

</form>

</body>
</html>