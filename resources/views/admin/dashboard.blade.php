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
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                sales
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2.4543
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
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                sales
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2.4543
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
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                sales
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2.4543
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
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                sales
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2.4543
                            </h1>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i>346</span>
                                <span class="text-muted">Since Last Week</span>
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
                            <h5 class="card-title mb-4">
                                sales
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2.4543
                            </h1>
                            <canvas id="myChart" width="400" height="400"></canvas>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i>346</span>
                                <span class="text-muted">Since Last Week</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                sales
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2.4543
                            </h1>
                            <canvas id="myChart1" width="400" height="400"></canvas>
                            <div class="mb-1">
                                <span class="text-danger"><i class="mdi mdi-arrow-buttom-right"></i>346</span>
                                <span class="text-muted">Since Last Week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                sales
                            </h5>
                            <h1 class="display-5 mt-1 mb-3">
                                2.4543
                            </h1>
                            <canvas id="myChart2" width="400" height="400"></canvas>
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
                        Top Sale
                    </h4>
                    <h5 class="card-subtitle">
                        over view
                    </h5>
                        </div>
                    <div class="ml-auto">
                        <div class="dl">
                        <select class="custom-select">
                            <option value="0" selected>Mothly</option>
                            <option value="0">Weekly</option>
                            <option value="0">daily</option>
                            <option value="0">yearly</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table v-middle">
                <thead>
                    <tr class="bg-light">
                        <th class="border-top-0">Product</th>
                        <th class="border-top-0">License</th>
                        <th class="border-top-0">support agent</th>
                        <th class="border-top-0">Technology</th>
                        <th class="border-top-0">Ticket</th>
                        <th class="border-top-0">Sales</th>
                        <th class="border-top-0">Earningsd</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                           Single use 
                        </td>
                        <td>
                          John doe  
                        </td>
                        <td>
                           <label class="label label-danger">Angular</label> 
                        </td>
                        <td>
                          46  
                        </td>
                        <td>
                           356 
                        </td>
                        <td>
                            <h4 class="m-b-0"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <a class="btn btn-circle-info ">EA</a>       
                                </div>
                                <div>
                                    <h4 class="m-b-0 font-16">
                                        Elite Admin
                                    </h4>
                                </div>
                            </div>
                        </td>
                        <td>
                           Single use 
                        </td>
                        <td>
                          John doe  
                        </td>
                        <td>
                           <label class="label label-danger">Angular</label> 
                        </td>
                        <td>
                          46  
                        </td>
                        <td>
                           356 
                        </td>
                        <td>
                            <h4 class="m-b-0"></h4>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <a class="btn btn-circle-info ">EA</a>       
                                </div>
                                <div>
                                    <h4 class="m-b-0 font-16">
                                        Elite Admin
                                    </h4>
                                </div>
                            </div>
                        </td>
                        <td>
                           Single use 
                        </td>
                        <td>
                          John doe  
                        </td>
                        <td>
                           <label class="label label-danger">Angular</label> 
                        </td>
                        <td>
                          46  
                        </td>
                        <td>
                           356 
                        </td>
                        <td>
                            <h4 class="m-b-0"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <a class="btn btn-circle-info ">EA</a>       
                                </div>
                                <div>
                                    <h4 class="m-b-0 font-16">
                                        Elite Admin
                                    </h4>
                                </div>
                            </div>
                        </td>
                        <td>
                           Single use 
                        </td>
                        <td>
                          John doe  
                        </td>
                        <td>
                           <label class="label label-danger">Angular</label> 
                        </td>
                        <td>
                          46  
                        </td>
                        <td>
                           356 
                        </td>
                        <td>
                            <h4 class="m-b-0"></h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="m-r-10">
                                    <a class="btn btn-circle-info ">EA</a>       
                                </div>
                                <div>
                                    <h4 class="m-b-0 font-16">
                                        Elite Admin
                                    </h4>
                                </div>
                            </div>
                        </td>
                        <td>
                           Single use 
                        </td>
                        <td>
                          John doe  
                        </td>
                        <td>
                           <label class="label label-danger">Angular</label> 
                        </td>
                        <td>
                          46  
                        </td>
                        <td>
                           356 
                        </td>
                        <td>
                            <h4 class="m-b-0"></h4>
                        </td>
                    </tr>  
                </tbody>
            </table>
        </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
@push('child-jscripts')
<script>
 xdata = [];
 getData()
    buildChart()
    buildChart1()
    buildChart2()
    buildChart3()
     function buildChart(){
    var ctx = document.getElementById('myChart');
    console.log(xdata);
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [25,56,23],
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

    function buildChart1(){
    var ctx1 = document.getElementById('myChart1');
    console.log(xdata);
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [25,56,23],
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
    function buildChart2(){
    var ctx1 = document.getElementById('myChart2');
    console.log(xdata);
    var myChart1 = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [25,56,23],
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
     function getData(params) {

// Make a request for a user with a given ID
axios.get('http://127.0.0.1:8000/api/v1/users')
  .then(function (response) {
    // handle success
    xdata = response.data
    // console.log(data);
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });
    }
    </script>
@endpush