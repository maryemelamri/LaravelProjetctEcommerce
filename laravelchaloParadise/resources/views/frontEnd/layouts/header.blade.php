<header id="header"><!--header-->


    <div id="top">
    <div class="container">


      <div class="col-md-6 offer">
        <a href="#" class="btn btn-warning btn-sm"> Bienvenue chez Chalo Paradise  </a>
        
      </div>
      <div class="col-md-6 ">
        <ul class="menu">

          <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Panier </a></li>
            @if(Auth::check())
                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> Mon compte</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> déconnexion </a>
                </li>
            @else
                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Connexion </a></li>
            @endif
        </ul>

      </div>
      
    </div>
  </div>
   
  <div id="navbar" style ="margin-bottom: 0px;"class="navbar navbar-default">
    <div class="container">

      <div class="navbr-header">
        <!--  -->

        <a href="{{url('/')}}" style="height: 90px;padding: 0px 15px;" class="navbar-brand home">

          <img src="{{asset('frontEnd/images/home/logo.png')}}" style="max-width:220px;max-height:90px" alt="Logo">

        </a>
        <!--  menu search mode mobile -->
        <button class="navbar-toggle" style="margin-top: 20px" data-toggle="collapse" data-target="#navigation">


          <i class="fa fa-align-justify"></i>

        </button>

        <button class="navbar-toggle"style="margin-top: 20px" data-toggle="collapse" data-target="#search">


          <i class="fa fa-search"></i>

        </button>

      </div>
      <style type="text/css">


 @media (max-width: 991px){

          .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin-left: 285px;}
          .navbar>.container  .navbar-collapse >.padding-nav>.navbar-nav {margin-left: 85px} 

           }

@media (max-width: 767px){.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
    margin-left: 2px;
}}




      </style>
      <div class="navbar-collapse collapse" id="navigation">
        <div class="padding-nav">
          <ul class="nav navbar-nav left" style="margin-top: 20px; margin-left: 30px">

            <li>
              <a href="{{url('/')}}">Accueil</a>
            </li>
            <li>
              <a href="{{url('/list-products')}}">Nos produits</a>
            </li>
            <li>
              <a href="{{url('/service')}}">Nos Services</a>
            </li>
            <li>
              <a href="{{url('/gallery')}}">Gallerie</a>
            </li>
            <li>
              <a href="{{url('/apropos')}}">A propos</a>
            </li>

            <li>
              <a href="{{url('/contact/create')}}">Contactez nous</a>
            </li>
           

          </ul>

        </div>
        <!-- search -->

        <div class="navbar-collapse collapse right">

          <button style="margin-top: 25px" class="btn btn-warning navbar-btn" type="button" data-toggle="collapse" data-target="#search">

            <i class="fa fa-search"></i>

          </button>

        </div> 
        <!-- search form -->
        <div class="collapse clearfix" id="search">

          <form method="get" action="results.php" class="navbar-form">

            <div class="input-group">

              <input type="text" class="form-control" placeholder="Search" name="user_query" required>

              <span class="input-group-btn">

                <button type="submit" name="search" value="Search" class="btn btn-warning">

                  <i class="fa fa-search"></i>

                </button>

              </span>

            </div>

          </form>

        </div>

      </div>
    </div>   
  </div>


   
</header><!--/header-->