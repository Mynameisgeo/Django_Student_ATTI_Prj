<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Website</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    #loading-img{
      display:none;
    }
   .response_msg{
      margin-top:10px;
      font-size:13px;
      background:#E5D669;
      color:#ffffff;
      width:250px;
      padding:3px;
      display:none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1><img src="car.png" width="80px"> Car Booking Website</h1>
        <form name="car-form" action="" method="post" id="car-form">
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
          </div>
          <div class="form-group">
            <label for="Car Model">Car Model</label>
            <select name="car_model" class="form-control" required>
              <option value="">Select Car Model</option>
              <option value="Toyota">Toyota</option>
              <option value="Honda">Honda</option>
              <option value="Ford">Ford</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Pickup Date">Pickup Date</label>
            <input type="date" class="form-control" name="pickup_date" placeholder="Pickup Date" required>
          </div>
          <div class="form-group">
            <label for="Return Date">Return Date</label>
            <input type="date" class="form-control" name="return_date" placeholder="Return Date" required>
          </div>
          <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
          <img src="img/loading.gif" id="loading-img">
        </form>
        <div class="response_msg"></div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#car-form").on("submit",function(e){
        e.preventDefault();
        if($("#car-form [name='name']").val() === ''){
          $("#car-form [name='name']").css("border","1px solid red");
        } else if ($("#car-form [name='email']").val() === ''){
          $("#car-form [name='email']").css("border","1px solid red");
        } else {
          $("#loading-img").css("display","block");
          var sendData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: "process.php",
            data: sendData,
            success: function(data){
              $("#loading-img").css("display","none");
              $(".response_msg").html(data);
              $(".response_msg").css("display","block");
            }
          });
        }
      });
    });
  </script>
</body>
</html>