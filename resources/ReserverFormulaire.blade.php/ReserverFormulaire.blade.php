@extends('layout')
@section('title')
Add Ads
@endsection
@section('nav')
<li class="nav-item mt-2 "> <a class="nav-link text-light" href="{{ url('/home') }}">Home</a></li>
@endsection


@section('content')

 <div >
    <br><br><br><br>
 </div>

 <div class="row my-8  ">
     <div class="col-md-5 mx-auto ">
       <div>
     @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
</div>
        <div class="card ">
             <div class="card-header " >
                 <h5 class="card-title">
                    Add an ad
                 </h5>
                 <img class="shadow mb-3"src="{{asset('./uploads/'.$post->image)}}"alt="IMG" style="margin-left: 35%;  " height="150" width="150">
             </div>
               <div class="card-body" >
                   <form  methde="post" action="{{ route('ReserveForm')}}" >

                        <div class="wrap-input1 validate-input" >
                          <input class="input1" name="id_objet" type="hidden" value="{{$post->id}}" >
                          <span class="shadow-input1"></span>
                        </div>



                         <label for="exampleFormControlSelect1"  class="mb-2"><h6>Reservation date</h6></label>
                         <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" data-validate = "Subject is required">
                            <input class="form-control" type="text" onfocus="(this.type='date')"  name="date_debut" placeholder="de">
                            <span class="shadow-input1"></span>
                        </div>
                          <label for="example"></label>
                          <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" data-validate = "Subject is required">
                            <input class="form-control" type="text" onfocus="(this.type='date')"  name="date_fin" placeholder="à">
                            <span class="shadow-input1"></span>
                        </div>

				<div class="container-contact1-form-btn" >
					<button class="btn btn-primary  mt-3"  >
						<span >
							Confirmer
							<i class="fa fa-long-arrow-right" type="submit "aria-hidden="true"></i>
						</span>
					</button>
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
