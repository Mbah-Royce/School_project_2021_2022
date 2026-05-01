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
        <h5 class="card-title">Role Creation Form</h5>
        <x-alert/>
        <form method="POST" action="{{route('role.store')}}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-xl-6 col-12 border">
                    <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Role Name *</label>
                    <input type="text" placeholder="" class="form-control @error('role') is-invalid @enderror" name="role">
                    @error('role')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-12 col-lg-6 col-12 form-group">
                    <label>Role Desciption</label>
                    <textarea class="textarea form-control" name="message" id="form-message" cols="10" rows="9"></textarea>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label></label>
                    <input name="Lname" type="submit" class="form-control btn1">
                </div>
         </div>

    </div>
  </div>
</div>
</div>
@endsection