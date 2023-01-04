@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-12">
         @include('auth.alert')
       </div>

       <div class="col-md-12">
         <div class="card">
          <div class="card-body">

            <form class="" action="{!! route('users.update', $user) !!}" method="post">
            @csrf
            @method('PUT')
            <div class="col-md-12">
              <label class="mt-4">Fullname</label>
              <input type="text"required name="name" class="form-control" id="name" value="{{$user->name}}">
            </div>

            <div class="col-md-12">
              <label class="mt-4">Email</label>
              <input type="text"required name="email" class="form-control" id="email" value="{{$user->email}}">
            </div>



            <div class="col-md-12">
              <button  type="submit" name="button" class="btn btn-warning mt-4">Editar</button>
            </div>
          </form>

          </div>
        </div>

       </div>





    </div>
</div>
@endsection
