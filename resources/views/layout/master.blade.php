<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />

    <title>All Clients Information</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row bg-dark">
        <div class="d-flex justify-content-between align-items-center">
        <h2 class="text-white"> Dashboard </h2>

        <div class="time-and-date-par">
          <h5 class="mb-0 text-white"> Friday, 30 September 2024 <i class="bi bi-dash"></i> 08:04 PM </h5>
        </div>

        <div class="login-info d-flex jusity-content-betwee align-items-center py-md-2 py-1">
          <p class="text-white pe-md-3 pe-2 mb-0"> S A Faroque </p>
          <div class="dropdown">
            <div class="dropdown-toggle bg-dark" id="profile1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://picsum.photos/id/5/30/30" alt="" class="img-fluid rounded-circle border border-white"> <span class="text-white"><i class="bi bi-caret-down-fill"></i></span>
            </div>
            <ul class="dropdown-menu" aria-labelledby="profile1">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Sign Out</a></li>
            </ul>
          </div>
        </div>


        



      </div>
      </div>
      <div class="row">
        <div class="col-md-2 bg-dark vh-100">
          <ul class="nav flex-column">
            <li class="nav-item border-bottom">
              <a class="nav-link text-white" href="/"> <i class="bi bi-people-fill"></i> 
                All Cleints</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="{{ '/add-client' }}"> <i class="bi bi-person-plus-fill"></i> Add Cleints
              </a>
            </li>
          </ul>
        </div>

        @yield('client-info')
        @yield('add-client-form')

      </div>

      <!-- footer section started -->
      <div class="row bg-dark fixed-bottom">
        <p class="text-center text-white mb-0 py-md-3 py-2"> @Copyright. All rights reserved. </p>
      </div>
      <!-- footer section ended -->
    </div>

    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    <script>
      $(function () {
        $("#table_id").dataTable();
      });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
