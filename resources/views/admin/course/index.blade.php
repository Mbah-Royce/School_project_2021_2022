@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            All Courses
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('course.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add Courses</a>
                </div>
                <input class="form-control" id="myInput" type="text" style="width:300px;"placeholder="Search..">
                <x-alert/>
            </div>
</div>
</div>


<div class="table-responsive">
    <table class="table v-middle">
        <thead>
            <tr class="bg-light">
                <th class="border-top-0">ID</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Class</th>
                <th class="border-top-0">Instructor</th>
                <th class="border-top-0">Coefficient</th>
                <th class="border-top-0">Duration</th>
                <th class="border-top-0">Created At</th>
                <th class="border-top-0">Actions</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($courses as $course)
            <tr>
                <td>
                    {{$course->id}}
                </td>
                <td>
                    {{$course->name}}
                </td>
                <td>
                    {{$course->classRoom->name}}
                </td>
                <td>
                    {{$course->teacher->user->first_name}} {{$course->teacher->user->last_name}}
                </td>
                <td>
                    {{$course->coef}}
                </td>
                <td>
                    {{$course->duration}}
                </td>
                <td>
                    {{$course->created_at}}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('course.show',$course->id)}}" role="button">view</a> 
                    <a class="btn btn-secondary" href="{{route('course.edit',$course->id)}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to delete') )   {
                    document.getElementById('form-delete-{{$course->id}}')
                    .submit()
                    }">
                    Delete
                    </a>
                    <form method=post style="display:none" id="{{'form-delete-'.$course->id}}" method="post" action="{{route('course.destroy',$course->id)}}">
                        @csrf
                        @method('delete')
                        </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>


    
@endsection