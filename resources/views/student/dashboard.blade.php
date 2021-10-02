@extends('layout.student')

@section('css')
  <style>
      .card-title{
          text-align: center
      }
      .card-body h1{
          text-align: center
      }
  </style>  
@endsection

@section('content')
    
<div class="container-fluid px-lg-4">
    <div class="row">
        <div class="col-md-12 mt-lg-4 mt-4">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-gray-50"></i>
                    generate report</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body" style="background-color:rgba(241, 241, 107, 0.507)">
                            <h5 class="card-title mb-4">
                               Today 
                            </h5>
                            <h1 class="display-5 mt-1 mb-3" id='date'>
                                <script>
                                    d = new Date;
                                    document.getElementById("date").innerHTML = d.toDateString();
                                    </script>                            
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i>346</span>
                                <span class="text-muted">Since Last Week</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body" style="background-color:rgba(93, 228, 238, 0.205)">
                            <h5 class="card-title mb-4">
                                Messages
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i>346</span>
                                <span class="text-muted">Since Last Week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body" style="background-color:rgba(243, 119, 119, 0.295)">
                            <h5 class="card-title mb-4">
                                Assignment
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i>346</span>
                                <span class="text-muted">Since Last Week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body" style="background-color:rgba(140, 243, 140, 0.384)">
                            <h5 class="card-title mb-4">
                                Announcments
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i>346</span>
                                <span class="text-muted">Since Last Week</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                    <h4 class="card-title">
                        Courses
                    </h4>
                    <h5 class="card-subtitle">
                        over view
                    </h5>
                        </div>
                    {{-- <div class="ml-auto">
                        <div class="dl">
                        <select class="custom-select">
                            <option value="0" selected>Mothly</option>
                            <option value="0">Weekly</option>
                            <option value="0">daily</option>
                            <option value="0">yearly</option>
                        </select>
                    </div> --}}
                </div>
            </div>
        </div>
        <input class="form-control" id="myInput" type="text" style="width:300px;"placeholder="Search..">
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
                            <a class="btn btn-primary" href={{route('content.create',$course->id)}} role="button">Upload Assignment</a> 
                            <a class="btn btn-secondary" href={{route('content.show',$course->id)}}  role="button">View Content</a>
                            <a class="btn btn-danger white" role="button">Join Class</a>
        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection