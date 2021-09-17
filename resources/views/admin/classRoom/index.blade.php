@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            All classRooms
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('classRoom.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add classRooms</a>
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
                <th class="border-top-0">Capacity</th>
                <th class="border-top-0">Created_at</th>
                <th class="border-top-0">No Courses</th>
                <th class="border-top-0">No Students</th>
                <th class="border-top-0">Actions</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($classRooms as $classRoom)
            <tr>
                <td>
                    {{$classRoom->id}}
                </td>
                <td>
                    {{$classRoom->name}}
                </td>
                <td>
                    {{$classRoom->capacity}}
                </td>
                <td>
                    {{$classRoom->created_at}}
                </td>
                <td>
                    {{$classRoom->courses->count()}}
                </td>
                <td>
                    {{$classRoom->students->count()}}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('classRoom.show',$classRoom->id)}}" role="button">view</a> 
                    <a class="btn btn-secondary" href="{{route('classRoom.edit',$classRoom->id)}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to delete') )   {
                    document.getElementById('form-delete-{{$classRoom->id}}')
                    .submit()
                    }">
                    Delete
                    </a>
                    <form method=post style="display:none" id="{{'form-delete-'.$classRoom->id}}" method="post" action="{{route('classRoom.destroy',$classRoom->id)}}">
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