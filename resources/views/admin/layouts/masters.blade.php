<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('assets/backend/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('assets/backend/css/styles.min.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  @include('sweetalert::alert')
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('admin.layouts.sidebar')

    <!--  Sidebar End -->
    <!--  Main wrapper -->

    <div class="body-wrapper">

      <!--  Header Start -->
      @include('admin.layouts.header')
      <div class="container-fluid">
        <!--  Header End -->
        @yield('content')

        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by<a href=""> Ashmita Mallik</a> Distributed by <a href="">NINJA INFOSYS</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('assets/backend/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/backend/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('assets/backend/js/app.min.js')}}"></script>
  <script src="{{asset('assets/backend/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/backend/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>