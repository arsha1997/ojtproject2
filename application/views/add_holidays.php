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

<div class="logo"><a href="<?php echo base_url()?>main/trainer" class="simple-text logo-normal">
          ACADEMIC CALENDAR
        </a></div>


	<div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card" style="width: 70rem; height:22rem;">
                <div class="card-header card-header-info bg-info">
                  <h4 class="card-title ">ADD HOLIDAY</h4>
                  <p class="card-category"></p>
                </div>

<form method="post" action="<?php echo base_url()?>main/holidays_add" class="form-group form-control">
	
			
			Select Batch: 
			<select name="bname" class="form-select">
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
			</select><br><br>



			 <label class="bmd-label-floating">Add Holidays</label>
                          <input type="text" class="form-control"name="holiday"><br><br>


			<input type="submit" name="submit" value="Add" class="btn btn-warning">
			
	

</form>

</body>
</html>