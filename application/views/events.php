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
<body class="">
  <div class="logo"><a href="<?php echo base_url()?>main/trainer" class="simple-text logo-normal">
          ACADEMIC CALENDER
        </a></div>
  <div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card" style="width: 83rem; height:38rem;">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Events details</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body ">

                  <form class="form-group form form-control col-md-5"  method="post" action="<?php echo base_url()?>main/addevent">
                   
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group ">
                          <label class="bmd-label-floating">Event Name</label>
                          <input type="text" class="form-control"name="eventname">
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-5">
                        <div class="form-group ">
                          <label class="bmd-label-floating">Event Date</label>
                          <input type="date" class="form-control"name="date">
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Event Time</label>
                          <input type="time" class="form-control"name="time">
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Duration</label>
                          <input type="text" class="form-control"name="duration">
                        </div>
                      </div>
                     
                     
                   
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                     
                    <button type="submit" class="btn btn-primary ">ADD EVENTS</button>
                   <button  class="btn btn-primary "><a class="text-white" href="<?php echo base_url()?>main/eventdetail">VIEW EVENTS</a></button>
                </table>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </body>

<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</script>
</body>    
</html>