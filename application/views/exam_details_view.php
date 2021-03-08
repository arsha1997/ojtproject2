<!DOCTYPE html>
<html>
<head>
<title>Academic calendar</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
          </head>

<body>



	<h2 class="text-primary text-center py-3">EXAM DETAILS</h2>
	<table class="table table-hover table-bordered border-primary text-center table-success mt-5 ">
		<thead>
			<tr class>
				<th>Batch Name</th>
				<th>Exam</th>
				<th>Date</th>
				<th>Total Mark</th>
				<th>Subject</th>
				<th>Starting Time</th>
				<th>Ending Time</th>
				<th>Action</th>
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
							<td><?php echo $row->ename?></td>
							<td><?php echo $row->edate?></td>
							<td><?php echo $row->totalmark;?></td>
							<td><?php echo $row->subject?></td>
							<td><?php echo $row->startingtime?></td>
							<td><?php echo $row->endingtime;?></td>
							<td><a href="<?php echo base_url()?>main/exam_delete/<?php echo $row->eid;?>" class="text-decoration-none btn-outline-danger">Delete</a></td>

							<td><a href="<?php echo base_url()?>main/exam_update/<?php echo $row->eid;?>" class="text-decoration-none btn-outline-success ">Update</a></td>
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>
	<div class="col-12 text-center">
	<a href="<?php echo base_url()?>main/trainer" class="btn btn-primary ">Back to Home</a>
	</div>

</body>
</html>