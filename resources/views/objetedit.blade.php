@extends('layout')
@section('title')
Update your product
@endsection
@section('li')
<li><a class="dropdown-item" href="{{  url('/myProduct') }}">My Products </a></li>
<li><a class="dropdown-item" href="{{  url('/ajouterObjet') }}">Add</a></li>
@endsection

@section('content')

 <div >
    <br><br><br><br>
 </div>

 <div class="row my-8 ">
     <div class="col-md-5 mx-auto ">
        <div class="card">
             <div class="card-header text-light" style="background-color: black">
                 <h5 class="card-title">
                     Update Product
                 </h5>
             </div>
               <div class="card-body" >

                   <form action="{{ url('update/'.$objets->id) }}" method="POST">

                       <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                        <div class="form-group mb-3">
                          <label for="nom" class="mb-2" ><h6>Name :</h6></label>
                          <input type="text" name="nom" class="form-control" id="nom" value="{{$objets->nom}}">
                        </div>

                        <div class="form-group mb-3">
                          <label for="description"  class="mb-2"><h6>Descreption :</h6></label>
                          <input type="text" name="description" class="form-control" id="description" value="{{$objets->description}}">
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleFormControlSelect1"  class="mb-2"><h6>Product Condition</h6></label>
                          <select class="form-control" value="{{$objets->etat}}" name="etat" id="exampleFormControlSelect1">
                            <option value="Mint" >Mint </option>
                            <option value="Good">Good  </option>
                            <option value="Correct">Correct </option>
                          </select>
                        </div>

                        <div class="col-md-12 text-center">
                          <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" width="50"> UPDATE</button>
                        </div>

                    </form>
               </div>
         </div>
      </div>
  </div>
  <div >
    <br><br><br><br><br><br> <br><br>
 </div>
  @endsection
