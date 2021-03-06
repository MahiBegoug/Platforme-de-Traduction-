<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />


  <style>
  .rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
  </style>


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a  class="simple-text logo-mini">
        </a>
        <a  class="simple-text logo-normal">
          Client
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
         <!-- <li>
          <a href="{{url('demandeDevisClient')}}">
              <i class="now-ui-icons ui-1_send"></i>
              <p>Demandes De Devis</p>
            </a>
          </li>-->
          <li>
         <a href="{{url('notificationClient')}}">
              <i class="now-ui-icons ui-1_send"></i>
              <p>Demande Devis</p>
            </a>
          </li>
       <!--   <li>
          <a href="{{url('valideDemandeClient')}}">
              <i class="now-ui-icons ui-1_check"></i>
              <p>Validation du Propositions</p>
            </a>
          </li>-->

          <!-- <li>
            <a href="{{url('coutTraductionClient')}}">
                <i class="now-ui-icons business_money-coins"></i>
                <p>Coût de Traductions</p>
              </a>
           </li>-->

          <li>
            <a href="{{url('profileClient')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">


              </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">

                    <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="now-ui-icons arrows-1_share-66"></i>
                        <p>
                          <span class="d-lg-none d-md-block">Logout</span>
                        </p>
                    </a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
                    @csrf
                </form>
                </li>


              <li class="nav-item">
              <a class="nav-link" href="{{url('profileClient')}}">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="panel-header panel-header-sm ">
      </div>
      <div class="content">
        @yield('content')
      </div>


      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="{{ url('/accueil') }}">
                    Accueil
                </a>
              </li>
              <li>
                <a href="{{ url('/traduction') }}">
                    Traductions
                </a>
              </li>
              <li>
                <a href="{{ url('/traducteur') }}">
                    Traducteurs
                </a>
              </li>
              <li>
                <a href="{{ url('/recrutement') }}">
                    Recrutement
                </a>
              </li>
              <li>
                <a href="{{ url('/blog') }}">
                    Blog
                </a>
              </li>
              <li>
                <a href="{{ url('/propos') }}">
                    à propos
                </a>
              </li>

            </ul>
          </nav>

        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>

  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>

  <script src="../assets/demo/demo.js"></script>

 @yield('scripts')
</body>

</html>
