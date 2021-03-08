<!DOCTYPE html>
<html>
<head>
	<title> TIMETABLE VIEW</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
</head>
<style>
.bi{
  background-color:#E0FFFF;
  background-size:cover;
  height:500px;
  width:1420px;
  }

  td,tr,th{
  	
  	border:2px solid;
  }
.menubar{
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:100px;
      width: 1420px;
}

.menubar ul{
    list-style:none;
    display:inline-flex;
    padding:5px;
}
.menubar ul li a{
      color:white;
      text-decoration:none;
      padding:10px;
      font-size:18px;
      font-stretch:expanded; 
      font-weight:bold; 
      font-family: "Times New Roman", Times, serif;
  
}
.menubar ul li{
       padding:10px; 
       
}
a:hover{
      background-color:grey;
      border-radius:10px;
}
.submenu{
      display:none;  
     border-radius:10px; 

}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:#B22222;
         color:white;
         margin-left:-25px;
         padding:10px;
}
.submenu ul{
           display:block;
}
.submenu ul li{
             
             border-radius:10px; 
}
  
.bgcolor
{
  color:#B22222;
}
.navbar-brand img
{
  height: 50px;
  padding-left:30px;
}
#nav-bar
{
  position: sticky;
  top: 0;
  z-index: 10;
}
</style>
<body>
	
	<form class="py-5" method="get" >
	<table>
		<tr>
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
                

			
		</tr>
	</thead>
	
		<?php 
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
				<tr>		<td><?php echo $row->bname?></td>
                            <td><?php echo $row->date?></td>
                            <td><?php echo $row->first?></td>
                            <td><?php echo $row->second;?></td>
                            <td><?php echo $row->third?></td>
                            <td><?php echo $row->fourth?></td>
                            <td><?php echo $row->fifth;?></td>
                            <td><?php echo $row->sixth?></td>
                            <td><?php echo $row->seventh?></td>
                            <td><?php echo $row->eighth?></td>
					<input type="hidden" value="<?php echo $row->id;?>" name="id">
					

				</tr>
					<?php
		
		}
	}
		
		?>
		</table>
		</form>
		
</body>
</html>