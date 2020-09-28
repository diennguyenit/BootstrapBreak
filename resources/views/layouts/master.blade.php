<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/title-img.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Pure Bootstrap</title>
  </head>
  <body >
    <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-light fixed-top">
      <a href="#" class="navbar-brand"><i class="fas fa-child text-warning fa-2x"></i></a>
      <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav"><span class="navbar-toggler-icon"></span></button>
      <div id="nav" class="collapse navbar-collapse justify-content-between">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="#" class="nav-link text-light font-weight-bold px-3">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light font-weight-bold px-3">Skills</a></li>
          <li class="nav-item dropdown"><a href="#" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" data-toggle="dropdown">Project</a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Project 1</a>
              <a href="#" class="dropdown-item">Project 2</a>
              <a href="#" class="dropdown-item">Project 3</a>
              <a href="#" class="dropdown-item">Project 4</a>
              <a href="#" class="dropdown-item">Project 5</a>
            </div>
          </li>
          <li class="nav-item"><a href="#" class="nav-link text-light font-weight-bold px-3">Team</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light font-weight-bold px-3">Contact</a></li>
        </ul>
        @yield('content')
        <form class="form-inline ml-3">
          <div class="input-group">
            <input type="text" name="" id="" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-light text-muted" ><i class="fas fa-search"></i></button>
            </div>
        </form>
      </div>
    </nav>
    <!-- end of navbar -->

    
    <!-- progress -->
    <!-- end of progress -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>