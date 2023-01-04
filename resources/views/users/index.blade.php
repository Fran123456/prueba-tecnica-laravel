@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-12">
         @include('users.modal')
         @include('auth.alert')
       </div>
        <div class="col-md-12 text-end mb-3">
          <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar
          </button>
        </div>

        <div class="col-md-12">
          <div class="card">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Fullname</th>
                  <th scope="col">Email</th>
                  <th width="80" scope="col">Update</th>
                  <th width="80" scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $user)
                  <th scope="row">{{$key+1}}</th>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td> <a href="{!! route('users.edit', $user->id) !!}" class="btn btn-warning">Edit</a> </td>
                     <td>
                       @if ( Auth::user()->id == $user->id )
                         <button type="button" disabled name="button" class="btn btn-danger">Eliminar</button>
                      @else
                        <form action="{{ route('users.destroy', $user->id) }}" method ="POST" >
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Eliminar" onclick="return deleteUser('Do you want to delete the user {{$user->email}}?')">
                         </form>
                       @endif

                      </td>
                 </tr>
                @endforeach



              </tbody>
            </table>
          </div>
        </div>

        </div>
    </div>
</div>
@endsection

<script>
  function deleteUser(value){
      action = confirm(value) ? true: event.preventDefault()
  }
</script>
