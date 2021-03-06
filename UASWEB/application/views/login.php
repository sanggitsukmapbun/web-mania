<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bootstrap/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #383838;">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url()."assets/"; ?>img/logo2.png" width="60" height="20">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/welcome";?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/welcome/daftar";?>">Daftar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()."index.php/welcome/login";?>">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar ends -->
    <br>
    <!-- Form -->
    <div class="container">
    <p class="h3">Login</p>
    <hr>
        <form action="<?php echo base_url()."index.php/welcome/proses_login";?>" method="POST">
            <div class="form-row">
                <div class="col-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="col-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-danger">Login</button>
        </form>
    </div>
    

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>