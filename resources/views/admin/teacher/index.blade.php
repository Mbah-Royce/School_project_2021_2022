@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            All teachers
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('teacher.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add teacher</a>
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
                <th class="border-top-0">Gender</th>
                <th class="border-top-0">DOB</th>
                <th class="border-top-0">Phone</th>
                <th class="border-top-0">Qualification</th>
                <th class="border-top-0">Address</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($teachers as $teacher)
            <tr>
                <td>
                    {{$teacher->id}}
                </td>
                <td>
                    {{$teacher->user->first_name}}
                </td>
                <td>
                    {{$teacher->user->last_name}}
                </td>
                <td>
                    {{$teacher->user->gender}}
                </td>
                <td>
                    {{$teacher->user->dob}}
                </td>
                <td>
                    {{$teacher->user->phone}}
                </td>
                <td>
                    {{$teacher->qualification}}
                </td>
                <td>
                    {{$teacher->address}}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('teacher.show',$teacher->id)}}" role="button">view</a> 
                    <a class="btn btn-secondary" href="{{route('teacher.edit',$teacher->id)}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to procees with this action') )   {
                    document.getElementById('form-delete-{{$teacher->id}}')
                    .submit()
                    }">
                    @if ($teacher->user->status)
                       Block 
                    @else
                        Unblock
                    @endif
                    </a>
                    <form method=post style="display:none" id="{{'form-delete-'.$teacher->id}}" action="{{route('teacher.status',$teacher->id)}}">
                        @csrf
                        </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $teachers->links() }}
</div>
</div>


    
@endsection