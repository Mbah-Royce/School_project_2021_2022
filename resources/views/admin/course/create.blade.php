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
    select{
        overflow: auto;
        background-color: red
    }
</style>
@endsection
@section('content')
<div class="card height-auto">
    <div class="card-body">
        <h5 class="card-title">Class Room Creation Form</h5>
        <form method="POST" action="{{route('course.store')}}">
            @csrf
            <x-alert/>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-12 border">
                    <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Course Name *</label>
                    <input type="text" placeholder="" class="form-control @error('role') is-invalid @enderror" name="name" required>
                    @error('role')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Course Coef *</label>
                    <input type="text" placeholder="" class="form-control @error('coef') is-invalid @enderror" name="coef" required>
                    @error('coef')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Course Duration *</label>
                    <input type="text" placeholder="" class="form-control @error('duration') is-invalid @enderror" name="duration" required>
                    @error('duration')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group justify-content-center">
                    <label for="sel1">Class</label>
                    <select class="form-control @error('class_room_id') is-invalid @enderror" id="sel2" name="class_room_id" required>
                        @foreach ($classes as $class )
                        <option value= {{$class->id}} >{{$class->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group justify-content-center">
                    <label for="sel1">Teacher</label>
                    <select size="3" class="form-control @error('teacher_id') is-invalid @enderror" id="sel2" name="teacher_id" required>
                        @foreach ($teachers as $teacher )
                            <option value= {{$teacher['id']}} >{{$teacher['name']}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group justify-content-center">
                    <label for="sel1">Semester</label>
                    <select class="form-control @error('role') is-invalid @enderror" id="sel2" name="semester_id" required>
                        <option value="1" >first</option>
                        <option value="2" >second</option>
                    </select>
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