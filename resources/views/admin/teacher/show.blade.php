@extends('layout.admin')

@section('content')
    
<div class="card height-auto">
    {{-- <x-alert/> --}}
    <div style="display:inline-flex">
    <h3 class="pt-5 pl-4">Teacher Details</h3>
    <a class="btn btn-primary mt-5 ml-3" href="{{route('teacher.edit',$teacher->id)}}" role="button">Edit</a>
    </div>
    <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-xl-8 col-12 border">
                    <div class="row text-center">
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>teacher ID :</b>{{$teacher->id}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>User ID :</b>{{$teacher->user->id}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12">
                        <p><b>First Name :</b>{{$teacher->user->first_name}}</p>                         
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Last Name :</b>{{$teacher->user->last_name}}</p>         
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Date Of Birth :</b>{{$teacher->user->dob}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Gender :</b>{{$teacher->user->gender}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Qualification :</b>{{$teacher->qualification}}</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <h5><b>Courses :</b></h5>
                        </div>
                        @foreach ($teacher->course as $course)
                            <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b></b>{{$course->name}}</p>
                        </div>
                        @endforeach
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <h5><b>Roles :</b></h5>
                        </div>
                        @foreach ($teacher->user->roles as $role)
                        <div class="col-xl-6 col-lg-6 col-12 ">
                        <p><b></b>{{$role->name}}</p>
                    </div>
                    @endforeach
                        <div class="col-xl-6 col-lg-6 col-12 ">
                            <p><b>Phone :</b>{{$teacher->user->phone}}</p>
                        </div>
                    </div>
            </div>
               
            <div class="col ">
                <div class="row">
                    <div class="card  m-auto" style="width: 18rem;">
                        <img src="{{asset('kk.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Profile Picture</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Short BIO</h6>
                          <p class="card-text">{{$teacher->user->biography}}</p>
                        </div>
                      </div>
                    
            </div>
            </div>

    </div>
  </div>

@endsection