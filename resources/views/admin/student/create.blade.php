@extends('layout.admin')

@section('content')
    
<div class="card height-auto">
    <x-alert/>
    <div class="card-body">
        <h5 class="card-title">Student Creation Form</h5>
        <form method="POST" action="{{route('student.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-6 col-12 border">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12 form-group justify-content-center">
                            <label for="sel1">Academic Year</label>
                            <select class="form-control @error('role') is-invalid @enderror" id="sel1" name="academic_session_id">
                                @foreach ($sessions as $session )
                                <option value= {{$session->id}} >{{$session->year}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 form-group justify-content-center">
                            <label for="sel1">Class</label>
                            <select class="form-control @error('role') is-invalid @enderror" id="sel1" name="class_room_id">
                                @foreach ($classes as $class )
                                <option value= {{$class->id}} >{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 form-group justify-content-center">
                            <label for="sel1">Field</label>
                            <select class="form-control @error('role') is-invalid @enderror" id="sel2" name="field_id">
                                @foreach ($fields as $field )
                                <option value= {{$field->id}} >{{$field->name}}</option>
                                @endforeach
                            </select>
                        </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label> {{ __('First Name*') }}</label>
                    <input type="text" placeholder="" class="form-control @error('first_name') is-invalid @enderror" name="first_name">
                    @error('first_name')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Last Name *') }}</label>
                    <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror">
                    @error('last_name')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    
                        <label for="sel1">{{ __('Gender *') }}</label>
                        <select class="form-control @error('gender') is-invalid @enderror" id="sel1" name="gender" required>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      
                      @error('gender')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Date Of Birth *') }}</label>
                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker @error('dob') is-invalid @enderror" data-position="bottom right"name="dob">
                    @error('dob')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Email *') }}</label>
                    <input type="email" placeholder="" class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Phone *</label>
                    <input type="text" placeholder="" class="form-control @error('phone') is-invalid @enderror" name="phone">
                    @error('phone')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Current address *') }}</label>
                    <input type="text" placeholder="" class="form-control @error('CurrAdd') is-invalid @enderror" name="CurrAdd">
                    @error('CurrAdd')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Permanent Address *') }}</label>
                    <input type="text" placeholder="" class="form-control @error('PermAdd') is-invalid @enderror" name="PermAdd">
                    @error('PermAdd')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Father Name *') }}</label>
                    <input type="text" placeholder="" class="form-control @error('father_name') is-invalid @enderror" name="father_name">
                    @error('father_name')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Mother Name *') }}</label>
                    <input type="text" placeholder="" class="form-control  @error('mother_name') is-invalid @enderror" name="mother_name">
                    @error('mother_name')
                    <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Upload Picture') }}</label>
                    <input type="file" name="profile_picture" class="form-control-file border">
                </div>
                    </div>
            </div>
               
            <div class="col ">
                <div class="row">
                <div class="col-xl-12 col-lg-6 col-12 form-group">
                    <label>Short BIO</label>
                    <textarea class="textarea form-control @error('info') is-invalid @enderror" name="message" id="form-message" cols="10" rows="9"></textarea>
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