<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->

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
<option value="DDU-UI">
<option value="YUVA-UI">
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
	
		
		<tr><td><input type="submit" name="update" value="Update"></td></tr>
		
		


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