@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            Role Name
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('role.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add Role</a>
                </div>
                <input class="form-control" id="myInput" type="text" style="width:300px;"placeholder="Search..">
                <x-alert/>
            </div>
</div>
</div>

<x-alert/>
<div class="table-responsive">
    <table class="table v-middle">
        <thead>
            <tr class="bg-light">
                <th class="border-top-0">User ID</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Granted At</th>
                <th class="border-top-0">Updated At</th>
                <th class="border-top-0">Action</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($role->users as $user)
                
            <tr>
                <td>
                     {{$user->id}}          
                </td>
                <td>
                    {{$user->first_name ." ". $user->last_name}}  
                </td>
                <td>
                    {{$user->pivot->created_at}}  
                </td>
                <td>
                    {{$user->pivot->updated_at}}
                </td>
                <td>
                    <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to perfomr this action') )   {
                    document.getElementById('form-delete-{{$user->id}}')
                    .submit()
                    }">Revoke</a>
                    <form style="display:none" id="{{'form-delete-'.$user->id}}" method="post" action="{{route('role.revoke',$role->id)}}">
                        @csrf
                        <input type="number" value="{{$user->id}}" name="user_id">
                        </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>


    
@endsection