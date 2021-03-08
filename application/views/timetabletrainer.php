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
<div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover  border-primary ">
                      <thead class=" text-primary">
	<!-- <h2 class="text-primary text-center py-3"></h2>
	<table class="table table-hover table-bordered border-primary text-center table-success mt-5 "> -->
		<thead>
			<tr class>
				
				<th>Batch Name</th>
				
				<th>Date</th>
				<th>First Period</th>
				<th>Second Period</th>
				<th>Third Period</th>
				<th>Fourth Period</th>
				<th>Fifth Period</th>
				<th>Sixth Period</th>
				<th>Seventh Period</th>
				<th>Eighth Period</th>
				<th>Action</th>
				
				
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
							<td><?php echo $row->bname;?></td>
							<td><?php echo $row->date?></td>
							<td><?php echo $row->first?></td>
							<td><?php echo $row->second;?></td>
							<td><?php echo $row->third?></td>
							<td><?php echo $row->fourth?></td>
							<td><?php echo $row->fifth;?></td>
							<td><?php echo $row->sixth?></td>
							<td><?php echo $row->seventh?></td>
							<td><?php echo $row->eighth?></td>
							<td><a href="<?php echo base_url()?>main/delete/<?php echo $row->id;?>" class="text-decoration-none btn-outline-danger">Delete</a></td>

							
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