<!DOCTYPE html>
<html>
<head>
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




<body class="">
 <div class="logo"><a href="<?php echo base_url()?>main/student" class="simple-text logo-normal">
          ACADEMIC CALENDER
        </a></div>


<div class="">
	<div class="table-responsive text-center ml-5">
                    <table class="table table-hover table-bordered border-dark mt-5 py-5 table-success">
                    	<h3 class=" text-warning text-center">EXAM DETAILS</h3>
                      <thead class=" text-dark">

	
	<!-- <h2 class="text-primary text-center py-3">EXAM DETAILS</h2>
	<table class="table  table-hover table-bordered border-primary text-center table-success mt-5 ml-5"> -->
	
			<tr class>
				
				<th>Exam</th>
				<th>Date</th>
				<th>Total Mark</th>
				<th>Subject</th>
				<th>Starting Time</th>
				<th>Ending Time</th>
				
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
							
							
							<td><?php echo $row->ename?></td>
							<td><?php echo $row->edate?></td>
							<td><?php echo $row->totalmark;?></td>
							<td><?php echo $row->subject?></td>
							<td><?php echo $row->startingtime?></td>
							<td><?php echo $row->endingtime;?></td>
							<td>
							</tr>
							
			<?php
				}
			}
			?>

			
		</tbody>
	</table>
</div>
	<div class="col-12 text-center">
	
	</div>

</body>
</html>