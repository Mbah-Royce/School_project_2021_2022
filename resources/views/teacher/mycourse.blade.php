@extends('layout.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-md-flex align-items-center">
            <div>
        <h4 class="card-title">
            Course Listing
        </h4>
        <h5 class="card-subtitle">  
        </h5>
            </div>

            <div class="col-md-12 mt-lg-4 mt-4">
                <input class="form-control" id="myInput" type="text" style="width:300px;"placeholder="Search..">
                <x-alert/>
            </div>
</div>
</div>


<div class="table-responsive">
    <table class="table v-middle">
        <thead>
            <tr class="bg-light">
                <th class="border-top-0">Id</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Duration</th>
                <th class="border-top-0">Coef</th>
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
                    {{$course->duration}}  
                </td>
                <td>
                    {{$course->coef}}  
                </td>
               <td>
                    <a class="btn btn-primary" href=# role="button">Upload Content</a> 
                    <a class="btn btn-secondary" href=# role="button">View Content</a>
                    <a class="btn btn-danger white" role="button">Start Class</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>


    
@endsection