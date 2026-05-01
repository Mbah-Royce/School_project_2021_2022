@extends('layout.admin')

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
                                Users
                            </h5>
                            <h1 class="display-5 mt-1 mb-3" id="board1">
                                
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i></span>
                                <span class="text-muted">Total Users</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body" style="background-color:rgba(93, 228, 238, 0.205)">
                            <h5 class="card-title mb-4">
                                Students
                            </h5>
                            <h1 class="display-5 mt-1 mb-3" id="board2">
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i></span>
                                <span class="text-muted">Total Students</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body" style="background-color:rgba(243, 119, 119, 0.295)">
                            <h5 class="card-title mb-4">
                                Courses
                            </h5>
                            <h1 class="display-5 mt-1 mb-3" id="board3">
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i></span>
                                <span class="text-muted">Total Courses</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body" style="background-color:rgba(140, 243, 140, 0.384)">
                            <h5 class="card-title mb-4">
                                Classes Rooms
                            </h5>
                            <h1 class="display-5 mt-1 mb-3" id="board4">
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i></span>
                                <span class="text-muted">Total classes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="display-5 mt-1 mb-3" >
                                Users
                            </h1>
                            <canvas id="myChart" width="400" height="400"></canvas>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i></span>
                                <span class="text-muted">Plaform Users</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="display-5 mt-1 mb-3">
                                Students
                            </h1>
                            <canvas id="myChart1" width="400" height="400"></canvas>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i></span>
                                <span class="text-muted">Total Students</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="display-5 mt-1 mb-3">
                                Fields
                            </h1>
                            <canvas id="myChart2" width="400" height="400"></canvas>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i></span>
                                <span class="text-muted">Teacher</span>
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
                    <h5 class="card-subtitle">
                        User overview
                    </h5>
                        </div>
                    <div class="ml-auto">
                        <div class="dl">
                        <select class="custom-select">
                            <option value="0" selected>All Users</option>
                            <option value="0">Teachers</option>
                            <option value="0">Students</option>
                            <option value="0">Gaurdians</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table v-middle">
                <thead>
                    <tr class="bg-light">
                        <th class="border-top-0">ID</th>
                        <th class="border-top-0">Profile Pic</th>
                        <th class="border-top-0">Fist Name</th>
                        <th class="border-top-0">Last Name</th>
                        <th class="border-top-0">Gender</th>
                        <th class="border-top-0">Phone</th>
                        <th class="border-top-0">Dob</th>
                        <th class="border-top-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            {{$user->id}} 
                         </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <a class="btn btn-circle btn-info text-green">EA</a>       
                                </div>
                                <div>
                                    <h4 class="m-b-0 font-16">
                                        Elite Admin
                                    </h4>
                                </div>
                            </div>
                        </td>
                        <td>
                           {{$user->first_name}} 
                        </td>
                        <td>
                            {{$user->last_name}} 
                        </td>
                        <td>
                            {{$user->gender}} 
                        </td>
                        <td>
                            {{$user->phone}}   
                        </td>
                        <td>
                            {{$user->dob}} 
                        </td>
                        <td>
                    <a class="btn btn-danger" href="" role="button"
                    onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to delete') )   {
                    document.getElementById('form-delete-{{$user->id}}')
                    .submit()
                    }">
                    @if ($user->status)
                       Block 
                    @else
                        Unblock
                    @endif
                    </a>
                    <form method=post style="display:none" id="{{'form-delete-'.$user->id}}" method="post" action="{{route('user.status',$user->id)}}">
                        @csrf
                        </form>
                        </td>
                    </tr>
                    <tr>  
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
@push('child-jscripts')
<script>
    buildChart()
    buildChart1()
    getCourseData()
    getClassData()
    buildChart2()
    // buildChart3()
  async function buildChart(){
    stats = await getUserData();
    console.log(stats);
    var d1 = document.getElementById('board1').innerHTML = sum(stats)
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Students', 'Teacher', 'Gaurdians'],
            datasets: [{
                label: 'User Propotion',
                data: stats,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    }

    async function buildChart1(){
    stats = await getStudentData();
    console.log(stats);
    var d1 = document.getElementById('board2').innerHTML = sum(stats)
    var ctx1 = document.getElementById('myChart1');
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Male', 'Female'],
            datasets: [{
                label: 'Sex Ratio',
                data: stats,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    }
async function buildChart2(){
     stats = await getFeildData();
     console.log(stats);
    //  var d1 = document.getElementById('board2').innerHTML = sum(stats)
    var ctx1 = document.getElementById('myChart2');
    var myChart1 = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ['SE', 'GL', 'SR',],
            datasets: [{
                label: 'Field stats',
                data: stats,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    }
async function getUserData(params) {
 let xdata = []
await axios.get('http://127.0.0.1:8000/api/v1/users')
  .then( (response)=> {
    xdata = response.data.data
  })
  .catch(function (error) {
  })
  return xdata
    }

async function getStudentData(){
    let xdata = []
await axios.get('http://127.0.0.1:8000/api/v1/students')
  .then( (response)=> {
    xdata = response.data.data
  })
  .catch(function (error) {
  })
  return xdata
}

async function getCourseData(){
    let xdata = []
await axios.get('http://127.0.0.1:8000/api/v1/courses')
  .then( (response)=> {
    xdata = response.data.data
  })
  .catch(function (error) {
  })
  console.log(xdata)
  var d1 = document.getElementById('board3').innerHTML = xdata
}

async function getClassData(){
    let xdata = []
await axios.get('http://127.0.0.1:8000/api/v1/class')
  .then( (response)=> {
    xdata = response.data.data
  })
  .catch(function (error) {
  })
  console.log(xdata)
  var d1 = document.getElementById('board4').innerHTML = xdata
}

async function getFeildData(){
    let xdata = []
await axios.get('http://127.0.0.1:8000/api/v1/field')
  .then( (response)=> {
    xdata = response.data.data
  })
  .catch(function (error) {
  })
 return xdata
}
function sum(input) {
  if (toString.call(input) !== "[object Array]")
         return false;
                      
         var total = 0;
            for(var i=0;i<input.length;i++) {                 
                 if(isNaN(input[i])) {
                   continue;
                }
                          
        total += Number(input[i]);
            }
    return total;
        }
    </script>
@endpush