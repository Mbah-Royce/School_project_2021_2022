@extends('layout.admin')

@section('style')
    <style>
        .bg:hover{
            background-color: rgba(255, 99, 132, 0.2)
        }
    </style>
@endsection
@section('content')
    <div class="card height-auto">
        <div class="card-body">
            <h5 class="card-title">Timetable Creation Form</h5>
            <x-alert />
            <form method="POST" action="{{ route('timetable.store') }}" method="POST">
                @csrf
                <div class="row">
                <div class="col-xl-2 col-lg-6 col-12 form-group justify-content-center">
                    <label for="sel1">Class</label>
                    <select class="form-control @error('class_room_id') is-invalid @enderror" id="sel1" name="class_room_id" >
                        @foreach ($classes as $class )
                        <option value= {{$class->id}} >{{$class->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xl-2 col-lg-6 col-12 form-group">
                    <label>{{ __('Week *') }}</label>
                    <input name="week_number" type="text" class="form-control @error('week_number') is-invalid @enderror" >
                    @error('week_number')
                <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
                <div class="row">
                    <?php $i = 0; ?>
                    @foreach ($days as $key =>$day)
                    <div class="col-xl-6 col-12 p-3 border bg">
                        <h5>{{$day}}</h5>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('Course 1 *') }}</label>
                                <select class="form-control @error('class_room_id') is-invalid @enderror" id="sel1" name="course_id[{{$i}}]" >
                                    @foreach ($courses as $course )
                                    <option>Select</option>
                                    <option value= {{$course->id}} >{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('Start Time *') }}</label>
                                <input name="start_time[{{$i}}]" type="time"
                                    class="form-control @error('qualification') is-invalid @enderror" >
                                @error('qualification')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('End Time *') }}</label>
                                <input name="end_time[{{$i}}]" type="time"
                                    class="form-control @error('qualification') is-invalid @enderror" >
                                @error('qualification')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('Course 2 *') }}</label>
                                <select class="form-control @error('class_room_id') is-invalid @enderror" id="sel1" name="course_id[{{++$i}}]" >
                                    @foreach ($courses as $course )
                                    <option>Select</option>
                                    <option value= {{$course->id}} >{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('Start Time *') }}</label>
                                <input name="start_time[{{$i}}]" type="time"
                                    class="form-control @error('qualification') is-invalid @enderror" >
                                @error('qualification')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('End Time *') }}</label>
                                <input name="end_time[{{$i}}]" type="time"
                                    class="form-control @error('qualification') is-invalid @enderror" >
                                @error('qualification')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('Course 3 *') }}</label>
                                <select class="form-control @error('class_room_id') is-invalid @enderror" id="sel1" name="course_id[{{++$i}}]" >
                                    @foreach ($courses as $course )
                                    <option>Select</option>
                                    <option value= {{$course->id}} >{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('Start Time *') }}</label>
                                <input name="start_time[{{$i}}]" type="time"
                                    class="form-control @error('qualification') is-invalid @enderror" >
                                @error('qualification')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>{{ __('End Time *') }}</label>
                                <input name="end_time[{{$i}}]" type="time"
                                    class="form-control @error('qualification') is-invalid @enderror" >
                                @error('qualification')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <?php ++$i; ?>
                    @endforeach
                    <div class="col-xl-4 col-lg-6 col-12 form-group">
                        <label></label>
                        <input  type="submit" class="form-control bg-primary">
                    </div>
                </div>
        </div>

    @endsection
