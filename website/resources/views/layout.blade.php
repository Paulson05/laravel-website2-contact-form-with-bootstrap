<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>pizza house</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     
       
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class= "container">

      <ul class="nav  justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pages/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/services">Services</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="/pages/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/contact">contact us</a>
        </li>
        <li class="nav-item">
        
      </ul>
      </div>
    </div>
  </div>
</nav>


      @yield('content')

      
  <div class="card-footer" style="margin-top:150px; !important">
  <p>Copyright 2020 Pizza House</p>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>