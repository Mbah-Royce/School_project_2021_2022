@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            All gaurdians
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('gaurdian.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add gaurdian</a>
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
                <th class="border-top-0">Profession</th>
                <th class="border-top-0">Address</th>
                <th class="border-top-0">No Student</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($gaurdians as $gaurdian)
            <tr>
                <td>
                    {{$gaurdian->id}}
                </td>
                <td>
                    {{$gaurdian->user->first_name}}
                </td>
                <td>
                    {{$gaurdian->user->last_name}}
                </td>
                <td>
                    {{$gaurdian->user->gender}}
                </td>
                <td>
                    {{$gaurdian->user->dob}}
                </td>
                <td>
                    {{$gaurdian->user->phone}}
                </td>
                <td>
                    {{$gaurdian->profession}}
                </td>
                <td>
                    {{$gaurdian->address}}
                </td>
                <td>
                    {{$gaurdian->student->count()}}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('gaurdian.show',$gaurdian->id)}}" role="button">view</a> 
                    <a class="btn btn-secondary" href="{{route('gaurdian.edit',$gaurdian->id)}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to procees with this action') )   {
                    document.getElementById('form-delete-{{$gaurdian->id}}')
                    .submit()
                    }">
                    @if ($gaurdian->user->status)
                       Block 
                    @else
                        Unblock
                    @endif
                    </a>
                    <form method=post style="display:none" id="{{'form-delete-'.$gaurdian->id}}" method="post" action="{{route('user.status',$gaurdian->user->id)}}">
                        @csrf
                        </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>


    
@endsection