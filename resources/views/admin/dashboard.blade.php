@extends('layout.teacher')

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