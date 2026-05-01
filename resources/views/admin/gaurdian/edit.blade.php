@extends('layout.admin')

@section('content')
    
<div class="card height-auto">
    <div class="card-body">
        <h5 class="card-title">Gaurdian Creation Form</h5>
        <x-alert/>
        <form method="POST" action="{{route('gaurdian.update',$gaurdian->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-6 col-12 border">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label>{{ __('Profession *') }}</label>
                            <input name="profession" type="text" class="form-control @error('qualification') is-invalid @enderror" required
                            value="{{$gaurdian->profession}}">
                            @error('profession')
                        <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                            <label> {{ __('Id Card Number*') }}</label>
                            <input type="text" placeholder="" class="form-control @error('id_number') is-invalid @enderror" name="id_number" required
                            value="{{$gaurdina->id_number}}">
                            @error('id_number')
                        <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label> {{ __('First Name*') }}</label>
                    <input type="text" placeholder="" class="form-control @error('first_name') is-invalid @enderror" name="first_name" required
                    value="{{$gaurdian->user->first_name}}">
                    @error('first_name')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Last Name *') }}</label>
                    <input name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" required
                    value="{{$gaurdian->user->last_name}}">
                    @error('last_name')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    
                        <label for="sel1">{{ __('Gender *') }}</label>
                        <select class="form-control @error('gender') is-invalid @enderror" id="sel1" name="gender" required>
                          <option selected value="{{$gaurdain->user->gender}}">{{$gaurdain->user->gender}}</option>
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
                    <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker @error('dob') is-invalid @enderror" data-position="bottom right"name="dob" required
                    value="{{$gaurdian->user->dob}}">
                    @error('dob')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Email *') }}</label>
                    <input type="email" placeholder="" class="form-control @error('email') is-invalid @enderror" name="email"
                    value = "{{$gaurdian->user->email}}">
                    @error('email')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Phone *</label>
                    <input type="text" placeholder="" class="form-control @error('phone') is-invalid @enderror" name="phone" required
                    value = "{{$gaurdian->user->phone}}">
                    @error('phone')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>{{ __('Current address *') }}</label>
                    <input type="text" placeholder="" class="form-control @error('address') is-invalid @enderror" name="address" required
                    value = "{{$gaurdian->address}}">
                    @error('address')
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
                    <textarea class="textarea form-control @error('info') is-invalid @enderror" name="message" id="form-message" cols="10" rows="9">
                    {{$teacher->user->biograph}}</textarea>
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