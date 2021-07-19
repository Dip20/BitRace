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
        <a href="project.php" class="btn btn-warning btn-sm text-white" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Add record <i class="fas fa-plus-circle"></i></a>
        <a href="records.php" class="btn btn-info btn-sm text-white" >Records <i class="fas fa-database"></i></a>

        </span>
      </div>
    </nav>
    <!-- nav ends here.. -->

    <!-- breadcrumb starts here -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item " aria-current="page">Project </li>
        <li class="breadcrumb-item active" aria-current="page">Arati Electronics</li>
      </ol>
    </nav>
    <!-- breadcrumb ends here...-->

    <!-- Project starts here -->
    <div class="container text-center" id="welcome-container">
          <div class="card">
            <div class="card-header">
              <h5 class="text-center ">Project Details</h5>
            </div>
            <div class="card-body">
              <div class="row ">
                <div class="col col-lg-6 col-md-8 col-sm-12 mb-2">
                  <table class="table text-left table-hover border " >
                    <thead>
                      <tr>
                        <th width="30%">#</th>
                        <th width="70%">Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Project Name</td>
                        <td>Arati Electronics</td>
                      </tr>
                      <tr>
                        <td>Project Description</td>
                        <td>
                          Hello, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </td>
                      </tr>
                      <tr>
                        <td>Project Author</td>
                        <td>Dip sarkar <span class="badge badge-primary font-weight-normal">Developer</span> </td>
                      </tr>
                      <tr>
                        <td>Start Date</td>
                        <td>05/12/2020</td>
                      </tr>
                      <tr>
                        <td>Total Submission</td>
                        <td>1250</td>
                      </tr>
                      <tr>
                        <td>Total Bugs</td>
                        <td>870</td>
                      </tr>
                      <tr>
                        <td>Fixed</td>
                        <td>1200</td>
                      </tr>
                      <tr>
                        <td>Working</td>
                        <td>11</td>
                      </tr>
                      <tr>
                        <td>FeedBack</td>
                        <td>8</td>
                      </tr>
                      <tr>
                        <td>Action</td>
                        <td>
                          <a href="#" class="btn btn-outline-danger btn-sm mt-1">Close Project <i class="fas fa-power-off"></i></a> &nbsp;
                          <a href="#" class="btn btn-warning btn-sm mt-1 disabled">Reopen <i class="fas fa-recycle"></i></a>
                          <a href="#" class="btn btn-primary btn-sm mt-1">Settings <i class="fas fa-cogs"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col col-lg-6 col-md-8 col-sm-12 mb-2">
                <div class="row justify-content-center">
                  <div class="col-lg-10">
                     <canvas id="myChart" height="250px"></canvas>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
    <!-- Project ends here   -->

  <div style="height:10vh"></div>

  <footer><p class="text text-center">&copy; 2021 BitRace Copyright Holder All Rights Reserved.</p> </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- chart js -->
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Total Bugs', 'Fixed', 'Working', 'FeedBack'],
            datasets: [{
                label: '# Status',
                data: [87, 120, 11, 8],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)'

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

  </body>
</html>
