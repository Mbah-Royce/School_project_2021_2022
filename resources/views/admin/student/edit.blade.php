@extends('layouts.admin')

@section('content')
    
<div class="card height-auto">
    {{-- <x-alert/> --}}
    <div class="card-body">
        <h5 class="card-title">Student Creation Form</h5>
        <form method="POST" action="{{route('student.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-6 col-12 border">
                    <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>First Name *</label>
                    <input type="text"  class="form-control @error('Fname') is-invalid @enderror" name="Fname"
                    value="{{$student->Fname}}">
                    @error('Fname')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Last Name *</label>
                    <input name="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror"
                    value="{{$student->Lname}}">
                    @error('name')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    
                        <label for="sel1">Gender *</label>
                        <select class="form-control @error('gender') is-invalid @enderror" id="sel1" name="gender">
                          <option selected>{{$student->gender}}</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      
                      @error('gender')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Date Of Birth *</label>
                    <input type="date" class="form-control air-datepicker @error('DOB') is-invalid @enderror" data-position="bottom right"name="DOB"
                    value="{{$student->dateofbirth}}">
                    @error('DOB')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Phone *</label>
                    <input type="text"  class="form-control @error('phone') is-invalid @enderror" name="phone"
                    value="{{$student->phone}}">
                    @error('phone')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Current address *</label>
                    <input type="text"  class="form-control @error('CurrAdd') is-invalid @enderror" name="CurrAdd"
                    value="{{$student->current_address}}">
                    @error('CurrAdd')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Permanent Address *</label>
                    <input type="text"  class="form-control @error('PermAdd') is-invalid @enderror" name="PermAdd"
                    value="{{$student->permanent_address}}">
                    @error('PermAdd')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Father First Name *</label>
                    <input type="text"  class="form-control @error('Father_Fname') is-invalid @enderror" name="Father_Fname"
                    value="{{$student->Father_Fname}}">
                    @error('Father_Fname')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Father Last Name *</label>
                    <input type="text"  class="form-control @error('Father_Lname') is-invalid @enderror" name="Father_Lname"
                    value="{{$student->Father_Lname}}">
                    @error('Father_Lname')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Mother First Name *</label>
                    <input type="text"  class="form-control  @error('Mother_Fname') is-invalid @enderror" name="Mother_Fname"
                    value="{{$student->Mother_Fname}}">
                    @error('Mother_Fname')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Mother Last Name *</label>
                    <input type="text"  class="form-control @error('Mother_Lname') is-invalid @enderror" name="name"
                    value="{{$student->Mother_Fname}}">
                    @error('Mother_Lname')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Upload Picture *</label>
                    <input type="file" name="avatar" class="form-control-file border">
                </div>

                    </div>
            </div>
               
            <div class="col ">
                <div class="row">
                <div class="col-xl-12 col-lg-6 col-12 form-group">
                    <label>Short BIO</label>
                    <textarea class="textarea form-control @error('info') is-invalid @enderror" name="message" id="form-message" cols="10" rows="9">
                        {{$student->info}}</textarea>
                    @error('info')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label></label>
                    <input type="submit" class="form-control bg-primary" style="color:#fff;">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label></label>
                    <input type="reset" class="form-control bg-warning" style="color:#000;">
                </div>
            </div>
            </div>

    </div>
  </div>

@endsection