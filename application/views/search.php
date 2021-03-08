<!DOCTYPE html>
<html>
<head>
<title>login</title>
<<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
</head>
<style>
  form
  {
    border:2px solid;
    margin-left:400px;
    width:400px;
    text-align:center;

  }
  input
  {
    padding:10px;
    margin:20px;
  }
  *{
  padding:0px;
  margin:0px;
}
.bi{
  background-image:url(../image/f1.png);
  background-size:cover;
  height:500px;
  }
  td,tr{
    padding:10px;
  }
.menubar{
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:100px;
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
  <nav class="menubar navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../image/log.png"></a>
        
    </div>
</nav>
<section class="py-5 bi">
  <div class="col-12">
 </div>

  <form method="post" action="<?php echo base_url()?>main/searchaction">
    <center><table class="h-10">
      <tr>
        <td>DATE</td> 
    <td><input type="date" name="dat" placeholder="DATE FOR TIME TABLE"></td>
      </tr>
      <tr><td>
        BATCH:</td><td><select name="bname" class="form-select">
          <?php
          if($n->num_rows()>0)
          {
            foreach ($n->result() as $row) 
            {
              # code...
            
          ?>
          <option value="<?php echo $row->id;?>"><?php echo $row->bname;?></option> 
          
          <?php
        }
        }
        ?>
        </select>
        </td></tr>
    
    <tr>
    <td><input type="submit" name="submit" value="ok"></td>
    </tr>
    </table>
  </form>
  </section>
  
    
  



</body>
</html>