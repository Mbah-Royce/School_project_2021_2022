@extends('layout.admin')

@section('style')
<style>
    .btn1{
    border: none;
    outline: none;
    height: 50px;
    width: 80%;
    background: rgb(18, 53, 18);
    color: white;
    border-radius: 4px;
    font-weight: bold
}
.btn1:hover{
    background: rgb(255, 84, 22);
    color: white;
    border: 1px solid
}
</style>
@endsection
@section('content')
<div class="card height-auto">
    <div class="card-body">
        <h5 class="card-title">Role Assign Form</h5>
        <form method="POST" action="{{route('role.assign.post')}}">
            @csrf
            <x-alert/>
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-12 border">
                    <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <p>{{$user->first_name." ".$user->last_name}}</p>
                    <p>Current Roles:  <span><b>{{  $List = implode(', ', $user->userRoles()) }}</b></span> </p>
                    <p></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group justify-content-center">
                    @foreach ($roles as $key =>  $role)
                <div class="form-check">
                    @if ()
                        
                    @else
                        
                    @endif
                    <input class="form-check-input" type="checkbox" value="{{$role->id}}" id="flexCheckDefault"{{$key}} name="role_id[{{$key}}]">
                    <label class="form-check-label" for="flexCheckDefault"{{$key}}>
                      {{$role->name}} 
                    </label>
                  </div>
                @endforeach
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <input  name="submit" type="submit" class="form-control btn1">
                </div>
         </div>

    </div>
  </div>
</div>
</div>
@endsection