<html>
<head>

<title> ADMIN  </title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <!---custom style---->
            <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

</head>
<style>
 
</style>



<body class="bi mt-5 bg-dark text-white">
  <nav class="menubar">
    <nav class=" navbar navbar-expand-lg top1">
      <div class="container-fluid">
        <a class="text-decoration-none text-white" href="#"><h1><h4>
     AFRS-ADMIN</h4></h1></a>
      <div>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="{{ url('admindashboard') }}">Home</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">ADD </a>
            <div class="submenu1">
        <ul>
          <li class="nav-item"> <a class="nav-link" href="{{ url('flightadd') }}">Flight Details</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('airportdet') }}">Airport Details</a></li>
        </ul>
      </div>
          <li class="nav-item"> <a class="nav-link" href="#">Notification</a>
           <div class="submenuz">
              <ul>
                <li class="nav-item"> <a class="nav-link" href="{{ url('addnotification') }}">ADD</a></li>

                    <li class="nav-item"> <a class="nav-link" href="{{ url('getnoti') }}">VIEW</a></li>
                    
              </ul>
            </div>
          </li>
      
          <li class="nav-item"> <a class="nav-link" href="#">VIEW</a>
            <div class="submenu2">
              <ul>
                <li class="nav-item"> <a class="nav-link" href="{{ url('tableview') }}">User Details</a></li>

                    <li class="nav-item"> <a class="nav-link" href="{{ url('adminrecord') }}">Booking Details</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('viewairport') }}">Airport Details</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('flightviewad') }}">Flight Details</a></li>
              </ul>
            </div>
          </li>
              <li class="nav-item"> <a class="nav-link" href="{{ url('logout') }}">Logout</a></li>
    
            </ul> 
          </ul>
        </div>
      </div>
    </nav>
  </div>
</nav>
<div class="head">
<!-- <h1><i>“It can hardly be a coincidence that no language on earth has ever produced the expression, 'As pretty as an airport.”</i></h1> -->

  @yield('content')


<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</script>

</body>
</html>