@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            All Students
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('student.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add Student</a>
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
                <th class="border-top-0">First Name</th>
                <th class="border-top-0">Last Name</th>
                <th class="border-top-0">Class</th>
                <th class="border-top-0">Gender</th>
                <th class="border-top-0">DOB</th>
                <th class="border-top-0">Phone</th>
                <th class="border-top-0">Cur_Add</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($students as $student)
            <tr>
                <td>
                    {{$student->id}}
                </td>
                <td>
                    {{$student->user->first_name}}
                </td>
                <td>
                    {{$student->user->last_name}}
                </td>
                <td>
                    {{$student->classRoom->name}}
                </td>
                <td>
                    {{$student->user->gender}}
                </td>
                <td>
                    {{$student->user->dob}}
                </td>
                <td>
                    {{$student->user->phone}}
                </td>
                <td>
                    {{$student->user->current_address}}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('student.show',$student->id)}}" role="button">view</a> 
                    <a class="btn btn-secondary" href="{{route('student.edit',$student->id)}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to delete') )   {
                    document.getElementById('form-delete-{{$student->id}}')
                    .submit()
                    }">
                    @if ($student->user->status)
                       Block 
                    @else
                        Unblock
                    @endif
                    </a>
                    <form method=post style="display:none" id="{{'form-delete-'.$student->id}}" method="post" action="{{route('student.status',$student->id)}}">
                        @csrf
                        </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $students->links() }}
</div>
</div>


    
@endsection