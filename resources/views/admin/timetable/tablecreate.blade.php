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
        <h5 class="card-title">Class Room Creation Form</h5>
        <form method="POST" action="{{route('table.store')}}">
            @csrf
            <x-alert/>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-12 border">
                    <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label for="sel1">Class</label>
                    <select class="form-control @error('class_room_id') is-invalid @enderror" id="sel1" name="class_room_id" >
                        @foreach ($classes as $class )
                        <option value= {{$class->id}} >{{$class->name}}</option>
                        @endforeach
                    </select>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Week *</label>
                    <input type="text" placeholder="" class="form-control @error('capacity') is-invalid @enderror" name="week_number">
                    @error('capacity')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label></label>
                    <input  type="submit" class="form-control btn1">
                </div>
         </div>

    </div>
  </div>
</div>
</div>
@endsection