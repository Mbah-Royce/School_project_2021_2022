@extends('layout.admin')

@section('content')
    
<div class="card height-auto">
    {{-- <x-alert/> --}}
    <div style="display:inline-flex">
    <h3 class="pt-5 pl-4">Student Details</h3>
    <a class="btn btn-primary mt-5 ml-3" href="{{route('student.edit',$student->id)}}" role="button">Edit</a>
    </div>
    <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-xl-8 col-12 border">
                    <div class="row text-center">
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Student ID :</b>{{$student->id}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>User ID :</b>{{$student->user->id}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12">
                        <p><b>First Name :</b>{{$student->user->first_name}}</p>                         
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Last Name :</b>{{$student->user->last_name}}</p>         
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Date Of Birth :</b>{{$student->user->dob}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Gender :</b>{{$student->user->gender}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Father Name :</b>{{$student->father_name}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Mother Name :</b>{{$student->mother_name}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Class :</b>{{$student->classRoom->name}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Class :</b>{{$student->classRoom->name}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Field :</b>{{$student->field->name}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Phone :</b>{{$student->user->phone}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Current Address :</b>{{$student->current_address}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Permanent Address :</b>{{$student->permanent_address}}</p>
                        </div>
                        {{-- <div class="col-xl-6 col-lg-6 col-12 "> 
                            <p><b>Gaurdian First Name :</b>{{$student->gaurdian->user->first_name}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Gaurdian Last Name :</b>{{$student->gaurdian->Lname}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Gaurdian Phone :</b>{{$student->gaurdian->phone}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Gaurdian Address :</b>{{$student->gaurdian->current_address}}</p>
                        </div> --}}
                    </div>
            </div>
               
            <div class="col ">
                <div class="row">
                    <div class="card  m-auto" style="width: 18rem;">
                        <img src="{{asset('kk.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Profile Picture</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Short BIO</h6>
                          <p class="card-text">{{$student->user->biography}}</p>
                        </div>
                      </div>
                    
            </div>
            </div>

    </div>
  </div>

@endsection