

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@yield('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css">
 
 
<style>
  element.style {
    background-color: rgb(130 137 136);
}
  @import url('https://fonts.googleapis.com/css2?family=Koulen&display=swap');
    .checked {
  color: orange;
}
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap');
    /* From uiverse.io by @G4b413l */
    .card {
    width: 860px;
    transition: all 0.2s;
    position: relative;
    cursor: pointer;
    margin-left: 194px;
    margin-top: -22px;
}
.card-inner {
  width: inherit;
  height: inherit;
  background: rgba(255,255,255,.05);
  box-shadow: 0 0 10px rgba(0,0,0,0.25);
  backdrop-filter: blur(10px);
  border-radius: 8px;
}



.circle {
    width: 100px;
    height: 100px;
    background: radial-gradient(#000000eb, #13d7c5);
    border-radius: 50%;
    position: absolute;
    animation: move-up6 2s ease-in infinite alternate-reverse;
    margin-top: 7px;
}

.circle:nth-child(1) {
  top: -25px;
  left: -25px;
}

.circle:nth-child(2) {
  bottom: -25px;
  right: -25px;
  animation-name: move-down1;
}


@keyframes move-up6 {
  to {
    transform: translateY(-10px);
  }
}

@keyframes move-down1 {
  to {
    transform: translateY(10px);
  }
}

    h1 {
    padding-top: 125px;
    padding-left: 142px;
   
    font-size:1.3rem;
}
h2{
    padding-top: 13px;
    padding-left: 145px;

    font-size:1.3rem;
}
.w3-light-grey, .w3-hover-light-grey:hover, .w3-light-gray, .w3-hover-light-gray:hover {
    color: #000!important;
    background-color: #f1f1f1!important;
    width: 400px;
    margin-left: 150px;
}
#Z{
  margin-left:45px;
}


    </style>
   </head>
   <body>
   <body style="background-color: var(--bs-white);">
    <nav id="navbar" class="navbar shadow  "  style="background-color: rgba(0, 128, 128, 0.863); " class="py-0">
        <div class="navbar-brand ms-5 " style="display: flex;">
            <img src="{{ asset('./uploads/nlog.png') }}" alt=""  width="50"  height="47" class="d-inline-block align-text-top">
            <div  class = "site-brand">
                Loca<span>Five</span>
            </div>
        </div>


        <ul class="nav nav-pills">

            @if(auth()->check())

            <div class="input-group mb-1 mt-1">
                <li class="nav-item mt-2 ">
                    <a class="nav-link text-light" href="{{ url('/') }}">Home</a>
                </li>
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <a class="btn btn-outline shadow-none " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt=""  width="40" height="40"   class="rounded-circle img-responsive"></a>
                    @endif
                <ul class="dropdown-menu dropdown-menu-end me-3 ">
                  <li><a class="dropdown-item" href="{{ route('profile.show') }}">{{auth()->user()->name}}</a></li>
                  @yield('li')

@if(auth()->check())

@if(  strcmp( auth()->user()->role_user ,"P") == 0)
<li><a class="dropdown-item" href="{{  url('/myProduct') }}">My Products </a></li>
<li><a class="dropdown-item" href="{{  url('/ajouterObjet') }}">Add</a></li>
@endif
@endif
                  <li><hr class="dropdown-divider"></li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><button class="dropdown-item" type="submit" > Logout</button></li>
                  </form>
                </ul>
              </div>
            @else
            <li class="nav-item ">
                <a class="nav-link text-light" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('register') }}">Registre</a>
            </li>
            @endif
        </ul>
      </nav>
      <div class="container">
          @yield('content')
      </div>
      </div class="container-fluid mt-10 mb-10" >
      @yield('contentfluid')
      <div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer>

</footer>

    <h1> </h1>
<div class="card">
  
<div class="circle"></div>
  <div class="circle"></div>
    <div class="card-inner">
    
    @foreach ( $post3 as $tt)
    <img   class="thumbnail_images1 " src="{{ Storage::url($tt->profile_photo_path)}}" width="70"></li>
     <h1 >Name :{{$tt->name}}   </h1> 
    <h2 > <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$tt->email}}</h2>
    <h2> </h2>
          <div class="w3-light-grey w3-round-xlarge w3-small">
         
         
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">  </div>
         
          </div>
   <br>
   @endforeach
   <hr>
   <div class="w3-container">
          <h5 class="w3-opacity"><b>FEEDBACK OF CLIENTS</b></h5>
          <?php $i=1;?>
          @foreach ( $post2 as $tt)
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> - <span class="w3-tag w3-teal w3-round">Client <?php echo $i;$i++;?></span></h6>
          <p>{{$tt->comment}}  </p>
          <h6 class="w3-opacity"><b>RATING : 
          <?php if($tt->rated_star==2):
          echo "<span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star '></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>";
          elseif($tt->rated_star==3):
            echo "<span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>";
          elseif($tt->rated_star==1):
            echo "<span class='fa fa-star checked'></span>
          <span class='fa fa-star '></span>
          <span class='fa fa-star '></span>
          <span class='fa fa-star'></span>
          <span class='fa fa-star'></span>";
          elseif($tt->rated_star==4):
            echo "<span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star '></span>";
          elseif($tt->rated_star==5):
            echo "<span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>
          <span class='fa fa-star checked'></span>";
          endif ?>
          </b></h6>
          
           
          
          <hr>
          @endforeach
        </div>
        <footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
<i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
 <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by locafive</p>
</footer>

    </div>
    
 
  
  
    
</div>

    