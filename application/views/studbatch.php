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

<style>
	.bi{
  background-color: rgba(0,0,0,0.9);
  
}
	*{
	padding:0px;
	margin:0px;
}
	table,td{
		padding: 20px;
		font-size: 20px;
		color: white;
	}
	
h1{
	text-align: center;
	color: red;
	font-size: 50px;
}

	
  body{
  background-image:url("../img/14.jpg");
background-size:cover;
}
.h2
{
  text-align: center;
  margin-top: 20px;
  font-size: 50px;
  
}
.head{
text-align:center;
color: rgba(0,0,0,0.5);
}
	</style>
</head>
<body class="bi">

	<div class="logo"><a href="<?php echo base_url()?>main/student" class="simple-text logo-normal">
          ACADEMIC CALENDER
        </a></div>
	
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/batchupdate1">
		<?php
			
	if(isset($user_data))
	{
		foreach($user_data->result() as $row1)
		{
			?>
		<fieldset style="width:500px;height:700px; background-color:rgba(0,0,0,0.8); margin-top: 50px;">
			<legend style="color: red"><strong></strong></legend>

			
		<table>

			
	

		
		<tr>
<td>
Batch name:</td>
<td><input list="batch" name="bname" value="<?php echo $row1->bname;?>" >
<datalist id="DDU-JSD">
<option value="YUVA-JSD">
<option value="DDU-JSD">
</datalist></td>
</tr>
	<tr>
				<td>
		Start date:</td>
		<td><input type="date" name="startdate" value="<?php echo $row1->startdate;?>">
		</td>
	</tr>
	
		
	
	<tr>
		<td>
		End date:</td>
		<td><input type="date" name="enddate" value="<?php echo $row1->enddate;?>"></td>
	</tr>
	
	<tr>
				<td>
		totalday:</td>
		<td><input type="text" name="totalday" value="<?php echo $row1->totalday;?>">
		</td>
	</tr>

  <tr>
        <td>
    totalhour:</td>
    <td><input type="text" name="totalhr" value="<?php echo $row1->totalhr;?>">
    </td>
  </tr>
	<td><input type="hidden" name="id" value="<?php echo $row1->id;?>">
		</td>
	
		
		
		


	</table>
	<?php
		}
	}
	?>
	
</fieldset>


	</form>
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</body>
</html>