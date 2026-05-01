@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            All Roles
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('role.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add Role</a>
                </div> --}}
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
                <th class="border-top-0">Created At</th>
                <th class="border-top-0">Update At</th>
                <th class="border-top-0">Current Roles</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($users as $user)
                
            <tr>
                <td>
                     {{$user['id']}}          
                </td>
                <td>
                    {{$user['first_name']}}  
                </td>
                <td>
                    {{$user['last_name']}}  
                </td>
                <td>
                    {{$user['created_at']}}  
                </td>
                <td>
                    {{$user['updated_at']}}
                </td>
                <td>
                    {{  $List = implode(', ', $user['roles']) }}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('role.assign',$user['id'])}}" role="button">Assign Role</a> 
                    {{-- <a class="btn btn-secondary" href="{{route('role.edit',$role->id)}}" role="button">Edit</a> --}}
                    {{-- <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to delete') )   {
                    document.getElementById('form-delete-{{$role->id}}')
                    .submit()
                    }">Delete</a> --}}
                    {{-- <form style="display:none" id="{{'form-delete-'.$role->id}}" method="post" action="{{route('role.destroy',$role->id)}}">
                        @csrf
                        @method('delete')
                        </form> --}}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>


    
@endsection