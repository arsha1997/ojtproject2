<!DOCTYPE html>
<html>
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
<div class="logo"><a href="<?php echo base_url()?>main/student" class="simple-text logo-normal">
          ACADEMIC CALENDER
        </a></div>


	<h2 class="text-primary text-center py-3">NOTIFICATIONS</h2>
	<table class="table table-hover table-bordered border-primary text-center table-success mt-5 ">
		<thead>
			<tr class>
				<th>ID</th>
				<th>Notification</th>
				<th>Date</th>
				
			</tr>
		</thead>

		<tbody>
			<?php
		if($n->num_rows()>0)
		{
			foreach($n->result() as $row)
					{
		?>
						<tr>
							<td><?php echo $row->nid;?></td>
							<td><?php echo $row->notification?></td>
							<td><?php echo $row->date?></td>
							
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>
	<div class="col-12 text-center">
	
	</div>

</body>
</html>