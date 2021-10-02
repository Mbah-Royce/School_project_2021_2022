@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            All Timetable
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{route('timetable.create')}}" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-gray-50"></i>
                        Add Timetable</a>
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
                <th class="border-top-0">Class</th>
                <th class="border-top-0">Created_at</th>
                <th class="border-top-0">Updated_at</th>
                <th class="border-top-0">Week</th>
                <th class="border-top-0">Action</th>

            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($timetables as $timetable)
            <tr>
                <td>
                    {{$timetable->id}}
                </td>
                <td>
                    {{$timetable->classRoom->name}}
                </td>
                <td>
                    {{$timetable->created_at}}
                </td>
                <td>
                    {{$timetable->updated_at}}
                </td>
                <td>
                    {{$timetable->week_number}}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('timetable.show',$timetable->id)}}" role="button">view</a> 
                    <a class="btn btn-secondary" href="" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button"

                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to delete') )   {
                    document.getElementById('form-delete-{{$timetable->id}}')
                    .submit()
                    }">
                    Delete
                    </a>
                    <form method=post style="display:none" id="{{'form-delete-'.$timetable->id}}" method="post" action="">
                        @csrf
                        @method('delete')
                        </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $timetables->links() }}
</div>
</div>


    
@endsection