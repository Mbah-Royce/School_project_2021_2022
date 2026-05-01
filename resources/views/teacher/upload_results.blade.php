@extends('layout.teacher')

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
    select{
        overflow: auto;
        background-color: red
    }
</style>
@section('content')
<div class="card height-auto">
    <div class="card-body">
        <h5 class="card-title">Course Upload Content </h5>
        <form method="POST" action="{{route('results.store')}}" enctype="multipart/form-data">
            @csrf
            <x-alert/>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-12 border">
                    <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Results *</label>
                    <input type="file"  class="form-control @error('content') is-invalid @enderror" name="file">
                    @error('file')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    
                    <label for="sel1">{{ __('Type *') }}</label>
                    <select class="form-control @error('type') is-invalid @enderror" id="sel1" name="type" required>
                      <option value="assignment">CA</option>
                      <option value="tutorials">EXAM</option>
                    </select>
                  
                  @error('type')
            <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <input name="course_id" type="number" value="{{$id}}" style="display:none">
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