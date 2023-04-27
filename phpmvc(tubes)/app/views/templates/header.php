<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?php echo $data['judul']; ?></title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="cover.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img src="../asset/asli.png" alt="" height="50px">
          <a class="navbar-brand" href="<?= BASEURL; ?>/home">Fikom Lab Simulation</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="d-flex collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL ?>/room">Room</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL ?>/about">About</a>
              </li>
              <!-- <li style="float: right;">
                <a href="#" class="btn btn-danger btn-sg">
                  <span class="glyphicon glyphicon-log-out"></span> 
                  Log out
                </a>
      
              </li> -->
            </ul>
            <div class="">
              <a href="<?=BASEURL?>/Login/logout" class="btn btn-danger btn-sg">
                  <span class="glyphicon glyphicon-log-out"></span> 
                  Log out
                </a>
              </div>
          </div>
        </div>

</nav>


 