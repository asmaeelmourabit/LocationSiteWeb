
@extends('layout')
@section('link')
@section('nav')
<li class="nav-item mt-2 "> <a class="nav-link text-light" href="{{ url('/home') }}">Home</a></li>
@endsection
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="style.css">
@endsection
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<style>
div.style { 
    text-align: center;
}
</style>





<!-- Navigation-->
@section('content')
        <section class="page-section about-heading">
            <div class="container">

                
            </br> </br> </br> 
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('./uploads/'.$post->image)}}" alt="..." />

                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                <h5 class="section-heading-upper">{{$post->nom}}</h5>
                                    <p class="section-heading-upper">{{$post->description}}</p>
                                    <p class="section-heading-upper">Crée le: {{$post->created_at}} </p>
                                    <div class="style">
                                    <a href="{{ url('') }}/home/creeAnnonce/{{$post->id}}" class="btn btn-primary">Publish</a>
</div>                              
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">

        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>









      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection