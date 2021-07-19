<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="ico" href="/css/master.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- fontaswome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="icon" href="../img/brand-icon.ico">
    <link rel="stylesheet" href="../css/style.css">

    <title>API</title>
  </head>
  <body>

    <!-- nav starts here -->
    <?php require_once("nav.php"); ?>

    <!-- nav ends here -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">API KEY</li>
      </ol>
    </nav>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h6 class="">Generate API key </h6>

        </div>
        <div class="card-body">
          <form id="generate_apikey" method="post">

              <div class="row justify-content-center ">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-1">
                  <label>Api Key</label>
                  <input type="text" name="apikey" value="" class="form-control" readonly placeholder="API Key" id="apikey">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-1">
                  <label>Api Secret</label>
                  <input type="text" name="apisecret" value="" class="form-control" readonly placeholder="API Secret" id="apisecret">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-1">
                  <label>Api Name</label>
                  <input type="text" name="apiname" value="" class="form-control"  placeholder="API Name" id="apiname" onkeyup="validation()">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-1">
                  <label>Action</label><br>
                   <button type="submit" class="btn btn-info btn-sm" id="generate">GENERATE</button>
                   <button type="submit" disabled class="btn btn-success btn-sm " id="save">SAVE</button>

               </div>
              </div>
          </form>
        </div>
      </div>


      <!-- here is data table to display api keys -->

    <!-- <h6 class="mt-5 mb-3"></h6> -->
    <div class="card mt-5">
      <div class="card-header">
        All API keys
      </div>
      <div class="card-body">
        <table class="table text-center  border table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Key</th>
              <th>Secret</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>1</td>
              <td>My API KEY</td>
              <td>1548745DOHiigffihohds88d8  <i class="fas fa-copy copy_btn"></i> </td>
              <td>1548745DOHiigffihohds88d8  <i class="fas fa-copy copy_btn"></i> </td>
              <td> <span class="badge badge-success">Active</span> </td>
              <td>
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Delete</a>
                    <a class="dropdown-item" href="#">Disabled</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>XYZ project</td>
              <td>1548745DOHiigffihohds88d8  <i class="fas fa-copy copy_btn"></i> </td>
              <td>1548745DOHiigffihohds88d8  <i class="fas fa-copy copy_btn"></i> </td>
              <td> <span class="badge badge-warning">Disabled</span> </td>
              <td>
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Delete</a>
                    <a class="dropdown-item" href="#">Disabled</a>
                  </div>
                </div>
              </td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>

    </div>
    <footer><p class="text text-center mt-5">&copy; 2021 BitRace Copyright Holder All Rights Reserved.</p> </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>
      $("#generate").click(function(e){
        e.preventDefault();
        var apiname = $("#apiname").val();
        if (apiname=="")
        {
          // show alert if user didn't ente api name...
            swal("Please Enter API Name", "", "error");
            $("#apiname").css("box-shadow" , "0px 0px 7px 0.2px red");
            $("#apiname").css("border","none");
        }else {
          // process here your code for save data....

          $.ajax({
              url:'../api/generate-key.php',
              type:'POST',
              data:$("#generate_apikey").serialize(),
              dataType:"json",
              // beforeSend:function()
              // {
              //   $("#generate").val("Processing");
              // },
              success:function(result)
              {
                $("#apikey").val(result.apikey);
                $("#apisecret").val(result.apisecret);
                $("#save").prop("disabled",false);
              },
              error:function (error_data)
              {
                swal(error_data,"Please try after sometime","error");
              }
          });
        }
      });

      // validation for apiname field ..
      function validation()
      {
        var txt = $("#apiname").val();
        if (txt=="")
        {
          $("#apiname").css("box-shadow" , "0px 0px 7px 0.2px red");
          $("#apiname").css("border","none");
          $("#save").prop("disabled",true);


        }else {
          $("#apiname").css("box-shadow" , "0 0 0 0.2rem rgb(0 123 255 / 25%)");
          $("#apiname").css("border","1px solid #80bdff");
        }
      }

      // save apikay


    </script>


  </body>
</html>
