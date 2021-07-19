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
    <link rel="icon" href="../img/brand-icon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <title>BitRace | Dip | Manager</title>
  </head>
  <body>
    <!-- nav starts here -->
    <?php require_once("nav.php"); ?>
    <!-- nav ends here.. -->

    <!-- breadcrumb starts here -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item " aria-current="page">Home </li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <!-- breadcrumb ends here...-->

    <!-- Project starts here -->
    <div class="container text-center" id="welcome-container">
        <h5 class="text-center mb-5"><i class="fas fa-code-branch"></i>  Projects (3)</h5>
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card shadow" style="border-top:3px solid orange">
              <div class="card-body">
                <h5>Arati Electronics</h5>
                <a href="project.php" class="btn btn-md btn-outline-warning border rounded-pill mt-3"><i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card shadow" style="border-top:3px solid orange">
              <div class="card-body">
                <h5>Banstech</h5>
                <a href="project.php" class="btn btn-md btn-outline-warning border rounded-pill mt-3"><i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="card shadow" style="border-top:3px solid orange">
              <div class="card-body">
                <h5>Additive Mea</h5>
                <a href="project.php" class="btn btn-md btn-outline-warning border rounded-pill mt-3"><i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

      </div>
    </div>
    <!-- Project ends here   -->
    <!-- add project modal starts here -->

      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-code-branch"></i>   Add Project</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <label>Project Name</label>
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Project Name" aria-label="Project Name" aria-describedby="basic-addon2" required autofocus>
                <div class="input-group-append ">
                  <span class="input-group-text" id="group_available"><i class="fas fa-check"></i></span>
                </div>
              </div>
                <label>Description</label>
                <input type="text" name="" value="" class="form-control" placeholder="Description" required>
                <!-- hidden input -->
                <input type="hidden" name="date" value="">
                <input type="hidden" name="created_by" value="">

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-folder-plus"></i> Add</button>
                <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <!-- add project modal ends here -->

  <div style="height:40vh"></div>

  <footer><p class="text text-center">&copy; 2021 BitRace Copyright Holder All Rights Reserved.</p> </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
