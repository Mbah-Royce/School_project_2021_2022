@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            Role Listing
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('permission.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add Role</a>
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
                <th class="border-top-0">Role</th>
                <th class="border-top-0">Created At</th>
                <th class="border-top-0">Update At</th>
                <th class="border-top-0">Actions</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($permissions as $permission)
             <tr>
                <td>
                     {{$permission->id}}          
                </td>
                <td>
                    {{$permission->name}}  
                </td>
                <?php $name = $permission->roles()->select('name')->get() ?>
                <td>
                   @foreach ($name as $nam)
                       {{$nam->name}}
                   @endforeach  
                </td>
                <td>
                    {{$permission->created_at}}  
                </td>
                <td>
                    {{$permission->updated_at}}
                </td>
               <td>
                    <a class="btn btn-primary" href="{{route('permission.show',$permission->id)}}" role="button">view</a> 
                    <a class="btn btn-secondary" href="{{route('permission.edit',$permission->id)}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to delete') )   {
                    document.getElementById('form-delete-{{$permission->id}}')
                    .submit()
                    }">Delete</a>
                    <form style="display:none" id="{{'form-delete-'.$permission->id}}" method="post" action="{{route('permission.destroy',$permission->id)}}">
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