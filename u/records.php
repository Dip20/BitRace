<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- fontaswome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/brand-icon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <title>BitRace | Dip | Manager</title>
  </head>
  <body>
    <!-- nav starts here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img src="../img/brand-logo.png" alt="Brand name">  BitRace</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-users-cog"></i> Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apis.php"><i class="fas fa-hockey-puck"></i> API</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-tools"></i> App Settings</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-  haspopup="true" aria-expanded="false">
            <i class="fas fa-user-shield"></i>  Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
        </ul>
        <span class="navbar-text">
        <a href="#" class="btn btn-warning btn-sm text-white" type="button">Add Record <i class="fas fa-plus-circle"></i></a>
        <a href="#" class="btn btn-danger btn-sm text-white" >Archived <i class="fas fa-trash"></i></a>

        </span>
      </div>
    </nav>
    <!-- nav ends here.. -->

    <!-- breadcrumb starts here -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item " aria-current="page"> <a href="project.php?projectID=54874512dsds9sdgsbjd845dsd">Arati Electronics</a> </li>
        <li class="breadcrumb-item active" aria-current="page">View Records</li>
      </ol>
    </nav>
    <!-- breadcrumb ends here...-->
    <!-- Project starts here -->
    <section class="px-3">
      <h3 class="text-center mb-5">Records</h3>
      <table class="table table-hover text-center" width="100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Date</th>
            <th>ReportID</th>
            <th>Submited By</th>
            <th>Title</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>15/12/2020</td>
            <td>R16102020054637</td>
            <td>Santu (Admin)</td>
            <td class="text-danger">Bugs detected in update.php line 46</td>
            <td><p class="badge badge-danger">High</p> </td>
            <td>
              <select class="form-control" name="" onload="update();" onchange="update();" id="status">
                <option value="Solved">Solved</option>
                <option value="Pending" selected>Pending</option>
                <option value="Working">Working</option>
            </select>

  <script>
    function update()
    {
      var a = $("#status").val();
        if (a=="Solved")
        {
          $("#status").addClass("badge badge-success");
          $("#status").removeClass("badge badge-danger");
          $("#status").removeClass("badge badge-warning");
          $("#status").blur();

        }else if (a=="Pending")
        {
          $("#status").addClass("badge badge-danger");
          $("#status").removeClass("badge badge-success");
          $("#status").removeClass("badge badge-warning");
          $("#status").blur();


        }else if (a=="Working")
        {
          $("#status").addClass("badge badge-warning");
          $("#status").removeClass("badge badge-danger");
          $("#status").removeClass("badge badge-success");
          $("#status").blur();

        }
      alert("You have changed Status to "+a);
    }
    update();
  </script>

          </td>

            <td>
              <a href="#" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></a>
              <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
              <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-minus-circle"></i></a>


            </td>

          </tr>
        </tbody>
      </table>
    </section>
    <!-- Project ends here   -->

  <div style="height:40vh"></div>

  <footer><p class="text text-center">&copy; 2021 BitRace Copyright Holder All Rights Reserved.</p> </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
